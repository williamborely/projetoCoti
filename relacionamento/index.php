<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    
</head>
<body>
    
    <div class="container">
        
        <h3>Painel do Sistema</h3>
        
        <a href="cadastrar-funcionario.php" class="btn">Cadastrar Funcionário</a>
        <a href="consultar-funcionario.php" class="btn">Consultar Funcionário</a>
        
        <!-- Modal Trigger -->
         
                 
          <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Cadastrar Cargo</a>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Cadastro de Cargo</h4>
              
              <form>
                  
                  <input type="text" id="nomecargo" placeholder="Nome do Cargo" class="required">
                  <input type="text" name="" id="salario" placeholder="Salário" class="required">
                  
                  <br><br>
                  <input type="button" id="cadastrar" value="Cadastrar" class="btn">
                  
              </form>
              
              <p id="msg"></p>
              
            </div>
                        
            
            <div class="modal-footer">
              <a href="#!"class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
          </div>
        
        
    </div>    
    
     <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
       
   <script src="materialize/js/materialize.min.js"></script> 
   <script src="js/jquery.maskMoney.js"></script>
   <script src="js/jquery.validate.js"></script>
   
    <script>
        $(document).ready(function(){
            $('.modal').modal();
                                    
            
            $("#salario").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
                    
            
            $("#cadastrar").click(function(){
                //alert("ok");      
                                                
                var vnomecargo = $("#nomecargo").val();
                var vsalario = $("#salario").val();
                
                if($("form").valid()){                
                    //url, dados, função de retorno
                    //"resposta" -> representa tudo que for exibido no gravar-cargo
                    $.post("gravar-cargo.php",{nomecargo:vnomecargo,salario:vsalario},
                    function(resposta){
                        $("#msg").html(resposta);
                    });
                    
                }
                
            });
            
        });
    </script>
       
</body>
</html>