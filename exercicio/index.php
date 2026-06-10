<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
    <main>
        <section class="d-flex justify-content-center container mt-5">
            <form class="d-flex justify-content-center w-100" method="post" action="recebe.php">
                <div class="card col-sm-5 p-5">
                    <h3 class="h5 form-title text-center">Cadastro</h3>
                    <i class="bi bi-person-circle d-flex justify-content-center p-3" style="font-size:100px"></i>
                <div class="row card-body">
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="Uname" placeholder="Username:"></input>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="Email" placeholder="Email:"></input>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label"></label>
                        <input type="password" class="form-control" name="senha" placeholder="Password:"></input>
                    </div>
                </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary w-100" id=Cadastrar>Cadastrar</button>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>