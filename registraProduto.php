<?php

    require_once('repository/hortifrutirepository.php');

    $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);

    if(empty($produto) || empty($valor) || empty($quantidade)) {
        $msg = "Preencher todos os campos primeiro.";
    } else {
        if(fnAddProduto($produto, $valor, $quantidade)) {
            $msg = "Sucesso ao gravar";
        } else {
            $msg = "Falha na gravação";
        }
    }

    $page = "formulario-edita-produto.php";
    setcookie('notify', $msg, time() + 10, "/hortifruti/{$page}", 'localhost');
    header("location: {$page}");
    exit;
   