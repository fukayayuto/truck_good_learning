<?php
// defineの値は環境によって変えてください。
// define('HOSTNAME', 'localhost');
// define('DATABASE', 'e_learning');
// define('USERNAME', 'root');
// define('PASSWORD', 'root');

function getEntry($id){
    
    try {
        /// DB接続を試みる
        $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
        $isConnect = false;
        $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
        }


    $stmt = $pdo->prepare("SELECT * FROM entries WHERE reservation_id = :id ");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $res = $stmt->execute();

    $data = null;
    
    if( $res ) {
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    $pdo = null;

    return $data;
}




?>
