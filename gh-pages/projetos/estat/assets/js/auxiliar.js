function centerContent(){
    // tamanho da janela do usuário
    var alturaTelaUser = window.innerHeight;
    var alturaConteudo = document.height;

    var x = alturaTelaUser - alturaConteudo;

    // while(y=1){
        if(x<0){ // conteúdo > tela
            x = ((-1)*x)/2;
            
        } else if(x>0){ // conteúdo < tela
            x = x/4;
            document.getElementById('firstElement').style.marginTop = x + 'px';
        } else{
        }
    // }
}