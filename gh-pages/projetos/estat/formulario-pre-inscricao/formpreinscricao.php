<?php
// date_default_timezone_set('America/Sao_Paulo');
// header("Content-type: text/html; charset=utf-8");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>PreInscrição</title>
    <style>
        .style1 {
            background: transparent !important;
            color: white !important;
            font-weight: 800;
        }

        .text1f {}
    </style>

</head>

<body>

    <div class="container mt-4  text-center mb-4" style="">
        <div>
            <h3 style="text-transform: uppercase;">formulário de pré inscrição</h3>
        </div>
    </div>

    <div id="displayDoForm" class="container" style="">
        <form id="idForm">
            <div class="form-group">
                <label for="escola" class="text1f">Nome Escola</label>
                <input type="text" name="escola" class="form-control style1" id="escola" placeholder="nome da escola..."
                    required>
            </div>
            <div class="form-group">
                <div id="umaregional" style="display:none">
                    <label for="regional" class="text1f">Regional</label>
                    <input type="text" class="form-control style1" id="regional" placeholder="regional" required>
                </div>
                <div id="variasregionais" style="display:block">
                    <!-- <label for="regional">Regional</label> -->
                    <label for="exampleFormControlSelect1" class="text1f">Selecione a regional</label>
                    <select class="form-control style1" id="selecRegional" name="regional"></select>
                </div>
            </div>
            <div class="form-group">
                <label for="cpf" class="text1f">CPF diretor</label>
                <input type="text" class="form-control style1" id="cpf" name="cpf" placeholder="000.000.000-00"
                    required>
            </div>
            <div class="form-group">
                <label for="email" class="text1f">Email (para acompanhar a preinscrição)</label>
                <input type="email" class="form-control style1" id="email" name="email" placeholder="email@com.br"
                    required>
            </div>
            <div class="form-group">
                <label for="telefone" class="text1f">Telefone (preferência whattsap)</label>
                <input type="text" class="form-control style1" id="telefone" name="telefone"
                    placeholder="(99) 9 9999-9999" required>
            </div>
            <label for="">fique tranquilo, seus dados nunca serão enviados para outras pessoas</label>
            <div class="form-group">
                <input type="submit" id="btnSubmit" class="form-control" value="Inscrever">
            </div>

        </form>



    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="jquery.mask.js" charset="utf8"></script>

    <script>
    

        $(function() {
     
        var ret = [];

        $('#cpf').mask('000.000.000-00');
        $('#telefone').mask('(00) 0 0000-0000');
        $.ajax({
        url : "actionPreInscricao.php",
        type : 'post',
        data : {

        },
        beforeSend : function(){

        }
        })
        .done(function(data){
        ret = JSON.parse(data);
        var nomeEscolas = [];
        for(var i = 0; i < ret.length; i++){ nomeEscolas.push(ret[i].escola); } $("#escola" ).autocomplete({ source: [
            ...new Set( nomeEscolas ) ] }); }) .fail(function(jqXHR, textStatus, msg){ alert(msg); });
            $('#escola').keyup(function(){ if($('#escola').val()=="" ){ $("#selecRegional option").remove(); } })
            $('#escola').blur(function(){ $("#selecRegional option").remove(); var regional=[]; for(var i=0; i <
            ret.length; i++){ if(ret[i].escola==$('#escola').val()){ regional.push(ret[i].regional); } } [ ...new Set(
            regional ) ].forEach(el=>{
            $("#selecRegional").append(new Option(el,el));
            regional.pop();
            })

            })

            $('#cpf').keyup(function(){
            var cpf = $('#cpf').val();
            var nomeEscola = $('#escola').val();
            if(cpf.length == 14){
                $.ajax({
                url : "actionPreInscricao.php",
                type : 'post',
                data : {
                action : "validarCpf",
                cpf,
                nomeEscola
                },
                beforeSend : function(){
                // $("#resultado").html("ENVIANDO...");
                }
                })
                .done(function(data){
                if(!JSON.parse(data)){
                $('#cpf').val('');
                alert('Desculpe, não encontramos este CPF na nossa base.')
                }
                })
                .fail(function(jqXHR, textStatus, msg){
                alert(data);
                });

            }



            })

            $('#btnSubmit').click( function (){
            var valid = validFields([
            $('#escola'),
            $('#telefone'),
            $('#email'),
            $('#cpf')]
            );


            if(!valid){ return ; }
            if(!validLenghtFields()){return }
            var dataForm = $('#idForm').serialize();

            $.ajax({
            url : "actionPreInscricao.php",
            type : 'post',
            data : {
            action : "salvarInscricao",
            dataForm
            },
            beforeSend : function(){
            // $("#resultado").html("ENVIANDO...");
            }
            })
            .done(function(data){
            alert(data);
            $('#idForm').trigger("reset");
            $("#selecRegional option").remove();
            })
            .fail(function(jqXHR, textStatus, msg){
            alert(data);
            });

            })


            function validFields(fields){
            var valid = true;
            fields.forEach(el =>{
            if(el[0].value == ''){
            valid = false
            }
            })
            return valid;
            }

            function validLenghtFields(){

            if($('#cpf').val().length < 14){ 
                alert('Por favor, insira os 11 dígitos do CPF');
                 return false; 
                }
                if($('#selecRegional').children("option:selected").val()==undefined |
                $('#selecRegional').children("option:selected").val()=='' ){ alert('Por favor, selecione uma regional')
                return false; } return true; } }); 
        </script> 
    </body>
</html>