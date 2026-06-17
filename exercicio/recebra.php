<?php
    if(isset($POST['clientes'])){
        $usurario = $_POST['USUARIO'];
        $codigo = $_POST['CODIGO'];


        $user = "root";
        $senha = "cniaraguari85";
        $host = "localhost:3306";
        $db = "dbcodino";

        $con = new mysqli($host,$user,$senha,$db);

        $cadastra = "INSERT INTO `clientes` (`id`,`USUARIO`,`CODIGO`) VALUES (NULL,'$usuario','$codigo')";
    
        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "cadastro reslizado com sucesso";
            
        }else{
            echo "Não realizado";
        }

    }
?>

<!-- use `dbcodino`;

create table `clientes`(
 `id` INT NOT null primary key auto_increment,
  `USUARIO` VARCHAR (45) NOT NULL,
  `CODIGO` INT NOT NULL
);
SELECT * FROM (`clientes`); -->

