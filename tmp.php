<?php

require_once "db/information.php";

$information_priority_data = getPriorityiInformation();
$limit = 6 - count($information_priority_data);

$information_nomal_data = getNormalInformation($limit);

$priority_data = array();

foreach ($information_priority_data as $k => $val){
  $tmp = array();

  $updated_at = new DateTime($val['updated_at']);
  $tmp['updated_at'] = $updated_at->format('Y.m.d');

  $title = $val['title'];
  $link_part = $val['link_part'];
  $tmp['link'] = $val['link'];
  $tmp['link_part'] = $link_part;
  $tmp['title'] = $title;

  if(!is_null($link_part)){
    $part_first = strstr($title, $link_part, true);
    $left_part = strstr($title, $link_part);
    $word_count = mb_strlen($link_part);
    $part_final = mb_substr($left_part, $word_count);
    $tmp['part_first'] = $part_first;
    $tmp['part_final'] = $part_final;
  }

  $priority_data[$k] = $tmp;
  

}



$normal_data = array();
foreach ($information_nomal_data as $key => $value){
  $tmp = array();

  $updated_at = new DateTime($value['updated_at']);
  $tmp['updated_at'] = $updated_at->format('Y.m.d');

  $title = $value['title'];
  $link_part = $value['link_part'];
  $tmp['link_part'] = $link_part;
  $tmp['link'] = $value['link'];

  $tmp['title'] = $title;

  if(!is_null($link_part)){
    $part_first = strstr($title, $link_part, true);
    $left_part = strstr($title, $link_part);
    $word_count = mb_strlen($link_part);
    $part_final = mb_substr($left_part, $word_count);
    $tmp['part_first'] = $part_first;
    $tmp['part_final'] = $part_final;
  }

  $normal_data[$key] = $tmp;

}




