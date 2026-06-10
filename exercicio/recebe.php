<?php
    if(isset($_POST['Uname'])){
        $Uname = $_POST['Uname'];
        $Email = $_POST['Email'];
        $senha = $_POST['senha'];

        $host = "localhost:3306";
        $usuario = "root";
        $senha = "cniaraguari85";
        $db = "dbcadastro";

        $con = new mysqli($host,$usuario,$senha,$db);
        $cadastra = "INSERT INTO `usuarios` (`id`, `email`, `nome`, `senha`) VALUES (NULL,'$Email','$Uname','$senha')";

        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "cadastro realizado";
        }else{
            echo "cadastro não realizado";
        }
    }
?>