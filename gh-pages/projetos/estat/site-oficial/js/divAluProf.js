$(document).ready(
    function () {
        $('#botaoSouAluno').hover(
            function () {
                $(".opacidadeAqui").animate({ opacity: 0.2 }, 1000);
                $(".opacidadeAquiSeAluno").animate({ opacity: 0.2 }, 1000);
            },
            function () {
                $(".opacidadeAqui").animate({ opacity: 1 }, 800);
                $(".opacidadeAquiSeAluno").animate({ opacity: 1 }, 800);
            }
        ),
        $('#botaoSouProfessor').hover(
            function () {
                $(".opacidadeAqui").animate({ opacity: 0.2 }, 1000);
                $(".opacidadeAquiSeProfessor").animate({ opacity: 0.2 }, 1000);
            },
            function () {
                $(".opacidadeAqui").animate({ opacity: 1 }, 800);
                $(".opacidadeAquiSeProfessor").animate({ opacity: 1 }, 800);
            }
        )
    }
)