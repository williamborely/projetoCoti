<?php 
    
    $cod = $_GET["cod"];

    $con = mysqli_connect("localhost","root","","crud");

    $sql = "delete from cliente where cod = ".$cod;

    //echo $sql;

    if(mysqli_query($con,$sql)){
        $msg = "Cliente excluído com sucesso!";                
    }else{
        $msg = "Erro ao excluir!";
    }
    
    //5- Fechar a conexão
    mysqli_close($con);
?>

<script>
    alert('<?php echo $msg; ?>');
    location.href='painel.php'; //redirecionamento em JavaScript
</script>
