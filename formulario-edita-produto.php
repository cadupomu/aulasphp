<?php 
    include('config.php');
    require_once('repository/hortifrutirepository.php'); 
    $id = $_SESSION['id'];
    $hortifruti = fnLocalizaProdutoPorId($id);
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
  <?php include('navbar.php'); ?>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Edição de Produto</legend>
            <form action="editaProduto.php" method="post" class="form" enctype="multipart/form-data">
            <div class="card col-4 offset-4 text-center">
                    <img src="<?= $hortifruti->foto ?>" id="avatarId" class="rounded" alt="foto do produto">
             </div>
                <div>
                    <input type="hidden" name="idProduto" id="produtoId"value="<?= $hortifruti->id ?>">
                </div>
                <div class="mb-3 form-group">
                  <label for="fotoId" class="form-label">Foto</label>
                  <input type="file" name="foto" id="fotoId" class="form-control">
                  <div id="helperFoto" class="form-text">Importe a foto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="produtoId" class="form-label">Produto</label>
                    <input type="text" name="produto" id="produtoId" class="form-control" placeholder="Informe o produto" value="<?= $hortifruti->produto ?>">
                    <div id="helperProduto" class="form-text">Informe o produto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="quantidadeId" class="form-label">Quantidade</label>
                    <input type="text" name="quantidade" id="quantidadeId" class="form-control" placeholder="Informe o quantidade" value="<?= $hortifruti->quantidade ?>">
                    <div id="helperQuantidade" class="form-text">Informe a quantidade do produto</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="valorId" class="form-label">Valor</label>
                    <input type="text" name="valor" id="valorId" class="form-control" placeholder="Informe o preço" value="<?= $hortifruti->valor ?>">
                    <div id="helperValor" class="form-text">Informe o preço do produto</div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>
    <?php include("rodape.php"); ?>
   <script src="js/base64.js"></script>
  </body>
</html>