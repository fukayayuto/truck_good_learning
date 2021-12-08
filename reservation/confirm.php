
<?php
ini_set('display_errors', "On");

if(empty($_POST)){
    header('Location: http://localhost:8888/truck/price');
}

$data = array();
$data['id'] = $_POST['id'];
$data['reservation_name'] = $_POST['reservation_name'];
$data['start_date'] = $_POST['start_date'];
$data['start_week'] = $_POST['start_week'];
$data['end_date'] = $_POST['end_date'];
$data['end_week'] = $_POST['end_week'];
$data['count'] = $_POST['count'];
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['company_name'] = $_POST['company_name'];
$data['phone'] = $_POST['phone'];
$data['sales_office'] = '';
if(!empty($_POST['sales_office'])){
    $data['sales_office'] = $_POST['sales_office'];
}

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      初任運転者講習受講予約｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】
    </title>
    <meta
      name="title"
      content="初任運転者講習受講予約｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta
      name="description"
      content="グッドラーニング！についての初任運転者講習受講予約はこちらから受け付けております。お気軽にお問合せください。"
    />
    <meta
      name="keywords"
      content="乗務員,教育,講習,Eラーニング,指導,国交省,トラック,運送業,グッドラーニング"
    />
    <meta
      property="og:title"
      content="初任運転者講習受講予約｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
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
      content="初任運転者講習受講予約はこちらから受け付けております。お気軽にお問合せください。"
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
          <h1>初任運転者講習受講予約</h1>
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
              <li>初任運転者講習受講予約</li>
            </ol>
          </div>
        </div>
        <div class="inner mt40">
          <div id="contact">
            <form action="thanks.php" method="post" id="form_1">

                <input type="hidden" name="id" id="id" value="<?php echo $data['id'];?>">
                <input type="hidden" name="reservation_name" id="reservation_name" value="<?php echo $data['reservation_name'];?>">
                <input type="hidden" name="start_date" id="start_date" value="<?php echo $data['start_date'];?>">
                <input type="hidden" name="start_week" id="start_week" value="<?php echo $data['start_week'];?>">
                <input type="hidden" name="end_date" id="end_date" value="<?php echo $data['end_date'];?>">
                <input type="hidden" name="end_week" id="end_week" value="<?php echo $data['end_week'];?>">
                <input type="hidden" name="count" id="count" value="<?php echo $data['count'];?>">
                <input type="hidden" name="name" id="name" value="<?php echo $data['name'];?>">
                <input type="hidden" name="email" id="email" value="<?php echo $data['email'];?>">
                <input type="hidden" name="company_name" id="company_name" value="<?php echo $data['company_name'];?>">
                <input type="hidden" name="phone" id="phone" value="<?php echo $data['phone'];?>">
                <input type="hidden" name="sales_office" id="sales_office" value="<?php echo $data['sales_office'];?>">



        <p id="pageTxt">入力内容をご確認の上、お問い合わせください。</p>
              <dl class="conf">
				  <dt>受講名</dt>
				  <dd><?php echo $data['reservation_name'];?></dd>
				  <dt>受講期間</dt>
				  <dd class="conf"><?php echo $data['start_date'] . '(' . $data['start_week'] .')' .'〜' . $data['end_date'] . '(' . $data['end_week'] .')' ; ?></dd>
                <dt>受講人数<span>必須</span></dt>
                <dd><?php echo $data['count'];?></dd>
                <dt>氏名<span>必須</span></dt>
                <dd><?php echo $data['name'];?>
                </dd>
                <dt>メールアドレス<span>必須</span></dt>
                <dd><?php echo $data['email'];?>
                </dd>
                <dt>会社名<span>必須</span></dt>
                <dd><?php echo $data['company_name'];?>
                </dd>
                <dt>営業所</dt>
                <dd><?php echo $data['sales_office'];?>
                </dd>
                <dt>お電話番号<span>必須</span></dt>
                <dd><?php echo $data['phone'];?>
                </dd>
                
              </dl>
              <ul class="formBtn">
                <li>
                  <input
                    type="submit"
                    class="baseSubmit"
                    value="この内容で予約する"
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
