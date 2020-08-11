<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    
</head>
<body>
    
    <div class="container">
        
        <h3>Consultar Funcionário</h3>
        
        <form>
            <input type="text" placeholder="Digite para pesquisar" id="nome">
        </form>    
        
        <div id="conteudo"></div>
        
    </div>    
    
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    
    <script>
        
        $(document).ready(function(){
            
            //ao soltar uma tecla dentro do id nome
            $("#nome").keyup(function(){
               //alert('ok'); 
                
                //resgatar o valor do input
                var nomedigitado = $("#nome").val();
                //alert(nomedigitado);
                
                //url, dados(JSON), função de retorno
                $.post("buscar-funcionario.php",
                      {nome:nomedigitado},
                      function(resposta){
                        $("#conteudo").html(resposta);
                });            
                
            });
            
        });
    
    </script>
            
</body>
</html>