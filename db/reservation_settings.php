<?php
// defineの値は環境によって変えてください。
define('HOSTNAME', 'localhost');
define('DATABASE', 'e_learning');
define('USERNAME', 'root');
define('PASSWORD', 'root');

function dbconect(){
    try {
    /// DB接続を試みる
    $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
    $msg = "MySQL への接続確認が取れました。";
    } catch (PDOException $e) {
    $isConnect = false;
    $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
    }
}

function getData(){
    
    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }


    $stmt = $pdo->prepare("SELECT * FROM reservation_settings WHERE place between :place_1 and :place_2 ");
    $stmt->bindValue(':place_1', 1, PDO::PARAM_INT);
    $stmt->bindValue(':place_2', 2, PDO::PARAM_INT);
    $res = $stmt->execute();
    
    if( $res ) {
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    $pdo = null;

    return $data;
}

function getDataDef($today){

    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }

    $stmt = $pdo->prepare("SELECT * FROM reservation_settings WHERE place = :place and start_date > :today");
    $stmt->bindValue(':place', 1, PDO::PARAM_INT);
    $stmt->bindValue(':today', $today, PDO::PARAM_STR);
    $res = $stmt->execute();
    
    if( $res ) {
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    $pdo = null;

    return $data;
}

function getDataNomember($start_date){

    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }

    $stmt = $pdo->prepare("SELECT * FROM reservation_settings WHERE place = :place and start_date = :today ");
    $stmt->bindValue(':place', 2, PDO::PARAM_INT);
    $stmt->bindValue(':today', $start_date, PDO::PARAM_STR);
    $res = $stmt->execute();
    
    if( $res ) {
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    $pdo = null;

    return $data;
}


function getDataMie($today){

    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }

    $stmt = $pdo->prepare("SELECT * FROM reservation_settings WHERE place = :place and start_date > :today");
    $stmt->bindValue(':place', 11, PDO::PARAM_INT);
    $stmt->bindValue(':today', $today, PDO::PARAM_STR);
    $res = $stmt->execute();
    
    if( $res ) {
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    $pdo = null;

    return $data;
}


function getReservation($id){

    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }

    $stmt = $pdo->prepare("SELECT * FROM reservation_settings WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $res = $stmt->execute();
    
    if( $res ) {
        $data = $stmt->fetch();
    }

    $pdo = null;

    return $data;
}





?>
