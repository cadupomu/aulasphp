<?php

require_once('repository/hortifrutirepository.php');
require_once('util/base64.php');

    $id = filter_input(INPUT_POST, 'idProduto', FILTER_SANITIZE_NUMBER_INT);
    $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT);

    $foto = converterBase64($_FILES['foto']);
    
    if(fnUpdateProduto($id, $produto, $foto, $quantidade, $valor)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }

    $_SESSION['id'] = $id;
    $page = "formulario-edita-produto.php";
    setcookie('notify', $msg, time() + 10, "/hortifruti/{$page}", 'localhost');
    header("location: {$page}");
    exit;
   