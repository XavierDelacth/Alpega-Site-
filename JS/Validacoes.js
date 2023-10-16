
const form_Reserva = document.getElementById("form");






form_Reserva.addEventListener('submit', (e)=>{
    
   


    let message_Erro = "";
    let message_add = document.querySelector(".localerror");
   
    const valores_nUsados =  /^[a-zA-Z]/;
   
    const espacos = /\s/g;
    const valoresNumericos = /[0-9]/;
    

 


  
    

        function verificar_Outro_nomes(value){
            if(value.length <= 0 || value == null || value == undefined || value.length == 1 || value.length <=3 || value.length >40 ){
                message_Erro = 'Erro no campo nome '+value;
                return false;
            }else{
                if(valoresNumericos.test(value) || valores_nUsados.test(value) != true ){
                    message_Erro = 'Erro no campo nome '+value+", verifique se há números ou caracteres especiais.";
                    return false;
                }else{
                    return true;
                }
           
                }
            
        }


        function verificarOption(value){
            if(value == 'nenhum'){
               
                message_Erro ='Erro no campo das Opções '+value;
                return false;
            }else{
                return true;
            }
        }

        function verificarDatas(value){
            if(valores_nUsados.test(value) == true ){
                        
                message_Erro ='Preencha corretamente do campo Datas';
            }else{
                if(value.length <= 0){
                    message_Erro ='Campo das Datas esta vazia';
                    return false;
                }else{
                    return true;
                }
                
            }
        }

        function verificarNumero(value){
            if(value[0] != 9){
                message_Erro ='Não necessário usar 244 ou designação do país';
                return false;
            }else{
                if(value[1] == 6 || value[1] == 7 || value[1] == 8){
                    message_Erro ='Esse número não existe';
                    return false; 
                }else{return true;}
            }
        }
        
        function verificarBI(value){
                
           
                if(value.length != 14 || value[0] != 0 || valores_nUsados.test(value[9]) != true|| valores_nUsados.test(value[10]) != true ){
                    message_Erro = "Verifique o seu Bilhete de Identidade ";
                    return false;

                }else{
                    if(
                        valoresNumericos.test(value[1]) != true||
                        valoresNumericos.test(value[2]) != true||
                        valoresNumericos.test(value[3]) != true||
                        valoresNumericos.test(value[4]) != true||
                        valoresNumericos.test(value[5]) != true||
                        valoresNumericos.test(value[6]) != true||
                        valoresNumericos.test(value[7]) != true||
                        valoresNumericos.test(value[8]) != true ||
                        valoresNumericos.test(value[11]) != true||
                        valoresNumericos.test(value[12]) != true ||
                        valoresNumericos.test(value[13]) != true           
                    ){
                        return false;
                    }else{return true;}
                        
                    }        
            
           
           
            
    }
       

        
        if(
            verificar_Outro_nomes(document.getElementById('nomeAluno_id').value) == false ||
            verificar_Outro_nomes(document.getElementById('paiAluno_id').value) == false || 
            verificar_Outro_nomes(document.getElementById('mae_Aluno_id').value) == false|| 
            verificarOption(document.getElementById('alunoCurso_id').value) == false|| 
            verificarOption(document.getElementById('anoEstudante_id').value) == false ||
            verificarOption(document.getElementById('alunoMatri_id').value) == false ||
            verificarDatas( document.getElementById('dataNascimentos_id').value) == false ||
            verificarDatas(document.getElementById('dataEmissao_id').value) == false ||
            verificarNumero(document.getElementById('numero_id').value) == false||
            verificarBI(document.getElementById('biAluno_id').value) == false
        ){            
           

            e.preventDefault(); 
          
            message_add.classList.add("alert-warning");
            message_add.innerText = message_Erro;
            
                    
        }

        
      
});


