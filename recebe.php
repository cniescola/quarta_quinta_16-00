<?php
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $link = $_POST['link'];
        $fabrica = $_POST['fabrica'];
        $parcelas = $_POST['parcelas'];
        echo $nome."\n";
        echo $codigo."\n";
        echo $valor."\n";
        echo $descricao."\n";
        echo $link."\n";
        echo $fabrica."\n";
        echo $parcelas."\n";
    }
?>