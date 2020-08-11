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
    
        <h3>Cadastrar Cliente</h3>

        <form action="gravar-cliente.php" method="post">
            
            <div class="input-field">                
                <input type="text" id="nome" name="nome" required>
                <label for="nome">Nome</label>                
            </div>
            
            <div class="input-field">                
                <input type="email" id="email" name="email" required>
                <label for="email">E-mail</label>                
            </div>
            
            <div class="input-field">           
                <input type="text" id="cpf" name="cpf" required maxlength="11" placeholder="">
                <label for="cpf">Cpf (Somente números)</label>                
            </div>
            
            <p>
                <label>
                    <input type="radio" name="sexo" value="M" required>
                    <span>Masculino</span>
                </label>
            </p>
            
            <p>
                <label>
                    <input type="radio" name="sexo" value="F" required>
                    <span>Feminino</span>
                </label>
            </p>
            
            <input type="submit" value="Cadastrar" class="btn">
            
        </form>
    
    </div>

    <script src="materialize/js/materialize.min.js"></script>                        
</body>
</html>