<?php
    if(isset($_POST['nameProd'])){
        $valor = $_POST['valor'];
        $link = $_POST['link'];  
        $nomeProd = $_POST['nameProd'];
        $codigo = $_POST['codigo'];
        $parcela = $_POST['parcela'];
        $descrição = $_POST['descrição'];
        $produtoss = $_POST['produtoss'];
        // echo $valor."\n";
        // echo$descrição;
        // echo$link;
        // echo$nomeProd;
        // echo$codigo;
        // echo$parcela;
        // echo$produtoss;


        $host ="localhost:3306";
        $usuario="root";
        $senha ="cniaraguari85";
        $db ="dbteste";

        $con = new mysqli($host,$usuario,$senha,$db);
        $cadrasta = "INSERT AUTO `produtos` (`id`,`valor`,`link`,`nomeProd`,`codigo`,`parcela`,`descrição`,`produtoss`) VALUES ( NULL,'$valor','$link','$nomeProd','$codigo','$parcela','$descricão','$produtoss')";

        $cadrasta = mysqli_query($con,$cadrasta);

        if(mysqli_affected_rows($con)){
            echo"cadrastado com sucesso";
        }else{
            echo"cadrasto não realizado";
        }
    
    }


?>