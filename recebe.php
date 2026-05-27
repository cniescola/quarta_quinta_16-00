<?php
    if(isset($_POST['nameProd'])){
        $nameProd = $_POST['nameProd'];
        $codprod = $_POST['codprod'];
        $prodvalue = $_POST['prodvalue'];
        $textname = $_POST['textname'];
        $linkprod = $_POST['linkprod'];
        $fabvalue = $_POST['fabvalue'];
        $prodpar = $_POST['prodpar'];

        $host = "localhost:3306";
        $usuario = "root";
        $senha = "cniaraguari85";
        $db = "dbteste";

        $con = new mysqli($host,$usuario,$senha,$db);
        $cadastra = "INSERT INTO `produtos` (`id`, `nameProd`, `codprod`, `prodvalue`, `textname`, `linkprod`, 
        `fabvalue`, `prodpar`) VALUES (NULL, '$nameProd', '$codprod', '$prodvalue', '$textname', '$linkprod', '$fabvalue', '$prodpar')";

        $cadastra = mysqli_query($con,$cadastra);

        if(mysqli_affected_rows($con)){
            echo "cadastrado com sucesso";
        }else{
            echo "cadastro não realizado";
        }

        // echo $nome."\n";
        // echo $codigo."\n";
        // echo $valor."\n";
        // echo $descricao."\n";
        // echo $link."\n";
        // echo $fabrica."\n";
        // echo $parcelas."\n";
    }
?>