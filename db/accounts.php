<?php

require_once 'db.php';

function accountStore($name,$email,$compnay_name,$phone,$sales_office){
    
    $pdo = dbConect();
    
    $stmt = $pdo->prepare("INSERT INTO accounts (
                name, email, company_name, sales_office, phone
            ) VALUES (
               :name, :email, :company_name,:sales_office, :phone
             )");
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':company_name', $compnay_name, PDO::PARAM_STR);
    $stmt->bindValue(':sales_office', $sales_office, PDO::PARAM_STR);
    $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
    $res = $stmt->execute();

    if( $res ) {
        $id = $pdo -> lastInsertId();
    }

    return $id;
}

function emailSearch($email){
    
    $pdo = dbConect();

    $stmt = $pdo->prepare("SELECT * FROM accounts WHERE email = :email" );
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $res = $stmt->execute();

    if( $res ) {
        $data = $stmt->fetch();
    }

    $pdo = NULL;

    return $data;
}



?>
