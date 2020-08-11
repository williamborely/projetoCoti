<?php
    
    //Atualização em Banco de Dados

    //1- Resgatar os dados do form
    $cod = $_POST["cod"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];


    //2- Conectar o arquivo php ao mysql
    //endereço, usuario, senha, nome da base
    $con = mysqli_connect("localhost","root","","crud");
        
    //3- Montar a instrução SQL de atualização    
    
    $sql = "update cliente set nome = '".$nome."', email = '".$email."', cpf = '".$cpf."', sexo = '".$sexo."' where cod = ".$cod;
    //echo $sql;
        
    //4- Executar a instrução sql
    //true/false    
    if(mysqli_query($con,$sql)){
        $msg = "Cliente atualizado com sucesso!";                
    }else{
        $msg = "Erro ao atualizar!";
    }
    
    //5- Fechar a conexão
    mysqli_close($con);
?>

<script>
    alert('<?php echo $msg; ?>');
    location.href='painel.php'; //redirecionamento em JavaScript
</script>






