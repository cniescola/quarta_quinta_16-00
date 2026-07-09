<?php
    if(isset($_POST['jogo'])){
        $jogo = $_POST['jogo'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $senha = $_POST['senha'];
        $selecionar = $_POST['selecionar'];

        include "conexao.php";
        $cadastra = "INSERT INTO `jogos` (`id`, `jogo`, `email`, `uname`, `senha`, `selecionar`) VALUES (NULL, '$jogo', '$email', '$uname', '$senha', '$selecionar')";
        
        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "jogo comprado";
        }else{
            echo "jogo não comprado";
        }
    }

     
?>

    <a href="index.php" class="btn btn-primary">Voltar</a>
    <a href="logados.php" class="btn btn-primary">Listar</a>