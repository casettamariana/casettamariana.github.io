//FUNCÇÃO PARA MUDANÇA DE PÁGINA
function efeitoMudancaDePaginaEmContrucao(id) {

    /* -- INTRUÇÕES PARA REPLICAÇÃO DO CÓDIGO -- */
    /* 
    1- No vetor elementos, substituir colocando as ids que deseja adicionar o efeito
    2- Analizar se o efeito a ser adicionado é realmente o que está no código atual
    3- Observar se todos os delays estão referenciados no switch:case 
    */

    //Variável de efeito
    var efeitoOut = '';
    //VETOR COM OS ELEMENTOS A SEREM USADOS
    var elementos = ["efect1", "efect2", "efect3", "efect4", "efect5", "efect5", "efect6"];


    // FOR responsável em caminhar pelos elementos do body que são adicionados no vetor acima
    for (var i = 0; i < elementos.length; i++) {
        //responsável por dimencionar a quantidade de classes do elemento selecionado pelo primeiro for, para que o segundo for cumpra seu papel 
        var tamClass = document.getElementById(elementos[i]).classList.length;

        //adicionando duração de efeito
        document.getElementById(elementos[i]).classList.add('durationAnim');

        //FOR responsável por "caminhar" pelas classes
        for (j = 0; j < (tamClass); j++) {
            //responsável pela retirada do efeito de animação que foi adicionado na classe
            //e adicionar animação
            
            if (document.getElementById(elementos[i]).classList[j] == "bounceInRight") {
                document.getElementById(elementos[i]).classList.remove("bounceInRight");
                document.getElementById(elementos[i]).classList.add("bounceInRight");
            } else if (document.getElementById(elementos[i]).classList[j] == "zoomIn") {
                document.getElementById(elementos[i]).classList.remove("zoomIn");
                document.getElementById(elementos[i]).classList.add("zoomOut");
            } else {
                document.getElementById(elementos[i]).classList.add("zoomOut");
            
            }

            //switch responsável por generalizar o dalay e remover a classe do mesmo
            switch (document.getElementById(elementos[i]).classList[j]) {
                case 'delay-1s':
                    document.getElementById(elementos[i]).classList.remove('delay-1s');
                    document.getElementById(elementos[i]).classList.add('delay-1-5s');
                    j = (tamClass + 1);
                    break;
                case 'delay-1-5s':
                    document.getElementById(elementos[i]).classList.remove('delay-1-5s');
                    document.getElementById(elementos[i]).classList.add('delay-1-7s');
                    j = (tamClass + 1);
                    break;
                case 'delay-2s':
                    document.getElementById(elementos[i]).classList.remove('delay-2s');
                    document.getElementById(elementos[i]).classList.add('delay-2s');
                    j = (tamClass + 1);
                    break;
                case 'delay-2-5s':
                    document.getElementById(elementos[i]).classList.remove('delay-2-5s');
                    document.getElementById(elementos[i]).classList.add('delay-1-5s');
                    j = (tamClass + 1);
                    break;
                case 'delay-3s':
                    document.getElementById(elementos[i]).classList.remove('delay-3s');
                    document.getElementById(elementos[i]).classList.add('delay-1s');
                    j = (tamClass + 1);
                    break;
                case 'delay-3-5s':
                    document.getElementById(elementos[i]).classList.remove('delay-3-5s');
                    document.getElementById(elementos[i]).classList.add('delay-3-5s');
                    j = (tamClass + 1);
                    break;
                default:
                    break;
            }
        }

    }
    setTimeout(function () {
        //remover classes existentes
        document.getElementById('idBodyEmContrucao').classList.remove('fadeIn');
        document.getElementById('idBodyEmContrucao').classList.remove('delay-1s');
        document.getElementById('idBodyEmContrucao').classList.remove('duration-3s');
        //adicionar novas classes
        document.getElementById('idBodyEmContrucao').classList.add('animated');
        document.getElementById('idBodyEmContrucao').classList.add('duration-2s');
        document.getElementById('idBodyEmContrucao').classList.add('delay-0-5s');
        document.getElementById('idBodyEmContrucao').classList.add('fadeOut');
    }, 4000);

    //  SE O BOTÃO CLICADO FOR O DO ALUNO REDIRECIONA PARA O PORTAL DO MESMO
    if (id == 'btnVoltar') {
        setTimeout(function () {
            window.history.go(-1);
        }, 4500);

        //  SE O BOTÃO CLICADO FOR O DO ALUNO REDIRECIONA PARA O PORTAL DO MESMO
    } else if (id == 'botaoDuvidas') {
        setTimeout(function () {
            window.open("window.open('https://api.whatsapp.com/send?phone=556283113263&text=Olá, tenho algumas dúvidas a respeito do evento.","_blank");
        }, 4500);

    }

}