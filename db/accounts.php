<?php

function accountStore($name,$email,$compnay_name,$phone,$sales_office){
    
    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }


    $stmt = $pdo->prepare("INSERT INTO accounts (
                name, email, company_name, sales_office, phone
            ) VALUES (
               :name, :email, :company_name,:sales_office, :phone
             )");
    $date = new DateTime();
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




?>
