<?php
ini_set('display_errors', "On");
require "../../db/reservation_settings.php"; 
require "../../db/entries.php"; 

$data = [];
$num = 0;
$today = new DateTime();
$today = $today->format('y-m-d');
$reservation_data = getDataMie($today);
foreach ($reservation_data as $k => $val){
  $tmp = [];
  $tmp = [];
  $tmp['id'] = $val['id'];
  // $weekday = ['日', '月', '火', '水', '木', '金', '土'];
  $progress = (int) $val['progress'];
  // $start_date = new Carbon($val);
  $start_date = new DateTime($val['start_date']);
  
  $tmp['start_date'] = $start_date->format('m月d日');

  $week = array( "日", "月", "火", "水", "木", "金", "土" );
  $tmp['start_week'] = $week[$start_date->format("w")];

  $end_date = $start_date->modify('+' .$progress . 'days');
  $tmp['end_date'] = $end_date->format('m月d日');
  $tmp['end_week'] = $week[$end_date->format("w")];

  $entry = getEntry($val['id']);
  $count = 0;

  if(!empty($entry)){
      foreach ($entry as $item) {
          $count = $count + $item['count'];
      }
  }
    $tmp['id'] = $val['id'];
    $tmp['left_seat'] = $val['count'] - $count;
    $tmp['display'] = 0;

    if($num >= 4){
      $tmp['display'] = 1;
    }

    $num++;

  $data[$k] = $tmp;
}



?>



