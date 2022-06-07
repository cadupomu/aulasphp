<?php

    require_once('repository/hortifrutirepository.php');

    $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);

    $msg = "";
    if(fnAddProduto($produto, $quantidade, $valor)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }

    header("location: formulario-cadastra-produto.php?notify={$msg}");
    exit;