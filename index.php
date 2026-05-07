<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="container-fluid card">
        <nav class="container-fluid p-4">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="container mt-4">
            <div class="row">
                <div class=" card col-lg-8 p-4">
                    <h3 class="h6 form-title">Cadastro de produto</h3>
                    <div class="row card-body">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite o Nome do Produto:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite o codigo do Produto</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite a descrição do produto</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">DIgite o valor!</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>