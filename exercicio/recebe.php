<?php
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $host = "localhost:3306";
        $usuario = "root";
        $senha = "cniaraguari85";
        $db = "dbcadastro";

        $con = new mysqli($host,$usuario,$senha,$db);
        $cadastra = "INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES (NULL, '$email', '$senha')";

        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "cadastro realizado";
        }else{
            echo "cadastro não realizado";
        }
        
    }
?>