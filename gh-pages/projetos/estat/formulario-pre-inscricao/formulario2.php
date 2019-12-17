<!doctype html>
<html lang="pt-BR">

<head>
    <title>Formulário Estudante de Atitude</title>
    <link rel="icon" type="image/jpg" href="imagens/favicon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/estilo-formulario.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147970163-1"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-147970163-1');
    </script>
</head>

<body class="d-flex flex-column" id="testeBackground">
    <div id="page-content">

        <!-- HOME DO FOMULÁRIO -->

        <div id="homeFormulario" style="display: block;">
            <div class="container" style="margin-top: 12%;">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h1 id="oqueAchou" class="oqueAchou1"
                            style="color: #ffc100; font-family: 'Alfa Slab One', cursive; text-align: center; font-size: 80px;">
                            INSIRA SEU CPF</h1>
                    </div>
                </div>

                <div class="row justify-content-center" style="margin-top: 6%;">
                    <label class="field a-field a-field_a1">
                        <input class="field__input a-field__input" placeholder="000.000.000-00" required type="number"
                            id="cpfProf" style="width: 500px; color: white; font-weight: 700; font-size: 24px;">
                        <span class="a-field__label-wrap">
                            <span class="a-field__label">Insira o seu CPF</span>
                        </span>
                    </label>
                </div>

                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="confirmarDadosProf()" id="botaoRoxo">Enviar</button>
                </div>
            </div>
        </div>

        <!-- <form id="formGeral" method="post"> -->
        <div id="pegaInformacaoProf" style="display: none;">


            <div id="marginTexto" class="container-fluid">
                <div class="row justify-content-center" style="margin-top:10%;">
                    <div class="col-10">
                        <h1 id="oqueAchou" class="oqueAchou1"
                            style="color: #ffc100; font-family: 'Alfa Slab One', cursive; text-align: center; font-size: 80px;">
                            O QUE VOCÊ ACHOU?</h1>
                    </div>
                </div>
            </div>
            <div id="somePrimeiro" style="display: block;">
                <div class="row justify-content-center" style="margin-top: 6%;">
                    <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-8">
                        <h3 style="text-align: center; color: white; font-family: 'Lobster', cursive; font-size: 250%;">
                            Já vamos emitir o seu certificado, mas antes, gostaríamos de saber a sua opinião. Vamos lá?
                        </h3>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'somePrimeiro', 'classe1pergunta1')" id="botaoRoxo11"
                        class="botaoRoxo2">Estou Preparado!</button>
                </div>
            </div>


        </div>
        <!-- PRIMEIRA CLASSE DE PERGUNTAS -CONTEUDO -->

        <!-- PRIMEIRA PERGUNTA -->
        <div id="classe1pergunta1" style="display: none;">
            <div class="container">
                <!-- <div id="contagemPergunta" class="cont"></div> -->
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="color: white; text-align: center;">Dos conhecimentos adquiridos para serem repassados
                            ao Time:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta1" style="color: white;">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1"
                                        id="classe1pergunta1otimo" value="otimo" checked="checked">
                                    <label class="form-check-label" for="classe1pergunta1otimo">Ótimo</label>
                                    <div class="check"></div>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1"
                                        id="classe1pergunta1bom" value="bom">
                                    <label class="form-check-label" for="classe1pergunta1bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1"
                                        id="classe1pergunta1regular" value="regular">
                                    <label class="form-check-label" for="classe1pergunta1regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1"
                                        id="classe1pergunta1ruim" value="ruim">
                                    <label class="form-check-label" for="classe1pergunta1ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta1"
                                        id="classe1pergunta1pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe1pergunta1pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe1pergunta1', 'classe1pergunta2')"
                        id="botaoRoxo">Próxima</button>
                </div>
            </div>
            <div class="container" style="margin-bottom: 5%;"></div>
        </div>
        <!-- SEGUNDA PERGUNTA -->
        <div id="classe1pergunta2" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da adequação da carga horária:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta2">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2"
                                        id="classe1pergunta2otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe1pergunta2otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2"
                                        id="classe1pergunta2bom" value="bom">
                                    <label class="form-check-label" for="classe1pergunta2bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2"
                                        id="classe1pergunta2regular" value="regular">
                                    <label class="form-check-label" for="classe1pergunta2regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2"
                                        id="classe1pergunta2ruim" value="ruim">
                                    <label class="form-check-label" for="classe1pergunta2ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta2"
                                        id="classe1pergunta2pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe1pergunta2pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe1pergunta2', 'classe2pergunta1')"
                        id="botaoRoxo">Próxima</button>

                </div>
                <div class="container" style="margin-bottom: 5%;"></div>

            </div>
        </div>
        <!-- FIM - PRIMEIRA CLASSE DE PERGUNTAS -->

        <!-- SEGUNDA CLASSE DE PERGUNTAS - INSTRUTOR-->

        <!-- TERCEIRA PERGUNTA -->
        <div id="classe2pergunta1" class="classe2pergunta1" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da didática utilizada pelo instrutor:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta3">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3"
                                        id="classe2pergunta1otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe2pergunta1otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3"
                                        id="classe2pergunta1bom" value="bom">
                                    <label class="form-check-label" for="classe2pergunta1bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3"
                                        id="classe2pergunta1regular" value="regular">
                                    <label class="form-check-label" for="classe2pergunta1regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3"
                                        id="classe2pergunta1ruim" value="ruim">
                                    <label class="form-check-label" for="classe2pergunta1ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta3"
                                        id="classe2pergunta1pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe2pergunta1pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe2pergunta1', 'classe2pergunta2')"
                        id="botaoRoxo">Próxima</button>
                </div>
            </div>
            <div class="container" style="margin-bottom: 5%;"></div>
        </div>

        <!-- QUARTA PERGUNTA -->
        <div id="classe2pergunta2" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da sua disposição em tirar dúvidas:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta4">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4"
                                        id="classe2pergunta2otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe2pergunta2otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4"
                                        id="classe2pergunta2bom" value="bom">
                                    <label class="form-check-label" for="classe2pergunta2bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4"
                                        id="classe2pergunta2regular" value="regular">
                                    <label class="form-check-label" for="classe2pergunta2regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4"
                                        id="classe2pergunta2ruim" value="ruim">
                                    <label class="form-check-label" for="classe2pergunta2ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta4"
                                        id="classe2pergunta2pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe2pergunta2pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <div class="row justify-content-center" style="margin-top: 3%;">
                    <button onclick="trocaDisplay('marginTexto', 'classe2pergunta2', 'classe2pergunta3')"
                        id="botaoRoxo">Próxima</button>
                </div>
            </div>
            <div class="container" style="margin-bottom: 5%;"></div>
        </div>
        <!-- QUINTA PERGUNTA -->
        <div id="classe2pergunta3" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da apresentação prática das etapas do Projeto:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta5">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta5"
                                        id="classe2pergunta3otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe2pergunta3otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta5"
                                        id="classe2pergunta3bom" value="bom">
                                    <label class="form-check-label" for="classe2pergunta3bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>

                      
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta5"
                                        id="classe2pergunta3ruim" value="ruim">
                                    <label class="form-check-label" for="classe2pergunta3ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta5"
                                        id="classe2pergunta3regular" value="regular">
                                    <label class="form-check-label" for="classe2pergunta3regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div> 
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta5"
                                        id="classe2pergunta3pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe2pergunta3pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe2pergunta3', 'classe2pergunta4')"
                        id="botaoRoxo">Próxima</button>
                </div>

                <div class="container" style="margin-bottom: 5%;"></div>
            </div>
        </div>
        <!-- SEXTA PERGUNTA -->
        <div id="classe2pergunta4" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da pontualidade do instrutor:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta6">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta6"
                                        id="classe2pergunta4otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe2pergunta4otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta6"
                                        id="classe2pergunta4bom" value="bom">
                                    <label class="form-check-label" for="classe2pergunta4bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta6"
                                        id="classe2pergunta4regular" value="regular">
                                    <label class="form-check-label" for="classe2pergunta4regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta6"
                                        id="classe2pergunta4ruim" value="ruim">
                                    <label class="form-check-label" for="classe2pergunta4ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta6"
                                        id="classe2pergunta4pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe2pergunta4pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe2pergunta4', 'classe3pergunta1')"
                        id="botaoRoxo">Próxima</button>
                </div>
                <div class="container" style="margin-bottom: 5%;"></div>
            </div>
        </div>
        <!-- FIM - SEGUNDA CLASSE DE PERGUNTAS -->


        <!-- TERCEIRA CLASSE DE PERGUNTAS - PARTICIPANTES-->

        <!-- SÉTIMA PERGUNTA -->
        <div id="classe3pergunta1" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da minha participação do projeto:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta7">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta7"
                                        id="classe3pergunta1otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe3pergunta1otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta7"
                                        id="classe3pergunta1bom" value="bom">
                                    <label class="form-check-label" for="classe3pergunta1bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta7"
                                        id="classe3pergunta1regular" value="regular">
                                    <label class="form-check-label" for="classe3pergunta1regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta7"
                                        id="classe3pergunta1ruim" value="ruim">
                                    <label class="form-check-label" for="classe3pergunta1ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta7"
                                        id="classe3pergunta1pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe3pergunta1pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe3pergunta1', 'classe3pergunta2')"
                        id="botaoRoxo">Próxima</button>
                </div>
            </div>
            <div class="container" style="margin-bottom: 5%;"></div>
        </div>
        <!-- OITAVA PERGUNTA -->
        <div id="classe3pergunta2" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da sua relação com os participantes do projeto:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta8">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta8"
                                        id="classe3pergunta2otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe3pergunta2otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta8"
                                        id="classe3pergunta2bom" value="bom">
                                    <label class="form-check-label" for="classe3pergunta2bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta8"
                                        id="classe3pergunta2regular" value="regular">
                                    <label class="form-check-label" for="classe3pergunta2regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta8"
                                        id="classe3pergunta2ruim" value="ruim">
                                    <label class="form-check-label" for="classe3pergunta2ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta8"
                                        id="classe3pergunta2pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe3pergunta2pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe3pergunta2', 'classe3pergunta3')"
                        id="botaoRoxo">Próxima</button>
                </div>
                <div class="container" style="margin-bottom: 5%;"></div>
            </div>
        </div>
        <!-- NONA PERGUNTA -->
        <div id="classe3pergunta3" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da sua facilidade para socializar:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta9">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta9"
                                        id="classe3pergunta3otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe3pergunta3otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta9"
                                        id="classe3pergunta3bom" value="bom">
                                    <label class="form-check-label" for="classe3pergunta3bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta9"
                                        id="classe3pergunta3regular" value="regular">
                                    <label class="form-check-label" for="classe3pergunta3regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta9"
                                        id="classe3pergunta3ruim" value="ruim">
                                    <label class="form-check-label" for="classe3pergunta3ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta9"
                                        id="classe3pergunta3pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe3pergunta3pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe3pergunta3', 'classe3pergunta4')"
                        id="botaoRoxo">Próxima</button>
                </div>
                <div class="container" style="margin-bottom: 5%;"></div>

            </div>
        </div>
        <!-- DÉCIMA PERGUNTA -->
        <div id="classe3pergunta4" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Do seu entendimento dos assuntos abordados:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta10">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta10"
                                        id="classe3pergunta4otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe3pergunta4otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta10"
                                        id="classe3pergunta4bom" value="bom">
                                    <label class="form-check-label" for="classe3pergunta4bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta10"
                                        id="classe3pergunta4regular" value="regular">
                                    <label class="form-check-label" for="classe3pergunta4regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta10"
                                        id="classe3pergunta4ruim" value="ruim">
                                    <label class="form-check-label" for="classe3pergunta4ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta10"
                                        id="classe3pergunta4pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe3pergunta4pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe3pergunta4', 'classe4pergunta1')"
                        id="botaoRoxo">Próxima</button>
                </div>
                <div class="container" style="margin-bottom: 5%;"></div>

            </div>
        </div>
        <!-- FIM - TERCEIRA CLASSE DE PERGUNTAS -->

        <!-- QUARTA CLASSE DE PERGUNTAS - LOGÍSTICA-->

        <!-- DÉCIMA PRIMEIRA  PERGUNTA -->
        <div id="classe4pergunta1" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da infraestrutura:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta11">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta11"
                                        id="classe4pergunta1otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe4pergunta1otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta11"
                                        id="classe4pergunta1bom" value="bom">
                                    <label class="form-check-label" for="classe4pergunta1bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta11"
                                        id="classe4pergunta1regular" value="regular">
                                    <label class="form-check-label" for="classe4pergunta1regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta11"
                                        id="classe4pergunta1ruim" value="ruim">
                                    <label class="form-check-label" for="classe4pergunta1ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta11"
                                        id="classe4pergunta1pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe4pergunta1pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <button onclick="trocaDisplay('marginTexto', 'classe4pergunta1', 'classe4pergunta2')"
                        id="botaoRoxo">Próxima</button>
                </div>
                <div class="container" style="margin-bottom: 5%;"></div>
            </div>
        </div>
        <!-- DÉCIMA SEGUNDA PERGUNTA -->
        <div id="classe4pergunta2" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <div class="col-10">
                        <h3 style="text-align: center;">Da estrutura da sala de aula:</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form id="formPergunta12">
                        <fieldset>
                            <div class="col-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta12"
                                        id="classe4pergunta2otimo" value="otimo" checked>
                                    <label class="form-check-label" for="classe4pergunta2otimo">Ótimo</label>
                                    <div class="check"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta12"
                                        id="classe4pergunta2bom" value="bom">
                                    <label class="form-check-label" for="classe4pergunta2bom">Bom</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta12"
                                        id="classe4pergunta2regular" value="regular">
                                    <label class="form-check-label" for="classe4pergunta2regular">Regular</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta12"
                                        id="classe4pergunta2ruim" value="ruim">
                                    <label class="form-check-label" for="classe4pergunta2ruim">Ruim</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pergunta12"
                                        id="classe4pergunta2pessimo" value="pessimo">
                                    <label class="form-check-label" for="classe4pergunta2pessimo">Péssimo</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </div>

                            </div>

                        </fieldset>

                    </form>
                </div>
                <div class="row justify-content-center" style="margin-top: 3%;">
                    <!-- trocaDisplay('Texo o que você achou', 'desaparece', 'aparece') -->
                    <!-- <button onclick="trocaDisplay('marginTexto', 'classe4pergunta2', 'despedidaFormulario')"
                            id="botaoRoxo">Fim</button> -->

                    <button onclick="submetFormularios()" id="botaoRoxo">Enviar</button>
                </div>
                <div class="container" style="margin-bottom: 5%;"></div>

            </div>
        </div>

        <div id="textUltimaPagina" class="container-fluid" style="margin-top:15%; display:none;">
            <div class="row justify-content-center">
                <h1 id="oqueAchou"
                    style="color: #ffc100; font-family: 'Alfa Slab One', cursive; text-align: center; font-size: 80px;">
                    Imprima seu certificado</h1>
            </div>
        </div>

        <!-- CERTIFICADO -->
        <div id="certificado" style="display: none;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 5%;">
                    <form id="formCertificado" method="post" action="./certificadoprofessor.php" target="_blank">
                        <div class="form-group d-flex justify-content-center">
                            <input type="hidden" class="form-control" style="width:20%;" name="cpf" id="inputCPF"
                                aria-describedby="cpfHelp">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="../portal-professor/index.html">
                                    <button class="botaoRoxo1" type="button">Voltar para HOME</button>
                                </a>
                            </div>
                            <div class="col-6">
                                <button id="btnImprimir" class="botaoRoxo1" type="submit" class="btn btn-primary">Clique
                                    aqui</button>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="container" style="margin-bottom: 5%;"></div>

            </div>
        </div>
    </div>


    <script>
        var idProf = null;
        var cpfProf = null;
        $(document).ready(function () {
            $('#btnImprimir').click(function () {
                $('#formCertificado').submit();

            })
        });


        function confirmarDadosProf() {
            // document.getElementById('homeFormulario').style.display = 'none';
            // resonderQuestionario();

            var cpfProfessor = $("#cpfProf").val();
            if (cpfProfessor == "") {
                alert("Por Favor, Insira um CPF válido!");
            }

            $.ajax({
                url: "actionQuestionario.php",
                type: 'post',
                data: {
                    cpfProfessor,
                    action: "validarCpfProfessor"
                },
                beforeSend: function () {
                    //$("#resultado").html("ENVIANDO...");
                }
            })
                .done(function (msg) {
                    // $("#resultado").html(msg);
                    let data = JSON.parse(msg);
                    if (!data.existeProfessor) {
                        mensagemNaoExisteProfessor();
                    }
                    if (data.existeProfessor && !data.respondeu) {
                        idProf = data.idProfessor;
                        cpfProf = data.cpfProfessor;
                        document.getElementById('homeFormulario').style.display = 'none';
                        resonderQuestionario();
                    }
                    if (data.existeProfessor && data.respondeu) {
                        cpfProf = data.cpfProfessor;
                        document.getElementById("inputCPF").value = cpfProf;

                        imprimirCertificado(true);
                    }
                    console.log(data);
                })
                .fail(function (jqXHR, textStatus, msg) {
                    alert(msg);
                });
        }




        function resonderQuestionario() {
            trocaDisplay('marginTexto', 'homeFormulario', 'pegaInformacaoProf');
        }

        function mensagemNaoExisteProfessor() {
            alert('Desculpe, Professor não encontrado.');
        }

        function submetFormularios() {




            var arrayResposta = [];
            let resposta1 = $('#formPergunta1').serialize().split('=')[1];
            let resposta2 = $('#formPergunta2').serialize().split('=')[1];
            let resposta3 = $('#formPergunta3').serialize().split('=')[1];
            let resposta4 = $('#formPergunta4').serialize().split('=')[1];
            let resposta5 = $('#formPergunta5').serialize().split('=')[1];
            let resposta6 = $('#formPergunta6').serialize().split('=')[1];
            let resposta7 = $('#formPergunta7').serialize().split('=')[1];
            let resposta8 = $('#formPergunta8').serialize().split('=')[1];
            let resposta9 = $('#formPergunta9').serialize().split('=')[1];
            let resposta10 = $('#formPergunta10').serialize().split('=')[1];
            let resposta11 = $('#formPergunta11').serialize().split('=')[1];
            let resposta12 = $('#formPergunta12').serialize().split('=')[1];


            arrayResposta = [resposta1, resposta2];
            $.ajax({
                url: "actionQuestionario.php",
                type: 'post',
                data: {
                    resposta1,
                    resposta2,
                    resposta3,
                    resposta4,
                    resposta5,
                    resposta6,
                    resposta7,
                    resposta8,
                    resposta9,
                    resposta10,
                    resposta11,
                    resposta12,
                    idProf,
                    cpfProf,
                    action: "salvarResposta"
                },
                beforeSend: function () {
                    //$("#resultado").html("ENVIANDO...");
                }
            })
                .done(function (msg) {
                    // $("#resultado").html(msg);
                    let data = JSON.parse(msg);
                    if (data.salvo) {
                        alert('Questionário salvo com sucesso!!! OBRIGADO')
                        cpfProf = data.cpfProfessor;
                        document.getElementById("inputCPF").value = cpfProf;
                        imprimirCertificado(false);
                    }
                    console.log(data);
                })
                .fail(function (jqXHR, textStatus, msg) {
                    alert(msg);
                });



        }


        function trocaDisplay(marginTexto, divDesaparece, divAparece) {
            // var nomeProfessor = document.getElementById('nomeProf');
            // var codInep = document.getElementById('inep');
            // verificar se ambos estão preenchidos]
            //caso preenchidos continue
            //caso algum esteja em branco retorna uma mesagem de campos obrigatório.

            var displayDesaparece = document.getElementById(divDesaparece);
            var displayAparece = document.getElementById(divAparece);
            var marginTextoo = document.getElementById(marginTexto);


            displayDesaparece.style.display = 'none';
            displayAparece.style.display = 'block';
            marginTextoo.style.marginTop = '1.5%';
        }

        function imprimirCertificado(respex) {

            if (respex) {
                document.getElementById('textUltimaPagina').style.display = 'block';
                trocaDisplay('marginTexto', 'homeFormulario', 'certificado');
            } else {
                document.getElementById('homeFormulario').style.display = 'none';
                document.getElementById('textUltimaPagina').style.display = 'block';
                trocaDisplay('marginTexto', 'classe4pergunta2', 'certificado');
                document.getElementById('classe3pergunta4').style.display = 'none';
                document.getElementById('pegaInformacaoProf').style.display = 'none';
            }


        }

        function gerarCertificado() {
            $.ajax({
                url: "certificadoprofessor.php",
                type: 'post',
                data: {
                    cpfProf
                },
                beforeSend: function () {
                    //$("#resultado").html("ENVIANDO...");
                }
            });
        }
    //  .done(function(msg){
    //      // $("#resultado").html(msg);
    //     let data = JSON.parse(msg); 
    //     if(!data.existeProfessor){
    //         mensagemNaoExisteProfessor();
    //     }
    //     if(data.existeProfessor && !data.respondeu){
    //         idProf = data.idProfessor;
    //         cpfProf = data.cpfProfessor;
    //         resonderQuestionario();
    //     }
    //     if(data.existeProfessor && data.respondeu){
    //         cpfProf = data.cpfProfessor;
    //         imprimirCertificado();
    //     }
    //     console.log(data);
    //  })
    //  .fail(function(jqXHR, textStatus, msg){
    //       alert(msg);
    //  }); 
    // }

    </script>

</body>

</html>












      