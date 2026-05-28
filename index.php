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
            <form class="row" method="POST" action="recebe.php">
                <div class=" card col-lg-8 p-4">
                    <h3 class="h6 form-title">Cadastro de produto</h3>
                    <div class="row card-body">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite o Nome do Produto:</label>
                            <input type="text" class="form-control" name="nameProd" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite o codigo do Produto</label>
                            <input type="text" class="form-control" name="codigo" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite a descrição do produto</label>
                            <textarea class="form-control" rows="7" name="descricao" required></textarea>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="mb-3">
                                    <label class="form-label">Valor do produtos</label>
                                    <input type="text" class="form-control" name="produtoss" required>
                                </div>

                                <div class="mb-3">
                                   <button type="submit" class="btn btn-success w-100" id="Salvar">Salvar</button>
                                </div>

                                <div>
                                    <button class="btn btn-danger w-100" type="button">Apagar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-between">
                    <div class="card p-4 mb-3">
                        <label class="form-label">Link do produto</label>
                        <input type="text" class="form-control" name="link" required>
                    </div>
                    <div class="card p-4 mb-3">
                        <label class="form-label">Valor de Fabrica</label>
                        <input type="number" class="form-control" name="valor" required>
                    </div>
                    <div class="card p-4">
                        <label class="form-label">parcelas do produto</label>
                        <input type="number" max="12" class="form-control" name="parcela" required>
                    </div>
                </div>
</form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-4.0.0.js"
  integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U="
  crossorigin="anonymous"></script>

    <!-- <script type="text/javascript"> -->
        <!-- // var btnSalvar = document.querySelector('[name="Salvar"]');
        // btnSalvar.addEventListener("click",function(){
            
        //     var nomeProd = document.querySelector('[name="nameProd"]').value;
        //     //var nomeProd = document.getElementsByName('nomeProd')[0].value;
        //     console.log(nomeProd);

        //      var link = document.querySelector('[name="link"]').value;
        //     //var link = document.getElementsByName('link')[0].value;
        //     console.log(link);
        //      var valor = document.querySelector('[name="valor"]').value;
        //     //var valor = document.getElementsByName('valor')[0].value;
        //     console.log(valor);
        //      var parcela = document.querySelector('[name="parcela"]').value;
        //     //var parcela = document.getElementsByName('paarcela')[0].value;
        //     console.log(parcela);
        //      var descrição = document.querySelector('[name="descrição"]').value;
        //     //var descrição = document.getElementsByName('descrição')[0].value;
        //     console.log(descrição);
        //      var codigo = document.querySelector('[name="codigo"]').value;
        //     //var codigo = document.getElementsByName('codigo')[0].value;
        //     console.log(codigo);
        //      var produtoss = document.querySelector('[name="produtoss"]').value;
        //     //var produtoss = document.getElementsByName('produtoss')[0].value;
        //     console.log(produtoss);

        // });
        $('#Salvar').click(function(){
            var link = $('[name="link"]').val();
            var nomeProd = $('[name="nomeProd"]').val();
            var codigo = $('[name="codigo"]').val();
            var parcela =$('[name="parcela"]').val();
            var descrição = $('[name="produtoss"]').val();
            var descrição = $('[name="descrição"]').val();
            var valor = $('[name="valor"]').val();

            console.log(nomeProd+"\n"+link+"\n"+codigo+"\n"+parcela+"\n"+produtoss+"\n"+valor+"\n"+descrição);

            $.ajax({
                url:"recebe.php",
                method:"POST",
                data:"{'nome','arthur'}",
                processData: false,
                contentType: false,
                success: function(content){
                    $('#salvar').after(content);
                }
            });
        }); -->

    </script>
</body>

</html>