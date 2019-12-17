<!doctype html>
<html lang="pt-BR">

<head>
    <title>Estudantes de Atitude</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/jpg" href="./assets/imagens/favicon.png" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/custom-animations.css"> 
    <link rel="stylesheet" href="./assets/css/styleNumber.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/ca42b7ce0d708ee0817789585c449739?family=PeachesandCreamRegularW00" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script language="Javascript">
        var YY = 2020;
        var MM = 03;
        var DD = 02;
        var HH = 11;
        var MI = 59;
        var SS = 59;

        function atualizaContador() {
            var hoje = new Date();
            var futuro = new Date(YY, MM - 1, DD, HH, MI, SS);
            var ss = parseInt((futuro - hoje) / 1000);
            var mm = parseInt(ss / 60);
            var hh = parseInt(mm / 60);
            var dd = parseInt(hh / 24);
            ss = ss - (mm * 60);
            mm = mm - (hh * 60);
            hh = hh - (dd * 24);
            var faltam = '';

            faltam += (dd && dd > 1) ? dd + ' DIAS ' : (dd == 1 ? '1 DIA ' : '');
            var dia = faltam;
            faltam += (toString(hh).length) ? hh + ' hr, ' : '';
            var hora = (toString(hh).length) ? hh + ' hr, ' : '';
            faltam += (toString(mm).length) ? mm + ' min e ' : '';
            var minuto = (toString(mm).length) ? mm + ' min ' : '';

            faltam += ss + ' seg';

            if (dd + hh + mm + ss > 0) {
                $('#dia').html(dd);
                $('#hora').html(hh);
                $('#minuto').html(mm);
                $('#segundo').html(ss);
                setTimeout(atualizaContador, 1000);
            } else {
                $('#dia').html(0);
                $('#hora').html(0);
                $('#minuto').html(0);
                $('#segundo').html(0);
                setTimeout(atualizaContador, 1000);
            }
        }
    </script>
</head>

