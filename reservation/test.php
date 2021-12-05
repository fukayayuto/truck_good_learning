<?php
die('uu');
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = 'yuto.fukaya@cab-station.com';
  $title = 'title';
  $message = 'messeage';
  $headers = "From: from@example.com";

  if(mb_send_mail($to, $title, $message, $headers))
  {
    echo "メール送信成功です";
  }
  else
  {
    echo "メール送信失敗です";
  }
 ?>