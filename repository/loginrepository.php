<?php

    require_once('connection.php');


    function fnAddProduto($produto, $quantidade, $valor) {
        $con = getConnection();
        
        $sql = "insert into hortifruti (produto, quantidade, valor) values (:pProduto, :pQuantidade, :pValor)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pProduto", $produto); 
        $stmt->bindParam(":pQuantidade", $quantidade); 
        $stmt->bindParam(":pValor", $valor); 
        
        return $stmt->execute();
    }

    function fnListProdutos() {
        $con = getConnection();

        $sql = "select * from hortifruti";

        $result = $con->query($sql);

        $lstProduto = array();
        while($hortifruti = $result->fetch(PDO::FETCH_OBJ)) {
            array_push($lstProduto, $hortifruti);
        } 

        return $lstProduto;
    }

    function fnLocalizaProdutoPorId($id) {
        $con = getConnection();

        $sql = "select * from hortifruti where id = :pID";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id);

        if($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        return null;
    }
    
    function fnUpdateProduto($id, $produto, $quantidade, $valor) {
        $con = getConnection();
                
        $sql = "update hortifruti set produto = :pProduto, quantidade = :pQuantidade, valor = :pValor where id = :pID";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id); 
        $stmt->bindParam(":pProduto", $produto); 
        $stmt->bindParam(":pQuantidade", $quantidade); 
        $stmt->bindParam(":pValor", $valor); 
        
        return $stmt->execute();
    }
    
    function fnDeleteProduto($id) {
        $con = getConnection();
                
        $sql = "delete from hortifruti where id = :pID";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id);
        
        return $stmt->execute();
    }

    function fnLogin($email, $senha) {
        $con = getConnection();

        $sql = "select * from login where email = :pEmail and senha = :pSenha";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pEmail", $email);
        $stmt->bindValue(":pSenha", md5($senha));

        if($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        return null;
    }