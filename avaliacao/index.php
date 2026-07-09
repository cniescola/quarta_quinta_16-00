<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <main>
        <section class="d-flex justify-content-center container mt-5">
            <form class="d-flex justify-content-center w-100" method="post" action="recebe.php">
                <div class="card col-sm-5 p-5">
                    <h2 class="h2 form-title text-center">Jogos</h2>
                    <i class="bi bi-controller d-flex justify-content-center p-3" style="font-size:100px"></i>
                <div class="row card-body d-flex justify-content-center">
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="jogo" placeholder="Game Name:"></input>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="email" placeholder="Email:"></input>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="uname" placeholder="Username:"></input>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="password" class="form-control" name="senha" placeholder="Password:"></input>
                    </div>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="selecionar">
                        <option selected>Opções de Pagamento</option>
                        <option value="1">Cartão</option>
                        <option value="2">Boleto</option>
                        <option value="3">Pix</option>
                        <option value="4">Alma</option>
                    </select>
                </div>
                <div class="mb-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-100" id=Comprar>Comprar</button>
                </div>
                </div>
            </form>
        </section>
    </main>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>


<!-- create database `dbteste`;

use `dbteste`;

create table `jogos`(

	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `jogo` TEXT NOT NULL,
    `email` TEXT NOT NULL,
    `uname` VARCHAR(30) NOT NULL,
    `senha` VARCHAR(20) NOT NULL
); -->