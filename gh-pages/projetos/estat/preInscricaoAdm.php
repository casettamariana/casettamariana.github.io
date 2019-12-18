<?php

date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: text/html; charset=utf-8');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>ADM Pré Inscrição</title>
</head>
<body>
    <header class="container mt-5 mb-5 text-center ">
        <h3>Dados pré inscrição - 2020</h3> 
       
    </header>
    <div class="container">
        <div class="row mb-5 ml-2">
            <div style="display: flex;justify-content: space-between;width: 100%;">
                <div><span>Total Escolas:</span><b id="totalEscolas" class="ml-1"> </b></div> <button class="btn btn-secondary btn-sm mr-3" onclick="window.location.href='/relatorioEscolas.php'">Relatório</button></div>   
            </div>
         
        <div class="row">    
            <div class="col-xl-4 col-lg-4  col-md-12">
                 <h5 class="text-center">Qtde Escola/Regional</h5>
                 <div style="">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Regional</th>
                                    <th scope="col">Qtde</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyRegional"></tbody>
                        </table>
                 </div>
                 
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 ">
                <h5 class="text-center">Regional: <span id="nomeRegional"></span></h5>
                <div style="">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ESCOLA</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyEscolas"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
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

<script src="apexcharts.js" charset="utf8"></script>
<script src="./js/preinscricao.js" charset="utf8"></script>
</body>
</html>
