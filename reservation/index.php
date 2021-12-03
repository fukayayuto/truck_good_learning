<?php
ini_set('display_errors', "On");
require "../db/reservation_settings.php"; 
if(isset($_GET['id'])) {
     $reservation_id = (int) $_GET['id'];
}
$data = [];
$reservation_data = getReservation($reservation_id);
if(empty($reservation_data)){
    header('Location: http://localhost:8888/truck/price');
}
$data['id'] = $reservation_data['id'];

switch ($reservation_data['place']) {
    case 1:
        $data['name'] = '【ユーザー限定】グッドラーニング！初任運転者講習（受講開始日で予約、最長７日間まで受講可能）';
        break;
    case 2:
        $data['name'] = '予約受付中グッドラーニング！初任運転者講習（受講開始日で予約、最長７日間まで受講可能）';
        break;
    case 11:
        $data['name'] = '【三重県トラック協会】グッドラーニング！初任運転者講習（受講開始日で予約、最長５日間まで受講可能）';
        break;
    case 21:
        $data['name'] = '【京都府トラック協会】グッドラーニング！初任運転者講習（受講開始日で予約、最長５日間まで受講可能）';
        break;
    default:
        break;
}
$start_date = new DateTime($reservation_data['start_date']);
  
$data['start_date'] = $start_date->format('m月d日');
$week = array( "日", "月", "火", "水", "木", "金", "土" );
$data['start_week'] = $week[$start_date->format("w")];

$progress = $reservation_data['progress'];

$start_date = new DateTime($reservation_data['start_date']);

$end_date = $start_date->modify('+' .$progress . 'days');
$data['end_date'] = $end_date->format('m月d日');
$data['end_week'] = $week[$end_date->format("w")];


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

        <form method="POST" action="/truck/reservation/check.php">

            <input type="hidden" name="reservation_id" value="<?php echo $data['id'];?>">
            <input type="hidden" name="reservation_name" value="<?php echo $data['name'];?>">
            <input type="hidden" name="start_date" value="<?php echo $data['start_date'];?>">
            <input type="hidden" name="end_date" value="<?php echo $data['end_date'];?>">
       
            <h2>受講予約画面</h2><br>

            <label>受講名:</label>：
            <?php echo $data['name'];?><br>
            <label>受講期間:</label>
            <?php echo $data['start_date'] . '(' . $data['start_week'] .')' .'〜' . $data['end_date'] . '(' . $data['end_week'] .')' ; ?><br>

            <div class="form-group">
                <label>人数選択</label>
                <select class="form-control" name="count" id="count">
                <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                            <option value="4">4人</option>
                            <option value="5">5人</option>

                    <!-- @switch($left_seat)
                        @case(1)
                            <option value="1">1人</option>
                        @break
                        @case(2)
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                        @break
                        @case(3)
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                        @break
                        @case(4)
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                            <option value="4">4人</option>
                        @break
                        @default
                            
                    @endswitch -->

                </select>
            </div>
            
            <div class="form-group">
                <label>氏名</label>
                <input type="text" class="form-control" id="name" placeholder="氏名" name="name">
            </div>
            <div class="form-group">
                <label>メールアドレス</label>
                <input type="email" class="form-control" id="email" placeholder="メールアドレス" name="email">
            </div>
            <div class="form-group">
                <label>会社名</label>
                <input type="text" class="form-control" id="company_name" placeholder="会社名" name="company_name">
            </div>
            <div class="form-group">
                <label>営業所</label>
                <input type="text" class="form-control" id="sales_office" placeholder="営業所" name="sales_office">
            </div>
            <div class="form-group">
                <label>電話番号</label>
                <input type="text" class="form-control" id="phone" placeholder="電話番号" name="phone">
                <small id="phoneHelp" class="form-text text-muted">ハイフンなしで入力してください</small>
            </div>
            <button type="submit" class="btn btn-primary">確認画面へ</button>
        </form>
    </div>
</body>

</html>
