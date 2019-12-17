//FUNCÇÃO PARA MUDANÇA DE PÁGINA
function efeitoMudancaDePagina(id) {

    /* -- INTRUÇÕES PARA REPLICAÇÃO DO CÓDIGO -- */
    /* 
    1- No vetor elementos, substituir colocando as ids que deseja adicionar o efeito
    2- Analizar se o efeito a ser adicionado é realmente o que está no código atual
    3- Observar se todos os delays estão referenciados no switch:case 
    */

    //VETOR COM OS ELEMENTOS A SEREM USADOS
    var elementos = ["divProf", "divAluno", "idTextSelecione", "imgAstr", "idTextViagem", "textBemVindo", "imgLogo"];

    document.getElementById('imgAstronauta').style.animationDuration = '0s';
    document.getElementById('imgAstronauta').classList.add("durationAnimationn");

    // FOR responsável em caminhar pelos elementos do body que são adicionados no vetor acima
    for (var i = 0; i < elementos.length; i++) {
        //responsável por dimencionar a quantidade de classes do elemento selecionado pelo primeiro for, para que o segundo for cumpra seu papel 
        var tamClass = document.getElementById(elementos[i]).classList.length;
        //responsável pela retirada do efeito de animação que foi adicionado na classe
        document.getElementById(elementos[i]).classList.remove("bounceInRight");
        //adicionando duração de efeito
        document.getElementById(elementos[i]).classList.add('durationAnim');

        //FOR responsável por "caminhar" pelas classes
        for (j = 0; j < (tamClass); j++) {
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
                    document.getElementById(elementos[i]).classList.add('delay-2-5s');
                    j = (tamClass + 1);
                    break;
                case 'delay-3s':
                    document.getElementById(elementos[i]).classList.remove('delay-3s');
                    document.getElementById(elementos[i]).classList.add('delay-3s');
                    j = (tamClass + 1);
                    break;
                case 'delay-3-5s':
                    document.getElementById(elementos[i]).classList.remove('delay-3-5s');
                    document.getElementById(elementos[i]).classList.add('delay-4s');
                    j = (tamClass + 1);
                    break;
                case 'delay-4s':
                    document.getElementById(elementos[i]).classList.remove('delay-4s');
                    document.getElementById(elementos[i]).classList.add('delay-3-5s');
                    j = (tamClass + 1);
                    break;
                default:
                    break;
            }
        }
        //adicionando classes para o efeito de OUT
        document.getElementById(elementos[i]).classList.add('bounceOutRight');
    }
    setTimeout(function () {
        //remover classes existentes
        document.getElementById('idBodyIndexDivisao').classList.remove('fadeIn');
        document.getElementById('idBodyIndexDivisao').classList.remove('delay-1s');
        document.getElementById('idBodyIndexDivisao').classList.remove('duration-3s');
        //adicionar novas classes
        document.getElementById('idBodyIndexDivisao').classList.add('animated');
        document.getElementById('idBodyIndexDivisao').classList.add('duration-2s');
        document.getElementById('idBodyIndexDivisao').classList.add('delay-0-5s');
        document.getElementById('idBodyIndexDivisao').classList.add('fadeOut');
    }, 4000);

    //  SE O BOTÃO CLICADO FOR O DO ALUNO REDIRECIONA PARA O PORTAL DO MESMO
    if (id == 'botaoSouProfessor') {
        setTimeout(function () {
            window.location.href = "./portal-professor/";
        }, 5000);

        //  SE O BOTÃO CLICADO FOR O DO ALUNO REDIRECIONA PARA O PORTAL DO MESMO
    } else if (id == 'botaoSouAluno') {
        setTimeout(function () {
            window.location.href = "./portal-aluno/emconstrucao.html";
        }, 5000);

    }

}