<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      料金について｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】
    </title>
    <meta
      name="title"
      content="料金について｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta
      name="description"
      content="グッドラーニング！の料金プランは通常プラン・2年割引プラン・2年割ライトプランの3つのプランをご用意しております。"
    />
    <meta
      name="keywords"
      content="乗務員,教育,研修,Eラーニング,指導,国交省,トラック,運送業,グッドラーニング"
    />
    <meta
      property="og:title"
      content="料金について｜トラックドライバー教育のクラウド型eラーニング【グッドラーニング!】"
    />
    <meta property="og:type" content="article" />
    <meta
      property="og:url"
      content="https://promote.good-learning.jp/truck/price/"
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
      content="グッドラーニング！の料金プランは通常プラン・2年割引プラン・2年割ライトプランの3つのプランをご用意しております。"
    />
    <link
      rel="canonical"
      href="https://promote.good-learning.jp/truck/price/"
    />
    <link rel="stylesheet" href="https://use.typekit.net/hcg7pyj.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700"
      rel="stylesheet"
      media="print"
      onload="this.media=’all'"
    />
    <link href="../../common/css/default.css" rel="stylesheet" type="text/css" />
    <link href="../../common/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="../../common/css/content.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <?php @include($_SERVER['DOCUMENT_ROOT']."/truck/common/inc/head_before.inc")?>
  </head>

  <body>
    <?php @include($_SERVER['DOCUMENT_ROOT']."/truck/common/inc/body_after.inc")?>
    <div id="wrapper">
      <!-- header// -->
      <header>
        <div id="header">
          <p id="headLogo">
            <a href="/truck/"
              ><img
                src="../../common/img/shared/head_logo.svg"
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
        <div id="global">
          <div id="navTrigger"><span>&nbsp;</span></div>
          <nav>
            <ul>
              <li><a href="/truck/">HOME</a></li>
              <li class="stay"><span>料金について</span></li>
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
        <div id="pageTit">
          <h1>料金について</h1>
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
              <li>料金について</li>
            </ol>
          </div>
        </div>
        <p id="pageTxt">
          グッドラーニング！がご用意するプランは3つ。<br />
          負担の少ない「通常プラン」から2年間通して受講することができるオススメの「2年割引プラン」、さらに多くの企業様より意見を頂き新しく登場した「2年割ライトプラン」。<br />
          受講人数の追加や「初任運転者講習」などの特別なオプショナルプランも用意しております。
        </p>
        <ul id="price">
          <li>
            <h3><span>STANDARD PLAN</span> 通常プラン</h3>
            <p class="price">
              月額<span>13,200</span>円～<span class="noInclude"
                >(別途システム導入費)</span
              >
            </p>
            <p class="info">
              一般安全講習教材パック<br />
              自社オリジナル教材作成機能は含みません
            </p>
            <dl>
              <dt>システム導入費<span>(初回契約時のみ)</span></dt>
              <dd><span>55,000</span>円</dd>
              <dt class="infoTit">
                管理システム使用料<span>※追加は10名につき3,000円</span>
              </dt>
              <dd class="infoTit">
                月額<span>13,200</span>円<span class="limit">(10名まで)</span>
              </dd>
              <dd class="infoTxt">
                <p>
                  乗務員教育計画表、乗務員指導教育記録簿、保存用講習教材をダウンロードできます。
                </p>
              </dd>
              <dt class="infoTit">自社オリジナル教材作成機能(月額)</dt>
              <dd class="infoTit">月額<span>4,400</span>円</dd>
              <dd class="infoTxt">
                <p>
                  ・自社専用のオリジナル教材を自由に作成できるようになります<br />
                  ・ドラレコ映像ファイルをアップロードできるようになります<br />
                  (1件あたり20MB以内、合計で1GB以内)
                </p>
              </dd>
              <dt class="infoTit">一般安全講習<br />教材パック</dt>
              <dd class="infoTit">全11回分<span>66,000</span>円</dd>
              <dd class="infoTxt">
                <p>
                  ・安全運行、法令遵守に関する全12回の安全講座<br />
                  ・すべての講座に理解度チェックテストが付いています
                </p>
              </dd>
            </dl>
          </li>

          <li>
            <h3><span>2-YEARS PASS</span> 2年割引プラン</h3>
            <p class="price">
              月額<span>16,500</span>円<span class="noInclude"
                >(別途システム導入費)</span
              >
            </p>
            <p class="info">
              全ての機能を含んだフルプラン！<br />2年契約でお得にご利用頂けます。
            </p>
            <dl>
              <dt>システム導入費<span>(初回契約時のみ)</span></dt>
              <dd><span>55,000</span>円</dd>
              <dt class="infoTit">管理システム使用料</dt>
              <dd class="infoTit">
                月額<span>16,500</span>円<span class="limit">(50名まで)</span>
              </dd>
              <dd class="infoTxt">
                <p>
                  乗務員教育計画表、乗務員指導教育記録簿、保存用講習教材をダウンロードできます。
                </p>
              </dd>
              <dt class="infoTit">自社オリジナル教材作成機能(月額)</dt>
              <dd class="infoTit"><span class="include">2年間</span></dd>
              <dd class="infoTxt">
                <p>
                  ・自社専用のオリジナル教材を自由に作成できるようになります<br />
                  ・ドラレコ映像ファイルをアップロードできるようになります<br />
                  (1件あたり20MB以内、合計で1GB以内)
                </p>
              </dd>
              <dt class="infoTit">一般安全講習<br />教材パック</dt>
              <dd class="infoTit"><span class="include">2年分</span></dd>
              <dd class="infoTxt">
                <p>
                  ・安全運行、法令遵守に関する全12回の安全講座<br />
                  ・すべての講座に理解度チェックテストが付いています
                </p>
              </dd>
            </dl>
          </li>

          <li>
            <h3><span>2-YEARS LIGHT</span> 2年割ライトプラン</h3>
            <p class="price">
              月額<span>11,000</span>円<span class="noInclude"
                >(別途システム導入費)</span
              >
            </p>
            <p class="info">
              2年割ライトプランが登場！自社オリジナル教材
              作成機能以外をお得に利用できます。
            </p>
            <dl>
              <dt>システム導入費<span>(初回契約時のみ)</span></dt>
              <dd><span>55,000</span>円</dd>
              <dt class="infoTit">管理システム使用料</dt>
              <dd class="infoTit">
                月額<span>11,000</span>円<span class="limit">(10名まで)</span>
              </dd>
              <dd class="infoTxt">
                <p>
                  乗務員教育計画表、乗務員指導教育記録簿、保存用講習教材をダウンロードできます。
                </p>
              </dd>
              <dt class="infoTit">自社オリジナル教材作成機能(月額)</dt>
              <dd class="infoTit"><span class="include not">なし</span></dd>
              <dd class="infoTxt">
                <p>
                  ・自社専用のオリジナル教材を自由に作成できるようになります<br />
                  ・ドラレコ映像ファイルをアップロードできるようになります<br />
                  (1件あたり20MB以内、合計で1GB以内)
                </p>
              </dd>
              <dt class="infoTit">一般安全講習<br />教材パック</dt>
              <dd class="infoTit"><span class="include">2年分</span></dd>
              <dd class="infoTxt">
                <p>
                  ・安全運行、法令遵守に関する全12回の安全講座<br />
                  ・すべての講座に理解度チェックテストが付いています
                </p>
              </dd>
            </dl>
          </li>
        </ul>

        <div id="optionPlan">
          <div class="inner">
            <h2 class="subTit">
              <span>option plan</span><br />
              初任運転者講座
            </h2>
            <p>
              国土交通省が定めている「初任運転者に対する特別な指導」について、座学15時間の教育内容の一部（「初任運転者に対する特別な指導」により規定されている12項目（実際の車両を用いて行う指導は除く）について、12時間分の講座）をグッドラーニング！で受講できるようあらたに「初任運転者講座」をご用意いたしました。
            </p>

            <div id="optionPrice">
              <div class="info">
                <h3><span>初任運転者講座受講料</span> </h3>
                <p class="price">非会員<br>
