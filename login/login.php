<?php
ini_set('display_errors', "On");
require "../db/accounts.php"; 


$email = $_POST['email'];
$pass = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$account = emailSearch($email);

if ($pass == $account['password']){
    die('成功');
    $_SESSION['id'] = $account['id'];
    $_SESSION['name'] = $account['name'];
    header('Location: http://localhost:8888/truck/home');
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php">戻る</a>';
}




?>