?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】
    </title>
    <meta
      name="title"
      content="トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta
      name="description"
      content="グッドラーニング！は、国交省の「一般的な指導および監督の指針」に対応した、運転者の指導教育に特化したeラーニングシステムです。時間と場所を選ばずに、すべての乗務員に対して効率よく指導教育を実施することができます。"
    />
    <meta
      name="keywords"
      content="乗務員,教育,研修,Eラーニング,指導,国交省,トラック,運送業,グッドラーニング"
    />
    <meta
      property="og:title"
      content="トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://promote.good-learning.jp/truck/" />
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
      content="グッドラーニング！は、国交省の「一般的な指導および監督の指針」に対応した、運転者の指導教育に特化したeラーニングシステムです。時間と場所を選ばずに、すべての乗務員に対して効率よく指導教育を実施することができます。"
    />
    <link rel="canonical" href="https://promote.good-learning.jp/truck/" />
    <link rel="stylesheet" href="https://use.typekit.net/hcg7pyj.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700"
      rel="stylesheet"
      media="print"
      onload="this.media=’all'"
    />
    <link href="common/css/default.css" rel="stylesheet" type="text/css" />
    <link href="common/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="common/css/top.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <?php @include($_SERVER['DOCUMENT_ROOT']."/truck/common/inc/head_before.inc")?>
  </head>

  <body>
    <?php @include($_SERVER['DOCUMENT_ROOT']."/truck/common/inc/body_after.inc")?>
    <div id="wrapper">
      <!-- header// -->
      <header id="index">
        <div id="mainImg">
          <div class="txtBox">
            <ul>
              <li>
                <img
                  src="common/img/index/main_point01.png"
                  alt="指導教育記録簿自動作成"
                  width="205"
                  height="205"
                  loading="lazy"
                />
              </li>
              <li>
                <img
                  src="common/img/index/main_point02.png"
                  alt="国交省指定安全教育対応"
                  width="205"
                  height="205"
                  loading="lazy"
                />
              </li>
              <li>
                <img
                  src="common/img/index/main_point03.png"
                  alt="どこでも受講！PC・スマホ対応"
                  width="205"
                  height="205"
                  loading="lazy"
                />
              </li>
              <li>
                <img
                  src="common/img/index/main_point04.png"
                  alt="リーズナブルな料金体系"
                  width="205"
                  height="205"
                  loading="lazy"
                />
              </li>
            </ul>
            <div>
              <img
                src="common/img/index/main_tit_smt.png"
                alt="トラックドライバー教育のクラウド型eラーニング グッドラーニング!"
                width="717"
                height="361"
                class="smt"
                loading="lazy"
              /><img
                src="common/img/index/main_tit.png"
                alt="トラックドライバー教育のクラウド型eラーニング グッドラーニング!"
                width="786"
                height="239"
                class="pc"
                loading="lazy"
              />
            </div>
          </div>
        </div>
        <div id="global">
          <div id="navTrigger"><span>&nbsp;</span></div>
          <nav>
            <ul>
              <li><a href="/truck/">HOME</a></li>
              <li><a href="/truck/price/">料金について</a></li>
              <li><a href="/truck/flow/">ご利用の流れ</a></li>
              <li><a href="/truck/adopt/">ご採用実績</a></li>
              <li><a href="/truck/faq/">FAQ</a></li>
              <li><a href="/truck/contact/">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- //header -->
      <!-- main// -->
      <main>
        <div id="news">
          <div id="newsIn">
            <p id="newsTit">NEWS &amp; TOPICS</p>
            <ul>

            <?php if(isset($priority_data)):?>
              <?php foreach ($priority_data as $val):?>
              <li>
                  <span><?php echo $val['updated_at'];?></span>

                  <?php if(!empty($val['part_first'])):?>
                    <?php echo $val['part_first'];?>
                  <?php endif;?>

                  <?php if(!empty($val['link_part'])):?>
                    <a href="<?php echo $val['link'];?>">
                        <?php echo $val['link_part'];?>
                    </a>
                  <?php else:?>
                       <?php echo $val['title'];?>
                  <?php endif;?>

                  <?php if(!empty($val['part_final'])):?>
                    <?php echo $val['part_final'];?>
                  <?php endif;?>            
          
              </li>
              <?php endforeach;?>
            <?php endif;?>

            <?php if(isset($normal_data)):?>
              <?php foreach ($normal_data as $val):?>
              <li>
                  <span><?php echo $val['updated_at'];?></span>

                  <?php if(!empty($val['part_first'])):?>
                    <?php echo $val['part_first'];?>
                  <?php endif;?>

                  <?php if(!empty($val['link_part'])):?>
                    <a href="<?php echo $val['link'];?>">
                        <?php echo $val['link_part'];?>
                    </a>
                  <?php else:?>
                       <?php echo $val['title'];?>
                  <?php endif;?>

                  <?php if(!empty($val['part_final'])):?>
                    <?php echo $val['part_final'];?>
                  <?php endif;?>            
          
              </li>
              <?php endforeach;?>
            <?php endif;?>
              </ul>
          </div>
        </div>
        <div id="contactBox">
          <div id="contactIn">
            <p>お問い合わせ・受講体験は<br />お電話又はフォームで</p>
            <a href="tel:0368801064" class="tel">03-6880-1064</a>
            <a href="/truck/contact/" class="btn"
              >お問い合わせ・受講体験はこちら</a
            >
          </div>
        </div>
        <div id="topContent01">
          <h1>
            <span>トラックドライバー教育</span>で<br />お困りではありませんか？
          </h1>
          <p>
            事業用自動車による交通事故が後を絶たず、安全教育に頭を抱える事業者様も多いと思います。<br />
            また、従来の教材に代わる新しいプログラムをお探しの方もいらっしゃるのではないでしょうか。<br />
            特に従業員数の多い事業者様は、業務の調整や受講状況の管理にも悩まれていることと思います。
          </p>
          <ul>
            <li>配車業務が忙しくてドライバー教育まで手が回らない</li>
            <li>研修にかかるコストの負担が大きい</li>
            <li>集合研修を開催する場所も機会もない</li>
            <li>専任の教育担当者を配置したいが要員不足で難しい</li>
          </ul>
        </div>
        <div id="topContent02">
          <div id="topContentInfo">
            <h2>
              <img
                src="common/img/shared/ico_logo.svg"
                alt="グッドラーニング"
                width="390"
                height="54"
                loading="lazy"
              />が<br />全てのお悩みを解決します！
            </h2>
            <div class="movie">
              <iframe
                src="https://player.vimeo.com/video/534674085?badge=0&amp;autopause=0&amp;pl
