<?php

    require_once('repository/hortifrutirepository.php');

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if(fnDeleteProduto($id)) {
        $msg = "Sucesso ao apagar";
    } else {
        $msg = "Falha ao apagar";
    }

    unset($_SESSION['id']);

    $page = "listagem-de-produtos.php";
    setcookie('notify', $msg, time() + 10, "/hortifruti/{$page}", 'localhost');
    header("location: {$page}");
    exit;