
<?php
ini_set('display_errors', "On");
require "../db/reservation_settings.php"; 
require "../db/entries.php";
if(isset($_GET['id'])) {
     $reservation_id = (int) $_GET['id'];
}

$data = array();
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

$reservation_total_seat = $reservation_data['count'];
$used_seat = 0;

$entry = getEntry($reservation_data['id']);
foreach ($entry as $val) {
    $used_seat = $used_seat + $val['count'];
}
$left_seat = $reservation_total_seat - $used_seat;




?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      初認運転者講習受講予約｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】
    </title>
    <meta
      name="title"
      content="初認運転者講習受講予約｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta
      name="description"
      content="グッドラーニング！についての初認運転者講習受講予約はこちらから受け付けております。お気軽にお問合せください。"
    />
    <meta
      name="keywords"
      content="乗務員,教育,講習,Eラーニング,指導,国交省,トラック,運送業,グッドラーニング"
    />
    <meta
      property="og:title"
      content="初認運転者講習受講予約｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta property="og:type" content="article" />
    <meta
      property="og:url"
      content="https://promote.good-learning.jp/truck/reserve/"
    />
    <meta
      property="og:image"
      content="https://promote.good-learning.jp/truck/common/img/shared/og_image.jpg"
    />
    <meta
      property="og:site_name"
      content="トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta
      property="og:description"
      content="初認運転者講習受講予約はこちらから受け付けております。お気軽にお問合せください。"
    />
    <link
      rel="canonical"
      href="https://promote.good-learning.jp/truck/reserve/"
    />
    <link rel="stylesheet" href="https://use.typekit.net/hcg7pyj.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700"
      rel="stylesheet"
      media="print"
      onload="this.media='all'"
    />
    <link href="../common/css/default.css" rel="stylesheet" type="text/css" />
    <link href="../common/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="../common/css/content.css" rel="stylesheet" type="text/css" />
    <link href="../common/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHJMK5S');</script>
<!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHJMK5S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
      <!-- header// -->
      <header>
        <div id="header">
          <p id="headLogo">
            <a href="/truck/"
              ><img
                src="../common/img/shared/head_logo.svg"
                alt="グッドラーニング"
                width="262"
                height="50"
                loading="lazy"
            /></a>
          </p>
          <p id="headTxt">
            <span>トラックドライバー教育</span>のクラウド型eラーニング
          </p>
        </div>
      </header>
      <!-- //header -->
      <!-- main// -->
      <main>
        <div id="pageTit">
          <h1>初認運転者講習受講予約</h1>
          <div id="breadCrumbs">
            <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li
                itemprop="itemListElement"
                itemscope=""
                itemtype="https://schema.org/ListItem"
              >
                <a href="/truck/" itemprop="item"
                  ><span itemprop="name">HOME</span></a
                ><meta itemprop="position" content="1" />
              </li>
              <li>初認運転者講習受講予約</li>
            </ol>
          </div>
        </div>
        <div class="inner mt40">
          <div id="contact">
            <form action="confirm.php" method="post" id="form_1">
              
              <dl>
				  <dt>受講名</dt>
				  <dd class="setDate"><?php echo $data['name'];?></dd>
				  <dt>受講期間</dt>
				  <dd class="setDate"><?php echo $data['start_date'] . '(' . $data['start_week'] .')' .'〜' . $data['end_date'] . '(' . $data['end_week'] .')' ; ?></dd>
                <dt>受講人数<span>必須</span></dt>
                <dd class="date">
                  
                  <select>
					  <option>1人</option>
					  <option>2人</option>
					  <option>3人</option>
					  <option>4人</option>
					  <option>5人</option>
					</select>
                </dd>
                <dt>氏名<span>必須</span></dt>
                <dd>
                  <input
                    type="text"
                    class="form-control input-lg validate[required]"
                    id="inquirer"
                    name="inquirer"
                    placeholder="例）山田 太郎"
                  />
                </dd>
                <dt>メールアドレス<span>必須</span></dt>
                <dd>
                  <input
                    type="text"
                    class="
                      form-control
                      input-lg
                      validate[required,custom[email]]
                    "
                    id="mail_address"
                    name="mail_address"
                    placeholder="例）test@gmail.co.jp"
                  />
                </dd>
                <dt>会社名<span>必須</span></dt>
                <dd>
                  <input
                    type="text"
                    class="form-control input-lg validate[required]"
                    id="inquirer"
                    name="inquirer"
                    placeholder="例）株式会社キャブステーション"
                  />
                </dd>
                <dt>営業所<span>必須</span></dt>
                <dd>
                  <input
                    type="text"
                    class="form-control input-lg validate[required]"
                    id="inquirer"
                    name="inquirer"
                    placeholder="例）営業部"
                  />
                </dd>
                <dt>お電話番号<span>必須</span></dt>
                <dd>
                  <input
                    type="tel"
                    class="form-control input-lg validate[required]"
                    id="tel"
                    name="tel"
                    placeholder="例）0120-1234-5678"
                  />
                </dd>
                
              </dl>
              <ul class="formBtn">
                <li>
                  <input
                    type="submit"
                    class="baseSubmit"
                    value="確認画面へ進む"
                  />
                </li>
              </ul>
            </form>
          </div>
        </div>
      </main>
      <!-- //main -->
      <!-- footer// -->
      <footer>
        <div id="copy">
          <div class="inner">
            <ul class="footSub">
              <li>
                <a href="https://cab-station.com/privacy.html" target="_blank"
                  >プライバシーポリシー</a
                >
              </li>
              <li>
                <a href="https://cab-station.com/company.html" target="_blank"
                  >会社概要</a
                >
              </li>
            </ul>
            <p>© 2021 Cab Station Co., Ltd.</p>
          </div>
        </div>
      </footer>
      <!-- //footer -->
    </div>
    <!-- js -->
    <script src="../common/js/common.js"></script>
    <script src="../common/js/jquery.validationEngine.js"></script>
    <script src="../common/js/jquery.validationEngine-ja.js"></script>
    <script>
      jQuery(function () {
        jQuery("#form_1").validationEngine({validateNonVisibleFields: true,promptPosition:'inline'});
        var headerHeight = $("header").outerHeight();
        var urlHash = location.hash;
        if (urlHash) {
          $("body,html").stop().scrollTop(0);
          setTimeout(function () {
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $("body,html").stop().animate({ scrollTop: position }, 500);
          }, 100);
        }
        $('a[href^="#"]').click(function () {
          var href = $(this).attr("href");
          var target = $(href);
          var position = target.offset().top - headerHeight;
          $("body,html").stop().animate({ scrollTop: position }, 500);
        });
      });
    </script>
    
  </body>
</html>