1名<span>11,000</span>円</p>
                <p class="price">グッドラーニング!会員<br>
1名<span>7,700</span>円</p>
                <p>※受講料は事前払いです。</p>
                <p class="bank">
                  【振込口座】<br />
                  三井住友銀行　渋谷支店<br />
                  普通9492637<br />
                  株式会社キャブステーション
                </p>
              </div>
              <ol>
                <li>
                  <img
                    src="../../common/img/price/ico_calendar.png"
                    alt="カレンダー"
                    width="155"
                    height="155"
                    loading="lazy"
                  />
                  <h3>受講予約</h3>
                  <p>
                    <a href="#calendar">下記受講開始日の席数ボタン</a
                    >より予約してください。予約にはメールアドレスが必要です。
                  </p>
                </li>
                <li>
                  <img
                    src="../../common/img/price/iico_pay.png"
                    alt="支払い"
                    width="156"
                    height="156"
                    loading="lazy"
                  />
                  <h3>受講料支払</h3>
                  <p>
                    予約が承認されると受講料のお支払いに関するご案内メールが届きます。<span
                      >受講料は事前払いです。</span
                    >
                  </p>
                </li>
                <li>
                  <img
                    src="../../common/img/price/ico_training.png"
                    alt="受講"
                    width="155"
                    height="152"
                    loading="lazy"
                  />
                  <h3>受講</h3>
                  <p>
                    この講座の受講期間は7日間です。7日間の受講期間内であれば都合の良い時間に受講することができます。
                  </p>
                </li>
                <li>
                  <img
                    src="../../common/img/price/ico_comp.png"
                    alt="修了"
                    width="135"
                    height="148"
                    loading="lazy"
                  />
                  <h3>修了</h3>
                  <p>
                    すべての講座を受講完了した受講者には、記録簿および修了証明書を発行いたします。
                  </p>
                </li>
              </ol>
            </div>
            
	  <div id="application">
		  <p class="info">受講期間は7日間のうち、ご都合が良いときに受講ください。<br>
定員がございますので、お早めにお申し込みください。また、受付締め切りは、お申込みの2日前までとなっております。<br>
WEBからのご予約は下記受講開始日の<span>席数ボタン</span>からご予約いただけます。</p>
		  <div id="calendar">
		  <table>
			  <thead>
			  <tr>
				  <th>受講開始日～終了日</th>
				  <th></th>
				  <th>三重会場</th>
				  </tr></thead>
			  <tbody>
          <?php foreach($data as $val) :?>
            <?php if($val['display'] == 0):?>
            <tr>
              <td><?php echo $val['start_date'] ?><span>(<?php echo $val['start_week'] ?>)</span>～<?php echo $val['end_date']?><span>(<?php echo $val['end_week'] ?>)</span></td>
              <td></td>
              <td><a href="/truck/reservation/?id=<?php echo $val['id'] ?>"><button class="member">残り<span><?php echo $val['left_seat'];?></span>席</button></a></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
			  </tbody>

        <tbody id="display" style="display: none;">
          <?php foreach($data as $val) :?>
            <?php if($val['display'] == 1):?>
            <tr>
              <td><?php echo $val['start_date'] ?><span>(<?php echo $val['start_week'] ?>)</span>～<?php echo $val['end_date']?><span>(<?php echo $val['end_week'] ?>)</span></td>
              <td></td>
              <td><a href="/truck/reservation/?id=<?php echo $val['id'] ?>"><button class="member">残り<span><?php echo $val['left_seat'];?></span>席</button></a></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
			  </tbody>
      
      </table>
			  <div class="moreLoad">
			  <p id="more">さらに表示する</p>
			  </div>
		  </div>
		  </div>
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
      </main>
      <!-- //main -->
      <!-- footer// -->
      <footer>
        <div class="inner">
          <div class="footLogo">
            <img
              src="../../common/img/shared/foot_logo.svg"
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
    <script src="../../common/js/common.js"></script>
    <script>
        $('#more').on('click', function() {
            $('#display').show();
            $("#more").hide();
        });
    </script>
    <?php @include($_SERVER['DOCUMENT_ROOT']."/truck/common/inc/js_after.inc")?>
  </body>
</html>
