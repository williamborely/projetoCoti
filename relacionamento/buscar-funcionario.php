<?php 
        
   
    $nome = $_POST["nome"];

    //se não vazio
    if(!empty($nome)){

    include_once("funcoes.php");
    include_once("conexao.php");

    $sql = "select * from funcionario right join cargo on funcionario.idcargo = cargo.idcargo where nome like '".$nome."%'";

    $result = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result) > 0){
        ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Dt. Nasc</th>
                <th>Cpf</th>
                <th>Cargo</th>
                <th>Salário</th>
            </tr>
            
            <?php 
                //http://kl1p.com/php07
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["nome"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo dataTela($row["dtnasc"]); ?></td>
                        <td><?php echo $row["cpf"]; ?></td>
                        <td><?php echo $row["nomecargo"]; ?></td>
                        <td>R$ <?php echo number_format($row["salario"],2,",","."); ?></td>
                    </tr>
                    <?php
                }
            ?>
            
        </table>
        <?php
    }else{
        echo "Nenhum funcionario encontrado!";
    }

        
    }
    
?>