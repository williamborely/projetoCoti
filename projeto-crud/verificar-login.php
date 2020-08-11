<?php
    session_start(); //inicia o uso da sessão
    
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    $con = mysqli_connect("localhost","root","","crud");

    $sql = "select * from usuario where login = '".$login."' and senha = '".$senha."'";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) == 1){
        //echo "ok";
        
        $row = mysqli_fetch_array($result);
        
        //Guardar valores em SESSÃO(no navegador)
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];
        
        //redirecionamento em php
        header("location:painel.php");
        
    }else{
        //echo "erro";
        $msg = "Login/Senha inválido(s)";
        header("location:index.php?msg=".$msg);//redirecionamento em php
    }
    
    mysqli_close($con);
?>