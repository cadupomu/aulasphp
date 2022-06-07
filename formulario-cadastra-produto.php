<?php 
    $notificacao = filter_input(INPUT_GET, 'notify', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Cadastro de Produtos</legend>
            <form action="registraProduto.php" method="post" class="form">
                <div class="mb-3 form-group">
                    <label for="produtoId" class="form-label">Produto</label>
                    <input type="text" name="produto" id="produtoId" class="form-control" placeholder="Informe o nome do produto">
                    <div id="helperProduto" class="form-text">Informe o nome do produto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="quantidadeId" class="form-label">Quantidade</label>
                    <input type="text" name="quantidade" id="quantidadeId" class="form-control" placeholder="Informe a quantidade do produto">
                    <div id="helperQuantidade" class="form-text">Informe a quantidade do produto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="valorId" class="form-label">Valor</label>
                    <input type="text" name="valor" id="valorId" class="form-control" placeholder="Informe o valor do produto">
                    <div id="helperProduto" class="form-text">Informe o valor do produto</div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?= $notificacao ?></div>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>