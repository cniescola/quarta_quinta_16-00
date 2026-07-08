<?php
     if(isset($_POST['CPF'])){
         $Email = $_POST['EMAIL'];
         $codigo = $_POST['CODIGO'];
        $senha = $_POST['SENHA'];

        $user = "root";
        $senha = "cniaraguari85";
        $host = "localhost:3306";
        $db = "DBteste";
         
        
        $con = new mysqli($host,$user,$senha,$db);
        $cadrasta = "INSERT AUTO `produtos` (`id`,`senha`,`email`)

         $cadrasta = mysqli_query($con,$cadrasta);

 if(mysqli_affected_rows($con)){
            echo"cadrastado com sucesso";
        }else{
            echo"cadrasto não realizado";
        }
     }
?>
