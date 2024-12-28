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
<title>確認画面｜Contact｜ムーグラフィック[moographic]-イラストレーション/ウェブデザイン</title>
<meta name="description" content="ムーグラフィック[moographic]のお問い合わせフォームページです。お見積もり、ご相談などお気軽にどうぞ。">
<link rel="icon" href="/img/favicon.ico">	
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="canonical" href="https://www.moographic.jp">
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/top.js"></script>		
</head>

<body class="fadeout">
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/google_tag-manager.php'); ?>	
<div class="wrapper">
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

<section id="gallery" class="content">
	<div class="breadcrumb">
		<ul class="breadcrumb_list">
			<li class="breadcrumb_list-item"><a href="/">Home</a></li>
			<li class="breadcrumb_list-item">Contact</li>
		</ul>
	</div><!--/.breadcrumb-->
	
	<h2 class="content-title">Contact</h2>
	
	<div class="contact-container">
		<p class="contact-txt">入力内容をご確認の上、送信ボタンをクリックしてください。</p>
			
		<?php

	if(empty($_POST["uname"])){
		echo "お名前を入力してください。";
		exit;
	}

	if(empty($_POST["email"])){
		echo "メールアドレスを入力してください。";
		exit;
	}

	if(empty($_POST["message"])){
		echo "メッセージを入力してください。";
		exit;
	}

	$uname = htmlspecialchars($_POST["uname"],ENT_QUOTES,"UTF-8");
	$email = htmlspecialchars($_POST["email"],ENT_QUOTES,"UTF-8");
	$pref = htmlspecialchars($_POST["pref"],ENT_QUOTES,"UTF-8");
	$company = htmlspecialchars($_POST["company"],ENT_QUOTES,"UTF-8");
	$message = htmlspecialchars($_POST["message"],ENT_QUOTES,"UTF-8");

	$_SESSION["uname"] = $uname;
	$_SESSION["email"] = $email;
	$_SESSION["pref"] = $pref;
	$_SESSION["company"] = $company;
	$_SESSION["message"] = $message;

	?>

	<form method="post" action="submit.php" class="contact_form">
		<ul id="check_list" class="contact_list">
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading">お名前</dt>
					<dd class="contact_list-field check">
						<?php echo $uname; ?>
					</dd>
				</dl>
			</li>
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading">メールアドレス</dt>
					<dd class="contact_list-field check">
						<?php echo $email; ?>
					</dd>
				</dl>
			</li>
			
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading">貴社名</dt>
					<dd class="contact_list-field check">
						<?php echo $company; ?>
					</dd>
				</dl>
			</li>
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading">内容</dt>
					<dd class="contact_list-field check">
						<?php echo nl2br($message); ?>
					</dd>
				</dl>
			</li>
			
		</ul><!--/#check_list-->
		
		<div id="submit_button_last">
			<input type="button" name="return" value="戻る" id="return" onclick="history.back()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub1" value="送信する" id="submit_last" >
		</div><!--/#submit_button_last-->
		
	</form>
	</div><!--/.contact-container-->	
	
</section>		
	
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
</div><!--/.wrapper-->	

</body>
</html>