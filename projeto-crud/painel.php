<?php 
    include("autenticacao.php");
?>


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
        
        <p>Seja bem vindo(a): <?php echo $_SESSION["nome"]; ?> </p>
        
        <h4>Menu</h4>

        <?php 
            if($_SESSION["perfil"] == "adm"){
                include('menu-adm.php');
            }else{
                include('menu-user.php');
            }
        ?>
           
            
    </div>
                
</body>
</html>