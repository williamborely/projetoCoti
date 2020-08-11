<?php 

    include_once("funcoes.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dtnasc = dataBanco($_POST["dtnasc"]); //dd/mm/aaaa
    $cpf = $_POST["cpf"];
    $cargo = $_POST["cargo"]; //id

//    $dtnasc = explode("/",$dtnasc);
//    $dtnasc = array_reverse($dtnasc);
//    $dtnasc = implode("-",$dtnasc);

    include_once("conexao.php");

    $sql = "insert into funcionario values(null,'".$nome."','".$email."','".$dtnasc."','".$cpf."',".$cargo.")";

    if(mysqli_query($con,$sql)){
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
    }

    mysqli_close($con);

?>