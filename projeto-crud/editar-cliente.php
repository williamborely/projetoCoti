<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    
</head>
<body>
   
    <?php 
        
        $cod = $_GET["cod"]; //veio pela url
        
        $con = mysqli_connect("localhost","root","","crud");
    
        $sql = "select * from cliente where cod = ".$cod;
    
        $result = mysqli_query($con,$sql);
    
        $row = mysqli_fetch_array($result);
                    
    ?>
    
    <div class="container">    
        <h3>Alteração Cliente</h3>

        <form action="atualizar-cliente.php" method="post">
            
            <!--Código sendo passado "escondido" pelo form-->
            <input type="hidden" name="cod" value="<?php echo $row["cod"]?>">             
            
            <div class="input-field">                
                <input type="text" id="nome" name="nome" required value="<?php echo $row["nome"]?>">
                <label for="nome">Nome</label>                
            </div>
            
            <div class="input-field">                
                <input type="email" id="email" name="email" required value="<?php echo $row["email"]?>">
                <label for="email">E-mail</label>                
            </div>
            
            <div class="input-field">           
                <input type="text" id="cpf" name="cpf" required maxlength="11" placeholder="" value="<?php echo $row["cpf"]?>">
                <label for="cpf">Cpf (Somente números)</label>                
            </div>
            
            <p>
                <label>
                    <input type="radio" name="sexo" value="M" required <?php if($row["sexo"] == "M"){echo "checked"; } ?>>
                    
                    <span>Masculino</span>
                </label>
            </p>
            
            <p>
                <label>
                    <input type="radio" name="sexo" value="F" required  <?php if($row["sexo"] == "F"){echo "checked"; }?>>
                    
                    <span>Feminino</span>
                </label>
            </p>
            
            <input type="submit" value="Atualizar" class="btn">
            
        </form>
    
    </div>

    <script src="materialize/js/materialize.min.js"></script>                        
</body>
</html>