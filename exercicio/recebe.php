<?php

    if(isset($_POST['email'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = "root";
        $senha = "cniaraguari85";
        $host = "localhost:3306";
        $db = "dblogin";

        $con = new mysqli($host,$user,$senha,$db);

        $cadastra = "INSERT INTO `usuarios` (`ID`,`EMAIL`,`SENHA`) VALUES (NULL,'$email','$senha')";

        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "cadastro reslizado com sucesso";
            
        }else{
            echo "Não realizado";
        }

    }

?>