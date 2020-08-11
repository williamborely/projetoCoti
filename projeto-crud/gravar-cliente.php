<?php
    
    //Gravação em Banco de Dados

    //1- Resgatar os dados do form
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];


    //2- Conectar o arquivo php ao mysql
    //endereço, usuario, senha, nome da base
    $con = mysqli_connect("localhost","root","","crud");
        
    //3- Montar a instrução SQL de gravação
    //insert into cliente values(null,'David','david@gmail.com','12345678910','M');
    
    $sql = "insert into cliente values(null,'".$nome."','".$email."','".$cpf."','".$sexo."')";
    //echo $sql;
        
    //4- Executar a instrução sql
    //true/false    
    if(mysqli_query($con,$sql)){
        $msg = "Cliente cadastrado com sucesso!";                
    }else{
        $msg = "Erro ao gravar!";
    }
    
    //5- Fechar a conexão
    mysqli_close($con);
?>

<script>
    alert('<?php echo $msg; ?>');
    location.href='painel.php'; //redirecionamento em JavaScript
</script>