<body class="d-flex flex-column" onLoad="atualizaContador()">
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="./assets/imagens/file.mp4" type="video/mp4">
    </video>
    <div class="content">

        <nav class="marginNav">
            <div class="row justify-content-center" style="margin-top: 30px;">
                <a class="btnSiteOficial hb-fill-middle-bg hbtn1" href="./site-oficial/portal-aluno/emconstrucao.html">IR PARA O SITE OFICIAL
                    &rarr;</a>
            </div>
        </nav>
        <div id="corpoSite" class="page-content marginCorpoSite">
            <div class="row justify-content-center" style="padding: 0; margin-top: 3%;">
                <h2 class="text1">
                    <span>Vem Aí, </span>
                    <span style="font-size: larger;">2020 </span>
                    <span style="font-size: larger;" class="tresPontos1">.</span>
                    <span style="font-size: larger;" class="tresPontos2">.</span>
                    <span style="font-size: larger;" class="tresPontos3">.</span>
                </h2>
            </div>
            <div class="row justify-content-center" style="padding: 0; margin-top: -1%;">
                <h1 class="text2" style="text-align: center;">ESTUDANTES DE ATITUDE</h1>
            </div>
            <section class="section align-center overlay overlay-clr bg-cover  light-text hts"
                style="background-attachment: local !important; margin-top: 3%;">
                <div class="container" style="color: white;">


                    <!-- Countdown start -->
                    <div class="row counters-wrapper countdown">
                        
                        <div class="col-sm-3 w-50">
                            <div class="row justify-content-center">
                                <div class="counter-block counter-block-no-border counter-block-white has-separator">
                                    <div class="counter-box">
                                        <div class="counter-content">
                                            <span class="count" id="dia">50</span>
                                            <p class="title">dias</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-3 w-50">
                            <div class="row justify-content-center">
                                <div class="counter-block counter-block-no-border counter-block-white has-separator">
                                    <div class="counter-box">
                                        <div class="counter-content">
                                            <span class="count" id="hora">30</span>
                                            <p class="title">horas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-3 w-50">
                            <div class="row justify-content-center">
                                <div class="counter-block counter-block-no-border counter-block-white has-separator">
                                    <div class="counter-box">
                                        <div class="counter-content">
                                            <span class="count" id="minuto">20</span>
                                            <p class="title">minutos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-3 w-50">
                            <div class="row justify-content-center">
                                <div class="counter-block counter-block-no-border counter-block-white">
                                    <div class="counter-box">
                                        <div class="counter-content">
                                            <span class="count" id="segundo">10</span>
                                            <p class="title">segundos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>
        <!-- efeito -->
        <div id="formcadastro" style="display:none">
            <?php include("./formulario-pre-inscricao/formpreinscricao.php") ?>
        </div>


        <footer style="margin-top: 3%;">
            <div id="textt1" class="row justify-content-center">
                <div class="col-10">
                    <h3 
                        style="font-family: 'Montserrat', sans-serif; color: white; font-size: 16px; text-align: center;">
                        GARANTA A SUA PARTICIPAÇÃO NO PROJETO DE 2020 E FIQUE POR DENTRO DE TODOS OS ACONTECIMENTOS</h3>
                </div>
            </div>
            <div id="hbtn2h" class="row justify-content-center" style="margin-top: 30px;">
                <a class="btnSiteOficial hb-fill-middle-bg hbtn2" onclick="displayForm()">FAZER PRÉ INSCRIÇÃO</a>
            </div>
        </footer>
        <div class="container">
            <div class="row justify-content-center" id="btnAp2" style="margin-top: 30px; display: none;">
                <a class="hb-fill-middle-bg hbtn1" href="index.php" style="">&larr; VOLTAR</a>
            </div>

            <div class="row justify-content-center" style="margin-top: 2%; margin-bottom: 2%;">
                <h2 style="font-family: 'Montserrat', sans-serif; color: white; font-size: 16px; text-align: center;">2º
                    EDIÇÃO - PROJETO OFICIAL &reg; 2020</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="./assets/imagens/logoEstadoCGE.png" alt="" style="width: 90%; height: 90%; margin-left: 5%;">
                </div>
                <div class="col-4">
                    <img src="./assets/imagens/logoEstadoEduc.png" alt="" style="width: 90%; height: 90%; margin-right: 5%;">
                </div>
            </div>
        </div>

    </div>


    <!-- <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js?ver=1"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countTo.js"></script> -->


    <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }

    
    </script>

    <script type="text/javascript">
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#txbCheckin').datepicker({
            todayHighlight: true,
            beforeShowDay: function (date) {
                return date.valueOf() >= now.valueOf();
            },
            autoclose: true

        }).datepicker('setDate', new Date(2017, 9, 5)).on('changeDate', function (ev) {
            if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate")
                .valueOf()) {

                var newDate = new Date(ev.date);
                newDate.setDate(newDate.getDate() + 2);
                checkout.datepicker("update", newDate);

            }
        });


        var checkout = $('#txbCheckout').datepicker({
            beforeShowDay: function (date) {
                if (!checkin.datepicker("getDate").valueOf()) {
                    return date.valueOf() >= new Date().valueOf();
                } else {
                    return date.valueOf() > checkin.datepicker("getDate").valueOf();
                }
            },
            autoclose: true

        }).datepicker('setDate', new Date(2017, 9, 8)).on('changeDate', function (ev) { });


        function displayForm(){
            var displayDoFor = document.getElementById('formcadastro');
            var hb = document.getElementById('hbtn2h');
            var te = document.getElementById('textt1');

            document.getElementById('corpoSite').style.display = 'none';
            displayDoFor.style.display = 'block';
            te.style.display = 'none';
            hb.style.display = 'none';
            document.getElementById('btnAp2').style.display = 'block';


        }

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="./assets/js/jquery.mask.js" charset="utf8"></script>
<!-- <script src="js/animationFormPre.js"></script> -->

</body>

</html>