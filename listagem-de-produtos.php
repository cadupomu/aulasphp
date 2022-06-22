<?php 
    include('config.php');
    require_once('repository/hortifrutirepository.php'); 
   
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <?php include('navbar.php'); ?>
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Data cadastro</th>
                    <th colspan="2">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(fnListProdutos() as $hortifruti): ?>
                <tr>
                   <td><?= $hortifruti->id ?></td> 
                   <td><?= $hortifruti->produto ?></td> 
                   <td><?= $hortifruti->quantidade ?></td> 
                   <td><?= $hortifruti->valor ?></td> 
                   <td><?= $hortifruti->create_at ?></td> 
                   <td><a href="formulario-edita-produto.php?id=<?= $hortifruti->id ?>">Editar</a></td> 
                   <td><a onclick="return confirm('Deseja realmente excluir?');" href="excluirProduto.php?id=<?= $hortifruti->id ?>">Excluir</a></td> 
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if(isset($notificacao)) : ?>
            <tfoot>
                <tr>
                    <td colspan="7"><?= $_COOKIE['notify'] ?></td>
                </tr>
            </tfoot>
            <?php endif; ?>
        </table>
    </div>
    <?php include("rodape.php"); ?>
  </body>
</html>