ayer_id=0&amp;app_id=58479"
                width="1920"
                height="1080"
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen
                title="グッ
ドラーニング！PRアニメーション"
              ></iframe>
            </div>
            <p>
              グッドラーニング！は、国交省の「一般的な指導および監督の指針」に対応した、運転者の指導教育に特化したeラーニングシステムです。<br />
              時間と場所を選ばずに、すべてのドライバー・乗務員に対して効率よく指導教育を実施することができます。
            </p>
          </div>
          <div class="pointBox">
            <img
              src="common/img/index/point_ph01.jpg"
              alt="いつでも受講可能"
              width="750"
              height="500"
              loading="lazy"
            />
            <div>
              <h3>
                積込や荷卸しの待機時間を活用して、<br />いつでもどこでも何度も受講可能！
              </h3>
              <p>
                講座の受講時間は約30分。待機時間を利用して受講することもできるので、3密を回避した受講計画を立てることが可能です。また、受講者の理解度に応じて、教材は何度でも繰り返し受講することができます。
              </p>
            </div>
          </div>
          <div class="pointBox">
            <img
              src="common/img/index/point_ph02.jpg"
              alt="PC・スマートフォン・タブレット端末に対応"
              width="750"
              height="500"
              loading="lazy"
            />
            <div>
              <h3>
                PC・スマートフォン・タブレット端末に対応。受講場所を選びません
              </h3>
              <p>
                クラウド型の教育システムなので、タブレットやスマートフォン、パソコンを使って、社内・社外問わずに受講する事ができます。
              </p>
            </div>
          </div>
          <div class="pointBox">
            <img
              src="common/img/index/point_ph03.jpg"
              alt="主体的に取り組めて、一方通行にならない教育"
              width="750"
              height="500"
              loading="lazy"
            />
            <div>
              <h3>主体的に取り組めて、一方通行にならない教育が実現できます</h3>
              <p>
                最新版の講座が自動的に配信され、定期的かつ継続的に教育に取り組むことで、ドライバーの安全意識を高めることができます。また、受講後に用意されている効果測定テストで、対話型の研修を実施できます。受講者の理解度を把握できる取り組みは、国土交通省の推薦するところとなっています（※）<br />
                ※国交省の「運輸事業者における安全管理の進め方に関するガイドライン」取り組み事例集
                第１０項「安全管理体制の構築・改善に必要な教育訓練等」（２０１７年）
              </p>
            </div>
          </div>
          <div class="pointBox">
            <img
              src="common/img/index/point_ph04.jpg"
              alt="動画を使った危険予測トレーニング"
              width="750"
              height="500"
              loading="lazy"
            />
            <div>
              <h3>
                動画を使った危険予測トレーニング（ＫＹＴ）など、特別講座が受講可能。
              </h3>
              <p>
                コンピューターグラフィックを用いた危険予測シーンの再現や、ナレーション付きの解説など、映像と音声による効果的な研修を体感していただけます。
              </p>
              <ul>
                <li>
                  <a
                    href="https://vimeo.com/364937431"
                    target="_blank"
                    class="icoPlay"
                    >安全講座 サンプル動画</a
                  >
                </li>
                <li>
                  <a
                    href="https://vimeo.com/364929237"
                    target="_blank"
                    class="icoPlay"
                    >特別講座 サンプル動画</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="pointBox">
            <img
              src="common/img/index/point_ph05.jpg"
              alt="自社のドラレコ映像を使用したオリジナル教材の配信"
              width="750"
              height="500"
              loading="lazy"
            />
            <div>
              <h3>自社のドラレコ映像を使用したオリジナル教材の配信も可能</h3>
              <p>
                自社のドライブレコーダーに記録されたヒヤリ・ハット事例などを使ったオリジナル教材を作成することができます。他社への公開を前提に、トラック事業者様に代わって教材作成作業を代行する事も可能です。
                ドライブレコーダー映像ファイルをアップロード（※）して教材として配信できます。<br />
                ※1件あたり20MB以内、合計で1GB以内
              </p>
            </div>
          </div>
          <div class="pointBox">
            <img
              src="common/img/index/point_ph06.jpg"
              alt="年間教育計画表・ 指導教育記録簿の出力"
              width="750"
              height="500"
              loading="lazy"
            />
            <div>
              <h3>年間教育計画表・ 指導教育記録簿の出力もラクラク！</h3>
              <p>
                管理用サイトを使って受講者ごとの受講状況やテスト結果をレポートで確認。必要な時に指導教育記録簿として出力することができます。受講漏れや理解不足を見逃すことなく、適格なフォローアップに役立てられます。
              </p>
              <ul>
                <li>
                  <a
                    href="https://promote.good-learning.jp/truck/common/img/sample_pdf.pdf"
                    target="_blank"
                    class="icoPdf"
                    >出力サンプルはこちらから</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <div id="contactBanar">
            <p>お問い合わせ・受講体験はお電話又はフォームで</p>
            <div class="telNo">
              <a href="tel:0368801064">03-6880-1064</a>
              <p>平日9:30~17:30<span>土日祝日休業</span></p>
            </div>
            <ul>
              <li><a href="/truck/price/">利用料金</a></li>
              <li>
                <a href="/truck/contact/">お問い合わせ・受講体験はこちら</a>
              </li>
            </ul>
          </div>
        </div>
        <!--
    <div id="topAdopt">
	  <h2>ご採用実績<span>conference member</span></h2>
		  <p><a href="/truck/adopt/">ご採用実績会社一覧</a></p>
		  <ul>
		  <li>aa</li></ul>
	  </div>
