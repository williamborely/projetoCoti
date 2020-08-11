<?php 
    include("autenticacao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <script>
        //criando uma função
        
        function confirmaExclusao(cod){
            
            if(confirm('Deseja realmente excluir este cliente?')){
                location.href="excluir-cliente.php?cod="+cod;
            }
            
        }
        
    </script>
        
</head>
<body>
    
    <div class="container">
    
        <h3>Consulta de Clientes</h3>
        <!--autocomplete="off" desabilita o autocomplete do navegador-->
        <form action="consultar-cliente.php" method="get" autocomplete="off">
            
            <input type="text" name="busca" placeholder="Digite para pesquisar">
            <input type="submit" value="Pesquisar" class="btn">
            
        </form>        
        
        <?php 
            //isset() -> Se a variável "existe" (se foi inicializada)
            if(isset($_GET["busca"])){
                $busca = $_GET["busca"];
                //echo $nome;
                
                //Abrir conexao com o banco
                $con = mysqli_connect("localhost","root","","crud");
                
                //Montar a instrução de consulta
                $sql = "select * from cliente where nome like '".$busca."%' or email = '".$busca."' order by nome";
                
                $result = mysqli_query($con,$sql);
                
                //se o numero de linhas do resultado for maior que zero
                if(mysqli_num_rows($result) > 0){
                    //echo "Ok";
                    ?>
                    
                    <table>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Cpf</th>
                            <th>Sexo</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        
                        <?php
                            //lista com todos os dados de um registro
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        
                        <tr>
                            <td><?php echo $row["nome"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><?php echo $row["cpf"];?></td>
                            <td><?php echo $row["sexo"];?></td>
                            <td><a href="editar-cliente.php?cod=<?php echo $row["cod"]; ?>"><i class="material-icons orange-text">edit</i></a></td>
                            
                            <td><a href="#" onclick="confirmaExclusao(<?php echo $row["cod"];?>)"><i class="material-icons red-text">delete_forever</i></a></td>     
                        </tr>
                        
                       <?php } ?>                         
                        
                    </table>
                    
                    <?php
                }else{
                    echo "<p>Nenhum cliente encontrado!</p>";
                }
                
            }
        ?>       
        
    </div>
    
</body>
</html>