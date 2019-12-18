<?php
setlocale(LC_ALL, 'ptb', 'portuguese-brazil', 'pt-br', 'bra', 'brazil');
date_default_timezone_set('America/Sao_Paulo');



$servername = "mysqlhom01.intra.goias.gov.br";
$username = "cgeestudantehom";
$password = "t1ypny37fo0BlAh";
$db = 'CGE_SiteEstudantesAtitude_hom';
include  ('./phpexcel/PHPExcel.php');
include  ('./phpexcel/PHPExcel/Writer/Excel2007.php');


$conn = new mysqli($servername, $username, $password, $db);

$query = 'SELECT * FROM tb_escola_pre_inscricao order by regional_escola, data_inscricao';

$result = $conn->query($query);


$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('A3:S3')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);



$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', "Escolas pré cadastradas - 2020" )->mergeCells('A1:R1')
->setCellValue('A3', 'Escola' )
->setCellValue('B3', 'CPF diretor' )
->setCellValue('C3', "Email diretor" )
->setCellValue("D3", "Telefone diretor" )
->setCellValue("E3", "Regional escola" );


$linha = 4;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue("A". $linha, utf8_encode($row['nome_escola']))
        ->setCellValue("B". $linha, $row['cpf_diretor'])
        ->setCellValue("C". $linha, $row['email_diretor'])
        ->setCellValue("D". $linha, $row['telefone_diretor'])
        ->setCellValue("E". $linha, utf8_encode($row['regional_escola']));
        $linha++;
    }
    
    
}


    $objPHPExcel->getActiveSheet()->getStyle('B4:B100')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('C4:C100')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('D4:D100')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('E4:E100')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('F4:F100')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
    // Cabeçalho do arquivo para ele baixar
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="pre-inscricao-2020.xlsx"');
    header('Cache-Control: max-age=0');
    // Se for o IE9, isso talvez seja necessário
    header('Cache-Control: max-age=1');

    // Acessamos o 'Writer' para poder salvar o arquivo
    //$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    
    
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

    $filePath = '' . rand(0, getrandmax()) . rand(0, getrandmax()) . ".tmp";
    $objWriter->save($filePath);
    readfile($filePath);
    unlink($filePath);
    exit;

    // Salva diretamente no output, poderíamos mudar arqui para um nome de arquivo em um diretório ,caso não quisessemos jogar na tela
    $objWriter->save('php://output'); 

    exit;
    

?>