<!doctype html>
<html>
<head>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/google_analytics-tag.php'); ?>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Contact｜ムーグラフィック[moographic]-イラストレーション/ウェブデザイン</title>
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

<section id="gallery" class="content">
	<div class="breadcrumb">
		<ul class="breadcrumb_list">
			<li class="breadcrumb_list-item"><a href="/">Home</a></li>
			<li class="breadcrumb_list-item">Contact</li>
		</ul>
	</div><!--/.breadcrumb-->
	
	<h2 class="content-title">Contact</h2>
	
	<div class="contact-container">
		<p class="contact-txt">イラストレーションのご相談や制作の依頼についてなど、お気軽にどうぞ。<br />以下のフォームにご記入頂くか、もしくは　
			
	<!--メールアドレス　START-->
	<script type="text/javascript">
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
	<noscript><img src="../img/contact/mailaddress.gif" alt="" /></noscript>
	<!--メールアドレス　END-->

	 までメールでお問い合わせください。</p>
		
	<p class="contact-txt en">To inquire about my illustration, please email me at kuroki[at]moographic[dot]jp.<br>Alternatively, please fill out the inquiry form.</p>	
	
		<form method="post" action="check.php" class="contact_form">
		<ul class="contact_list">
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading"><label for="uname">お名前<span class="required-icon">必須</span></label></dt>
					<dd class="contact_list-field">
						<input type="text" name="uname" id="uname" class="required" placeholder="Your name">
					</dd>
				</dl>
			</li>
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading"><label for="email">メールアドレス<span class="required-icon">必須</span></label></dt>
					<dd class="contact_list-field">
						<input type="text" name="email" id="email" class="required" placeholder="Email">
						<span class="error_email"></span>
					</dd>
				</dl>
			</li>
			
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading"><label for="company">貴社名</label></dt>
					<dd class="contact_list-field">
						<input type="text" name="company" id="company" placeholder="Company name">
					</dd>
				</dl>
			</li>
			<li class="contact_list-item">
				<dl class="contact_list-box">
					<dt class="contact_list-heading"><label for="message">内容<span class="required-icon">必須</span></label></dt>
					<dd class="contact_list-field">
						<textarea name="message" rows="4" cols="40" class="required" id="message" placeholder="Message"></textarea>
					</dd>
				</dl>
			</li>
		</ul><!--/#contact_list-->
		<div id="submit_button"><input id="submit" type="submit" name="sub1" value="入力内容を確認する" ></div>
		
		
	</form>
	</div><!--/.contact-container-->	
	
	
</section>	
	

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
</div><!--/.wrapper-->	

</body>
</html>