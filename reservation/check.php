<?php

$reservation_id = (int) $_POST['reservation_id'];
$reservation_name =  $_POST['reservation_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$count = $_POST['count'];
$name = $_POST['name'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$phone = $_POST['phone'];
$sales_office = '';
if(!empty($_POST['sales_office'])){
    $sales_office = $_POST['sales_office'];
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <input type="hidden" name="reservation_id" value="<?php echo $reservation_id;?>">
            <input type="hidden" name="reservation_name" value="<?php echo $reservation_name;?>">
            <input type="hidden" name="start_date" value="<?php echo $start_date;?>">
            <input type="hidden" name="end_date" value="<?php echo $end_date;?>">
            <input type="hidden" name="count" value="<?php echo $count;?>">
            <input type="hidden" name="name" value="<?php echo $name;?>">
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <input type="hidden" name="company_name" value="<?php echo $company_name;?>">
            <input type="hidden" name="phone" value="<?php echo $phone;?>">
            <input type="hidden" name="sales_office" value="<?php echo $sales_office;?>">

            <h2>受講予約確認画面</h2><br>

            <label>受講名:</label>：
            <?php echo $reservation_name ;?> <br>
            <label>受講期間:</label>
            <?php echo $start_date ;?>〜<?php echo $end_date ;?><br>
            <label>予約人数:</label>：
            <?php echo $count ;?><br>
            <label>申込者名:</label>：
            <?php echo $name ;?><br>
            <label>メールアドレス:</label>：
            <?php echo $email ;?><br>
            <label>会社名:</label>：
            <?php echo $company_name ;?><br>
            <label>営業者名:</label>：
            <?php echo $sales_office ;?><br>
            <label>電話番号:</label>：
            <?php echo $phone ;?><br>

            <button type="submit" class="btn btn-primary">登録する</button>

        </form>
    </div>
</body>

</html>
