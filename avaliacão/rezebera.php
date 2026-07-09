<?php
     if(isset($_POST['email'])){
         $Email = $_POST['email'];
         $codigo = $_POST['codigo'];
         $senha = $_POST['senha'];

         $host = "localhost:3306";
         $user = "root";
         $senha = "cniaraguari85";
         $db = "dbteste";
         
        
         $con = new mysqli($host,$user,$senha,$db);
         $cadrasta = "INSERT INTO `seguidores` (`ID`,`senha`,`email`,`codigo`) VALUES (NULL,'$senha','$Email','$codigo')";

         $cadrasta = mysqli_query($con,$cadrasta);

         if(mysqli_affected_rows($con)){
            echo"cadrastado com sucesso";
         }else{
            echo"cadrasto não realizado";
         }

    }
?>
