<?php

    include "conexao.php";

    $pesq = "SELECT * FROM `usuarios`";

    $pesq = mysqli_query($con,$pesq);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>listados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
    <main class="container">
        <table class="table table-dark table-striped">
            <thead>
                <th>email</th>
                <th>username</th>
                <th>senha</th>
            </thead>

            <tbody>
                <?php
                    while ($exibe = mysqli_fetch_array($pesq)) {

                    
                ?>
                    <tr>
                        <td><?php echo $exibe['email']; ?></td>
                        <td><?php echo $exibe['uname']; ?></td>
                        <td><?php echo $exibe['senha']; ?></td>
                    </tr>

                    <?php
                    }
                    ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success">Voltar</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>