<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    
    <style>
        
        label.error{
            color: red !important;
        }
        
        select {
            visibility: hidden;
            display: block;
            position: absolute;
        }
    
    </style>    
</head>
<body>
    
    <div class="container">        
        <h3>Cadastro de Funcionário</h3>
        
        <form action="gravar-funcionario.php" method="post" autocomplete="off">
           
           <input type="text" name="nome" placeholder="Nome" class="required">           
           <input type="text" name="email" placeholder="E-mail" class="required email" id="email">
           <input type="text" name="cemail" placeholder="Confirme o E-mail" class="required email" equalTo="#email">           
           <input type="text" name="dtnasc" id="data" placeholder="Data de Nascimento" class="required dateBR">
           <input type="text" name="cpf" id="cpf" placeholder="Cpf" class="required cpf">                                 
           <select name="cargo" class="required">
               <option value="" disabled selected>Selecione um cargo</option>
            
               <?php
                    include_once("conexao.php");                    
                        
                    $sql = "select * from cargo order by nomecargo";
               
                    $result = mysqli_query($con,$sql);
               
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row[0]."'>".$row[1]."</option>";
                    }
               
                    mysqli_close($con);               
               ?>
                               
           </select>
                        
           <input type="submit" value="Cadastrar" class="btn">
            
        </form>
        
    </div>    
    
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
       
   <script src="materialize/js/materialize.min.js"></script> 
    
   <script src="js/maskedinput-1.4.1.js">asdasasda</script>
   <script src="js/jquery.validate.js"></script>
   
        
   
   <script>
        $(document).ready(function(){
            $('select').formSelect();
                                    
            $("#data").mask("99/99/9999");
            $("#cpf").mask("999.999.999-99");
            
            $("form").validate();
            
        });
   </script>
       
</body>
</html>