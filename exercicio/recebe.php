<?php
    if(isset($_POST['Uname'])){
        $Uname = $_POST['Uname'];
        $Email = $_POST['Email'];
        $senha = $_POST['senha'];

        include "conexao.php";
        $cadastra = "INSERT INTO `usuarios` (`id`, `email`, `uname`, `senha`) VALUES (NULL,'$Email','$Uname','$senha')";

        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "cadastro realizado";
        }else{
            echo "cadastro não realizado";
        }
    }
?>
    <a href="index.php" class="btn btn-success">Voltar</a>
    <a href="logados.php" class="btn btn-success">Listar</a>