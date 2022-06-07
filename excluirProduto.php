<?php

    require_once('repository/hortifrutirepository.php');

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $msg = "";
    if(fnDeleteProduto($id)) {
        $msg = "Sucesso ao apagar";
    } else {
        $msg = "Falha ao apagar";
    }

    header("location: listagem-de-produtos.php?notify={$msg}");
    exit;