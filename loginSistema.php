<?php

    require_once('repository/LoginRepository.php');

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

    $page = "errorPage.php";
    

    if($_SESSION['login'] = fnLogin($email, $senha)) {
       $page = "listagem-de-produtos.php";
    } else {
      $expire = (time() + 20);
      setcookie('notify', 'Acesso negado! Falha ao efetuar login.', $expire, '/hortifruti/errorPage.php', 'localhost', isset($_SERVER['HTTPS']), true);
    }

    header("location: {$page}");
    exit;