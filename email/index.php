<!DOCTYPE html>
<html>    
    <head>
        <meta charset="UTF-8">
        
        <title></title>
        <link rel="stylesheet" href="materialize/css/materialize.min.css">     
        </head>
    
    <body>
        
        <div class="container">
        <h3>Envio de Contato</h3>
        
        <form action="enviar.php" method="post">
            
            Nome:<br>
            <input type="text" name="nome"><br>
            
            E-mail:<br>
            <input type="text" name="email"><br>
                                    
            Assunto:<br>
            <input type="text" name="assunto"><br>
                        
            <!--
            Para:<br>
            <select name="para">
                <option value="rh@meusite.com.br">RH</option>
                <option value="financeiro@meusite.com.br">Financeiro</option>
                <option value="secretaria@meusite.com.br">Secretaria</option>
                <option value="dborgescds@gmail.com">Direção</option>
            </select>
            <br>-->
                                    
            Mensagem:<br>
            <textarea name="mensagem" style="height:200px"></textarea><br>
            
            <input type="submit" value="Enviar" class="btn">
            
        </form>
        
        </div>

       
    </body>
</html>
