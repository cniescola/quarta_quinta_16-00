<?php   
    if(isset($_POST['nomeProd'])){
        
        $nomeProd = $_POST['nomeProd'];
        $codigoProd = $_POST['codigoProd'];
        $descProd = $_POST['descProd'];
        $vProd = $_POST['vProd'];
        $linkProd = $_POST['linkProd'];
        $VFProd = $_POST['VFProd'];
        $pProd = $_POST['pProd'];

        
        $host = "localhost:3306";
        $usuario = "root";
        $senha = "cniaraguari85";
        $db = "dbdados";

        $con = new mysqli($host,$usuario,$senha,$db);

        $registro = "INSERT INTO `produtos` (id,nomeProd,codigoProd,descProd,vProd,linkProd,VFProd,pProd) VALUES (NULL,'$nomeProd','$codigoProd','$descProd','$vProd','$linkProd','$VFProd','$pProd')";

        $cadastra = mysqli_query($con,"");
        

    }

?>