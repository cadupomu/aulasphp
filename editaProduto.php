<?php

require_once('repository/hortifrutirepository.php');

    $id = filter_input(INPUT_POST, 'idProduto', FILTER_SANITIZE_NUMBER_INT);
    $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT);

    $msg = "";
    if(fnUpdateProduto($id, $produto, $quantidade, $valor)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }

    header("location: formulario-edita-produto.php?notify={$msg}&id=$id");
    exit;