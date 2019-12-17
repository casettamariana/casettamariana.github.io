<?php
date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: text/html; charset=utf-8');


$servername = "mysqlprod01.intra.goias.gov.br";
$username = "cgeestudanteprd";
$password = "beOLMDxdUKAH9gI";
$db = 'CGE_SiteEstudantesAtitude';


$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    echo json_encode($conn->connect_error);
    exit();
    $array["erro"] = $conn->connect_error;
    throw new Exception("Connection failed: " . $conn->connect_error);
}


if($_POST['action'] == 'validarCpf'){
    $cpf = preg_replace('/[^0-9]/', '', $_POST['cpf']) ;
    $ret = false;
    $resultDiretor = $conn->query("SELECT * FROM tb_diretor WHERE NR_CPF= '$cpf'");
    if ($resultDiretor->num_rows > 0) {
        $ret =  true;
    }
    echo json_encode($ret); exit();
}

if($_POST['action'] == 'salvarInscricao'){
    mysqli_set_charset($conn, "utf8");

    parse_str($_POST['dataForm'], $searcharray);
   
    $cpfDiretor = preg_replace('/[^0-9]/', '', $searcharray['cpf']);
    $nomeEscola = $searcharray['escola'];
    $regionalEscola = $searcharray['regional'];
    $email = $searcharray['email'];
    $telefone = preg_replace('/[^0-9]/', '', $searcharray['telefone']);
    $sqlEscolaExiste = "SELECT * FROM tb_escola_pre_inscricao WHERE nome_escola = '$nomeEscola' AND regional_escola = '$regionalEscola'";
    
    $resultEscolaExiste = $conn->query($sqlEscolaExiste);
    if ($resultEscolaExiste->num_rows > 0) {
        echo "Escola já foi pré cadastrada!!!"; 
    }else{

    $sql = "INSERT INTO tb_escola_pre_inscricao(nome_escola, cpf_diretor, email_diretor,telefone_diretor,regional_escola)
    VALUES ('$nomeEscola', '$cpfDiretor', '$email', '$telefone','$regionalEscola')";

        if ($conn->query($sql) === TRUE) {
            echo "Pré Inscrição realizada com sucesso!!!"; 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


    }



    $conn->close();
        exit();

}


if($_POST['action'] == 'listGrafico'){
    
    $queryGraf = 'SELECT  DISTINCT(regional_escola) as regional, count(nome_escola) as qtd   FROM `tb_escola_pre_inscricao`
                    GROUP by regional_escola ORDER BY qtd DESC';

    $resultGraf = $conn->query($queryGraf);
    $regionaiscad = array();
    $countEscola = array();
    $totalEscola = 0;
    if ($resultGraf->num_rows > 0) {
        while($row = $resultGraf->fetch_assoc()) {
            $nomeRegional = utf8_encode($row["regional"]);
            array_push($regionaiscad, $nomeRegional);
            $count = utf8_encode($row["qtd"]);
            $totalEscola+= $count;
            array_push($countEscola, $count);
           
        }

      


        echo json_encode([$regionaiscad,$countEscola, $totalEscola]);exit();

    }

}

if($_POST['action'] == 'listEscolas'){

        $regional = removerAcentos($_POST['regional']);
 
        $queryListEscola = "SELECT nome_escola as escola, regional_escola as regional FROM tb_escola_pre_inscricao WHERE regional_escola = '$regional' ORDER BY nome_escola";
        
        $resultEscolas = $conn->query($queryListEscola);
        $retEscolasArray = array();
        if ($resultEscolas->num_rows > 0) { 
        
            while($row = $resultEscolas->fetch_assoc()) {
                $nomeEscola = utf8_encode($row["escola"]);
                $nomeRegional = utf8_encode($row["regional"]);
                $tbEscolas = [$nomeEscola,$nomeRegional];
                array_push($retEscolasArray, $tbEscolas);
        }
        echo json_encode($retEscolasArray);exit();

    }else{
        $conn->close();
        exit();
    }
 

}

function removerAcentos($texto){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$texto);
}



$result = $conn->query("SELECT * FROM tb_ieducar_escola");


$escolas = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $escola =  utf8_encode($row["NM_ESCOLA"]);
        $regional = utf8_encode($row["NM_INSTITUICAO"]);
        $objescola = [
            'escola' => $escola,
            'regional' => $regional
        ];
            
        array_push($escolas, $objescola);
    }
  
    echo json_encode($escolas);
     exit();


} else {
    echo "0 results";
}
$conn->close();


?>






