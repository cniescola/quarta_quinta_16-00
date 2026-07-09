<!doctype html>
<html lang="en">
  <head>
    <title>Cadraste-se</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   <header class="container-fluid card">
    <li class="nav-item">
       <a class="nav-link" href="#">Informações Pessoais </a>
   </header> 
    <section class="container d-flex justify-content-center">  
          <form class="row" method="POST" action="rezebera.php" class ="card p-4 col-4 style="box-shadow:3px 5px 16px #00000038">>
            <table class="table table-dark table-striped">
                <div class="row mb-3">
                   <label class="form-label">Senha:</label>
                   <input type="password" name="senha" class="form-control">
                   <label for="exampleInputEmail1" class="form-label">Email address</label>
                   <input type="email" name="email"  class="form-control">
                   <label class="form-label">CPF:</label>
                   <input type="password" name="codigo"  class="form-control">
                 </div>
                  <div class="mb-3">
                      <button type="submit" class="btn btn-success w-100" id="Salvar">Salvar</button>
                  </div>
           </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </section>
  </body>
</html>


<!-- CREATE DATABASE `DBteste`;

USE `DBteste`;

create table `seguidores`(
`ID` INT NOT NULL,
`senha`VARCHAR(30),
`email` VARCHAR(50),
PRIMARY KEY (`ID`)
);
SELECT*FROM (`seguidores`); -->

