<!DOCTYPE html>
<html>    
    <head>
        <meta charset="UTF-8">        
        <!--REDIRECIONAMENTO EM HTML APÓS 5seg-->
        <meta http-equiv="refresh" content="5;index.php">
        <title></title>        
    </head>
    
    <body>
<?php                
        
    //1
    $nome = $_POST["nome"];        
    $email = $_POST["email"];
    $assunto = "Fale conosco - ".$_POST["assunto"]; //Fale conosco - Dúvidas sobre ...
    //$para = $_POST["para"];
        
    $para = "dborgescds@gmail.com"; //DESTINATÁRIO
    $copia = "willrbm1095@gmail.com";
        
    //nl2br() converte a quebra de linha em <br>
    $mensagem =                                 
    "E-mail enviado através do Site: ... <br>".
    "Nome do cliente: <strong>".$nome. "</strong><br>".
    "E-mail do cliente: <strong>".$email. "</strong><br>".    
    "Mensagem: <br>".nl2br($_POST["mensagem"]);            
    
        
    //2    
    //Configuração do envio de e-mail
    $header = "Mime-version:1.0\n";
    $header = $header. "Content-type:text/html;utf-8 \n";    
    
    $header = $header. "From: Meu Site <contato@meusite.com.br> \n";
    $header = $header. "Cc: Meu Site <".$copia."> \n";
    //$header = $header. "Bcc: Meu Site <contato@meusite.com.br>";
    $header = $header. "Reply-to: ".$email."\n";   //Para quem será respondido o email             
        
    
    //3 A função mail() realiza o envio
    //Para email autenticado, utilizar a classe phpmailer
    if(mail($para,$assunto,$mensagem,$header)){
        
		//Se o envio foi realizado com sucesso, vai ser preparado um novo envio, informando o usuário que o contato foi recebido
		echo "E-mail enviado com sucesso!";              
        
		  //Após enviado o e-mail, envia um e-mail resposta
                $resposta = "Olá,".$nome. "<br>Seu E-mail foi recebido com sucesso!";
                mail($email, "Contato recebido", $resposta,$header);    
                        
    }else{
        echo "Erro ao enviar o e-mail";
    }
?>
        
        <br>
        Você será redirecionado para a página inicial
   
    </body>
</html>

