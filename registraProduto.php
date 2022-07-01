<?php

    require_once('repository/hortifrutirepository.php');
    require_once('util/base64.php');

    $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);

    $oto = converterBase64($_FILES['foto']);
    
    if(empty($produto) || empty($valor) || empty($quantidade) || empty($foto)) {
        $msg = "Preencher todos os campos primeiro.";
    } else {
        if(fnAddProduto($produto, $valor, $quantidade, $foto)) {
            $msg = "Sucesso ao gravar";
        } else {
            $msg = "Falha na gravação";
        }
    }

    $page = "formulario-edita-produto.php";
    setcookie('notify', $msg, time() + 10, "/hortifruti/{$page}", 'localhost');
    header("location: {$page}");
    exit;
   