-->
        <div id="topMedia">
          <div id="topMediaIn">
            <h2>メディア掲載情報<span>media publication information</span></h2>
            <ul>
              <li>
                <img
                  src="common/img/index/media_ph01.jpg"
                  alt="物流ウィークリー(7月20日号)に掲載されました"
                  width="640"
                  height="909"
                  loading="lazy"
                />
              </li>
              <li>
                <h3>物流ウィークリー(7月20日号)に掲載されました</h3>
                <p>
                  京都府トラック協会様で会員事業者向けに「グッドラーニング！」をご採用頂いた事例を取り上げて頂きました。
                </p>
              </li>
              <li>
                <img
                  src="common/img/index/media_ph02.jpg"
                  alt="物流新時代（10月18日号）に掲載されました"
                  width="640"
                  height="909"
                  loading="lazy"
                />
              </li>
              <li>
                <h3>物流新時代（10月18日号）に掲載されました</h3>
                <p>
                  三重県トラック協会様で「グッドラーニング！ 初任運転者講習」をご採用頂いた事例を取り上げて頂きました。
                </p>
              </li>
            </ul>
          </div>
        </div>
      </main>
      <!-- //main -->
      <!-- footer// -->
      <footer>
        <div class="inner">
          <div class="footLogo">
            <img
              src="common/img/shared/foot_logo.svg"
              alt="グッドラーニング"
              width=""
              height=""
              loading="lazy"
            />
          </div>
          <ul class="footNav">
            <li><a href="/truck/">ホーム</a></li>
            <li><a href="/truck/price/">料金について</a></li>
            <li><a href="/truck/flow/">ご利用の流れ</a></li>
            <li><a href="/truck/adopt/">ご採用実績</a></li>
            <li><a href="/truck/faq/">FAQ</a></li>
            <li><a href="/truck/contact/">お問い合わせ</a></li>
          </ul>
        </div>
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
		<div id="float">
		<p><span>お問い合わせ・受講体験はお電話で</span></p>
		<a href="tel:0368801064">03-6880-1064<span>今すぐ電話する</span></a>
		</div>
    </div>
    <!-- js -->
    <script src="common/js/common.js"></script>
    <?php @include($_SERVER['DOCUMENT_ROOT']."/truck/common/inc/js_after.inc")?>
  </body>
</html>
