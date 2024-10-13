<?php
if(empty($_POST)){
	header('Location: http://www.moographic.jp/');
}

session_start();

?>

<!doctype html>
<html>
<head>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/google_analytics-tag.php'); ?>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>完了画面｜Contact｜ムーグラフィック[moographic]-イラストレーション/ウェブデザイン</title>
<meta name="description" content="ムーグラフィック[moographic]のお問い合わせフォームページです。お見積もり、ご相談などお気軽にどうぞ。">
<link rel="icon" href="/img/favicon.ico">	
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/top.js"></script>		
</head>

<body class="fadeout">
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/google_tag-manager.php'); ?>	
<div class="wrapper">
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
	
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$uname = htmlspecialchars($_SESSION["uname"],ENT_QUOTES,"UTF-8");
$email = htmlspecialchars($_SESSION["email"],ENT_QUOTES,"UTF-8");
$pref = htmlspecialchars($_SESSION["pref"],ENT_QUOTES,"UTF-8");
$company = htmlspecialchars($_SESSION["company"],ENT_QUOTES,"UTF-8");
$message = htmlspecialchars($_SESSION["message"],ENT_QUOTES,"UTF-8");

//フォーム送信者宛て自動返信メール本文の組み立て
$reply_title = "お問い合わせありがとうございました。";
$reply_email = "From:".mb_encode_mimeheader("moographic[ムーグラフィック]","JIS","UTF-8") ."<info@moographic.jp>";
$reply_body = <<<EOM
$uname 様
この度は、お問い合わせ頂きまして、誠にありがとうございました。
下記の内容で承りましたので、ご確認ください。

------------------------------------
お名前:{$uname}
メールアドレス:{$email}
貴社名:{$company}
メッセージ:{$message}
------------------------------------

お問い合わせ頂きましてから、３営業日以内にこちらから改めて返信させて頂きますので
今しばらくお待ちくださいませ。

それでは宜しくお願い申し上げます。

-------------------------------------------------------
moographic[ムーグラフィック]
イラストレーター / ウェブデザイナー
e-mail   : info@moographic.jp
url        : http://www.moographic.jp/

イラストレーターズ通信会員
http://www.illustrators.jp/
-------------------------------------------------------
EOM;

//管理者宛てメール本文の組み立て
$to = "info@moographic.jp";
$title = "【ムーグラフィックお問い合わせフォームより】";
$ext_header = "From:{$email}";
$body = <<<EOM

ムーグラフィックのウェブサイトからお問い合わせがありました！
内容は以下の通りです。

------------------------------------
【お客様からのメール】
お名前:{$uname}
メールアドレス:{$email}
都道府県:{$pref}
メッセージ:{$message}
------------------------------------
EOM;

mb_send_mail($email,$reply_title,$reply_body,$reply_email);
$rc = mb_send_mail($to,$title,$body,$ext_header);
if(!$rc){
	exit;
}else{
	$_SESSION = NULL;
}

?>
	
<section id="gallery" class="content">
	<div class="breadcrumb">
		<ul class="breadcrumb_list">
			<li class="breadcrumb_list-item"><a href="/">Home</a></li>
			<li class="breadcrumb_list-item">Contact</li>
		</ul>
	</div><!--/.breadcrumb-->
	
	<h2 class="content-title">Contact</h2>
	
	<div class="contact-container">
		<p class="contact-txt">お問い合わせを承りました。誠にありがとうございました。</p>
		<p class="contact-txt">3営業日以内に、こちらからご連絡差し上げますので、今しばらくお待ちくださいますようよろしくお願い申し上げます。</p>
<p class="contact-txt">なお3営業日以降、返信・返答がない場合は、お客様によりご入力いただいたメールアドレスに誤りがある場合がございます。<br>その場合は、大変お手数ですが再度お問い合わせフォームより送信いただくか、<script type="text/javascript">
			<!--
			function converter(M){
			var str="", str_as="";
			for(var i=0;i<M.length;i++){
			str_as = M.charCodeAt(i);
			str += String.fromCharCode(str_as + 1);
			}
			return str;
			}
			var ad = converter(String.fromCharCode(106,116,113,110,106,104,63,108,110,110)+String.fromCharCode(102,113,96,111,103,104,98,45,105,111));
			document.write("<a href=\"mai"+"lto:"+ad+"\">"+ad+"<\/a>");
			//-->
			</script>
			<noscript><img src="../img/contact/mailaddress.gif" alt="" /></noscript>までご連絡ください。</p>

	</div><!--/.contact-container-->	
	
</section>		

	
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
</div><!--/.wrapper-->	
</body>
</html>