$(function() {

  
    $.ajax({
            url : "actionPreInscricao.php",
            type : 'post',
            data : {
            action : "listGrafico"
            },
            beforeSend : function(){
                // $("#resultado").html("ENVIANDO...");
                }
            }).done(function(data){
               retData = JSON.parse(data);
               retData[0].forEach((value,index) =>{
                        var tr = `<tr>
                                    <td><a href=""  >${value}</a></td>
                                    <td>${retData[1][index]}</td>
                                </tr>`;
                          $('#tbodyRegional').append(tr);      
                        });
                        
                        $('#totalEscolas').text(retData[2]);
                        $('a').click(function(event){
                            event.preventDefault();
                            let nameRegional = event.currentTarget.innerHTML;
                            $('#nomeRegional').text(nameRegional);
                                $.ajax({
                                        url : "actionPreInscricao.php",
                                        type : 'post',
                                        data : {
                                        action : "listEscolas",
                                        regional : nameRegional
                                    },
                                        beforeSend : function(){
                                            // $("#resultado").html("ENVIANDO...");
                                        }
                                    }).done(function(data){
                                        let retDataEscolas = JSON.parse(data);
                                        $("#tbodyEscolas tr").remove(); 
                                        
                                        retDataEscolas.forEach(value =>{
                                            var tr = `<tr>
                                                         <td><span  >${value[0]}</span></td>
                                                        
                                                    </tr>`;
                                            $('#tbodyEscolas').append(tr);     
                                        })
                                          
                                        

                                    }).fail(function(jqXHR, textStatus, msg){
                                        alert(data);
                                    });







                        })
             
            }).fail(function(jqXHR, textStatus, msg){
                alert(data);
            });




            function initial(){
                let regionalInitial  = 'CRE-GOIANIA';
                $('#nomeRegional').text(regionalInitial);
                                $.ajax({
                                        url : "actionPreInscricao.php",
                                        type : 'post',
                                        data : {
                                        action : "listEscolas",
                                        regional : regionalInitial
                                    },
                                        beforeSend : function(){
                                            // $("#resultado").html("ENVIANDO...");
                                        }
                                    }).done(function(data){
                                        let retDataEscolas = JSON.parse(data);
                                        $("#tbodyEscolas tr").remove(); 
                                        
                                        retDataEscolas.forEach(value =>{
                                            var tr = `<tr>
                                                         <td><span  >${value[0]}</span></td>
                                                        
                                                    </tr>`;
                                            $('#tbodyEscolas').append(tr);     
                                        })
                                          
                                        

                                    }).fail(function(jqXHR, textStatus, msg){
                                        alert(data);
                                    });
            }

            initial();

 })

