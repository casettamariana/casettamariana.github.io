$('#quiz').quiz({
    //resultsScreen: '#results-screen',
    //counter: false,
    //homeButton: '#custom-home',
    counterFormat: 'Pergunta %current de %total',
    questions: [
        { // SOBRE CONTEUDO/PROGRAMA
            'q': 'Dos conhecimentos adquiridos para serem repassados ao Time:',
            
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da adequação da carga horária:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        { // ATUAÇÃO DO INSTRUTOR
            'q': 'Da didática utilizada:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da objetividade na comunicação:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da apresentação prática das etapas do Projeto:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da pontualidade:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        
        { // ATUAÇÃO DOS PARTICIPANTES
            'q': 'Da sua participação:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da sua relação com os participantes:',
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da sua facilidade para socializar:',
            
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        {
            'q': 'Da facilidade de entendimento dos assuntos abordados:',
            
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        },
        { // INFRAESTRUTURA E LOGÍSTICA
            'q': 'Da infraestrutura:',
            
            'options': [
                'Otimo',
                'Bom',
                'Regular',
                'Ruim',
                'Pessimo'
            ]
        }
    ]
});