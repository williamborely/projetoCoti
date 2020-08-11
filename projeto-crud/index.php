<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
        
</head>
<body>
       
    <div class="container">
    
        <h3>Área Restrita</h3>

        <!--Form de login-->

        <form action="verificar-login.php" method="post">
            
            <input type="text" name="login" placeholder="Login" required>
            <input type="password" name="senha" placeholder="Senha" required>
            
            <input type="submit" value="Entrar" class="btn">
            
        </form>
        
        <p>
            <?php 
                if(isset($_GET["msg"])){
                    echo $_GET["msg"];
                }
            ?>
        </p>
        
    </div>
    
</body>
</html>