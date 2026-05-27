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
            <form class="row" method="post" action="recebe.php">
                <div class=" card col-lg-8 p-4">
                    <h3 class="h6 form-title">Cadastro de produto</h3>
                    <div class="row card-body">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite o Nome do Produto:</label>
                            <input type="text" class="form-control" id="nameProd" name="nameProd" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite o codigo do Produto</label>
                            <input type="text" class="form-control" id="codprod" name="codprod" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Digite a descrição do produto</label>
                            <textarea class="form-control" rows="7" id="textname" name="textname" required></textarea>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="mb-3">
                                    <label class="form-label">Valor do produtos</label>
                                    <input type="text" class="form- control" id="prodvalue" name="prodvalue" required>
                                </div>

                                <div class="mb-3">
                                   <button type="submit" class="btn btn-success w-100" id="salvar">Salvar</button>
                                </div>

                                <div>
                                    <button class="btn btn-danger w-100" type="submit">Apagar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-between">
                    <div class="card p-4 mb-3">
                        <label class="form-label">Link do produto</label>
                        <input type="text" class="form-control" id="linkprod" name="linkprod" required>
                    </div>
                    <div class="card p-4 mb-3">
                        <label class="form-label">Valor de Fabrica</label>
                        <input type="number" class="form-control" id="fabvalue" name="fabvalue" required>
                    </div>
                    <div class="card p-4">
                        <label class="form-label">parcelas do produto</label>
                        <input type="number" max="12" class="form-control" id="prodpar" name="prodpar" required>
                    </div>
                </div>
</form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        

    // $('#salvar').click(function(){

    //     var nameProd = $('#nameProd').val();
    //     var codprod = $('#codprod').val();
    //     var prodvalue = $('#prodvalue').val();
    //     var textname = $('#textname').val();
    //     var linkprod = $('#linkprod').val();
    //     var fabvalue = $('#fabvalue').val();
    //     var prodpar = $('#prodpar').val();

    //     console.log(nameProd+"\n"+codprod+"\n"+prodvalue+"\n"+textname+"\n"+linkprod+"\n"+fabvalue+"\n"+prodpar);

    //     var dados = new FormData();

    //     dados.append("nome", nameProd);
    //     dados.append("codigo",codprod);
    //     dados.append("valor",prodvalue);
    //     dados.append("descricao", textname);
    //     dados.append("link",linkprod);
    //     dados.append("fabrica",fabvalue);
    //     dados.append("parcelas",prodpar);

    //     $.ajax({
    //         url:"recebe.php",
    //         method:"POST",
    //         data: dados,
    //         processData: false,
    //         contentType: false,      
    //         success: function( content ){
    //             $('#salvar').after(content);
    //         }
    //     });

    // });


    // var btnSalvar = document.querySelector('[name="salvar"]');
    // btnSalvar.addEventListener('click',function(){

    //     var nameProd = document.querySelector('[name="nameProd"]').value;
    //     console.log(nameProd);

    //     var codprod = document.querySelector('[name="codprod"]').value;
    //     console.log(codprod);

    //     var prodvalue = document.querySelector('[name="prodvalue"]').value;
    //     console.log(prodvalue);

    //     var textname = document.querySelector('[name="textname"]').value;
    //     console.log(textname);

    //     var linkprod = document.querySelector('[name="linkprod"]').value;
    //     console.log(linkprod);

    //     var fabvalue = document.querySelector('[name="fabvalue"]').value;
    //     console.log(fabvalue);

    //     var prodpar = document.querySelector('[name="prodpar"]').value;
    //     console.log(prodpar);

    // });
        
    </script>
</body>

</html>