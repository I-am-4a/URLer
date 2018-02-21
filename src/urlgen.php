<?php
	session_start();
	if(!isset($_POST["longUrl"])) header("Location: ./index.php");
	
	if(isset($_SESSION["key"]) && isset($_POST["key"]) && $_SESSION["key"] == $_POST["key"]) {
		
		require "./bin/fcc.php";
		
		function postFromHTTP($url, $data) {
			$options = array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_AUTOREFERER => true,
			);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_VERBOSE, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt_array($ch, $options);
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
		}
		$json = json_decode(postFromHTTP("http://urler.cf/bin/urlgen.php", json_encode(array("url" => $_POST["longUrl"]))), true);
	} else {
		$json["success"] = false;
		$json["msg"] = "リロードが確認されました。";
	}
	
	unset($_SESSION['key']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>URLer.cf</title>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.scrollshow.js"></script>
<script type="text/javascript" src="js/jquery.rollover.js"></script>
<script type="text/javascript" src="js/jquery.slideshow.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script>
$(function($){
	$('html').smoothscroll({easing : 'swing', speed : 1000, margintop : 10});
	$('.totop').scrollshow({position : 500});
	$('.slide').slideshow({
		touch		: true,
		touchDistance : '80',
		bgImage	  : false,
		autoSlide	: true,
		effect	   : 'slide',
		repeat	   : true,
		easing	   : 'swing',
		interval	 : 3000,
		duration	 : 500,
		imgHoverStop : true,
		navHoverStop : true,
		navImg	   : false,
		navImgCustom : false,
		navImgSuffix : ''
	});
	$('.slidePrev img').rollover();
	$('.slideNext img').rollover();
	});
</script>
<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>
<div id="contents">
	<div id="sub">
		<header>
			<h1><a href="index.php">URLer.cf</a></h1>
			<p class="summary">
			ログイン不要&amp;APIで使えるURL短縮サイト！
			</p>
		</header>
		<nav>
			<h3>メニュー<span id="navBtn"><span id="navBtnIcon"></span></span></h3>
			<ul>
				<li><a href="index.php"><i class="fas fa-home"></i> ホーム</a></li>
				<li><a href="api.php"><i class="fas fa-wrench"></i> API</a></li>
				<li><a href="http://www.iam4a.ml/" target="_blank"><i class="fas fa-newspaper"></i> ブログ <i class="fas fa-sign-out-alt"></i></a></li>
				<li><a href="contact.php"><i class="fas fa-bell"></i> お問い合わせ</a></li>
				<li><a href="view.php"><i class="fas fa-eye"></i> URL一覧</a></li>
				<li><a class="ignorecss" style="color: white !important"><i class="fas fa-sort-amount-up"></i> アクセスカウンター</a><script src="http://cc2.i2i.jp/bin/count?00124415&all"></script></li>
			</ul>
		</nav>
	</div><!-- /#sub -->
	<div id="main">
		<div class="slide">
			<ul class="slideInner">
				<li><a href="index.php"><img src="logo.png" alt=""></a></li>
				<li><a href="index.php"><img src="images/img1.JPG" alt=""></a></li>
				<li><a href="index.php"><img src="images/img2.JPG" alt=""></a></li>
				<li><a href="index.php"><img src="images/img3.JPG" alt=""></a></li>
			</ul>
			<!--<div class="slidePrev"><img src="images/nav_prev.png" alt="前へ"></div>
			<div class="slideNext"><img src="images/nav_next.png" alt="次へ"></div>-->
			<div class="controlNav"></div>
		</div><!-- /.slide -->
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=$json["data"]["shortUrl"]?>" data-text="URLerで短縮しました！" data-via="I_am_4a" data-size="100" data-related="I_am_4a" data-count="horizontal" data-hashtags="URLer">Tweet</a> 
		<div class="line-it-button" data-lang="ja" data-type="share-a" data-url="<?=$json["data"]["shortUrl"]?>" style="display: none;"></div>
 <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
 <div id="fb-root"></div>
 <div class="fb-like" data-layout="box_count" ></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<?php require "./bin/isMessage.php"; ?>
		<?if($isAttention):?>
		<div class="notice-important">
			<span class="box-title"><i class="fas fa-exclamation-triangle"></i> Attention!</span>
			<p>
				<?php require "./bin/n_important.php";?>
			</p>
		</div>
		<?endif;?>
		<?if($isInformation):?>
		<div class="notice-information">
			<span class="box-title"><i class="fas fa-info-circle"></i> Information</span>
			<p>
				<?php require "./bin/n_information.php";?>
			</p>
		</div>
		<?endif;?>
		<h2>URL短縮</h2>
		<p>
			<?php if($json["success"]):?>
			元のURL: <a href="<?=$json["data"]["longUrl"]?>" target="_blank"> <?=$json["data"]["longUrl"]?></a><br>
			短縮URL: <a href="<?=$json["data"]["shortUrl"]?>" target="_blank"> <?=$json["data"]["shortUrl"]?></a><br>
			<? endif; ?>
			<?php if(!$json["success"]): ?>
			<span style="color: red;">Error: 作成に失敗しました。<br>
			エラーメッセージ: <code><?=$json["msg"]?></code></span>
			<? endif; ?>
		</p>
		<h2>更新情報</h2>
		<dl class="info">
			<?php require "./bin/info.php"; ?>
		</dl>
		<!--<div class="service">
			<h3>サービス</h3>
			<ul>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
				<li><img src="images/photo.png" alt=""></li>
			</ul>
			<p class="textR"><a href="index.html">&raquo;もっと見る</a></p>
		</div><!-- /.service -->
		<div class="staff">
			<h3>スタッフ</h3>
			<ul>
				<li>
				<img src="https://crafatar.com/renders/head/98d7e45db09a4f26ae374dad1cd6ad53?overlay" alt="">
				<h4>I_am_4a</h4>
				<p>
					サイト管理人。<br>
					Discordのためにこのサイトを作るという謎の目的の元、いろんな人と一緒に作成してます。<br>
					<br>
					<a href="http://www.iam4a.ml/" target="_blank"><i class="fas fa-newspaper"></i> ブログ <i class="fas fa-sign-out-alt"></i></a><br>
					<a href="https://twitter.com/I_am_4a" target="_blank"><i class="fab fa-twitter"></i> @I_am_4a <i class="fas fa-sign-out-alt"></i></a>
				</p>
				</li>
				<li>
				<img src="https://crafatar.com/renders/head/1deecfc0b6d34d1d81499e888e8cb391?overlay" alt="">
				<h4>BlackWing_kk</h4>
				<p>
					頼れる友人。<br>
					いろんなサイトの運営のお手伝いをしてくれる。<br>
					(中の人は2人いるんだとか)<br>
					<br>
					<a href="https://twitter.com/xX_Kaitchi_Xx" target="_blank"><i class="fab fa-twitter"></i> @xX_Kaitchi_Xx <i class="fas fa-sign-out-alt"></i></a><br>
					<a href="https://twitter.com/xX_K_Free_Xx" target="_blank"><i class="fab fa-twitter"></i> @ xX_K_Free_Xx <i class="fas fa-sign-out-alt"></i></a>
				</p>
				</li>
				<li>
				<img src="https://crafatar.com/renders/head/606e2ff0ed7748429d6ce1d3321c7838?overlay" alt="">
				<h4>???</h4>
				<p>
					情報非公開の友人。<br>
					陰で支えてくれてるとかなんとか…<br>
				</p>
				</li>
			</ul>
		</div><!-- /.staff -->
	</div><!-- /#main -->
</div><!-- /#contents -->

<footer>
	<div class="footmenu">
		<ul>
			<li><a href="index.php"><i class="fas fa-home"></i> ホーム</a></li>
			<li><a href="api.php"><i class="fas fa-wrench"></i> API</a></li>
			<li><a href="http://www.iam4a.ml/" target="_blank"><i class="fas fa-newspaper"></i> ブログ <i class="fas fa-sign-out-alt"></i></a></li>
			<li><a href="contact.php"><i class="fas fa-bell"></i> お問い合わせ</a></li>
			<li><a href="view.php"><i class="fas fa-eye"></i> URL一覧</a></li>
		</ul>
	</div><!-- /.footmenu -->
	<div class="copyright">Copyright &#169; I_am_4a All Rights Reserved.</div><!-- /.copyright -->
</footer>

<div class="totop"><a href="#"><img src="images/totop.png" alt="ページのトップへ戻る"></a></div><!-- /.totop -->
</body>
</html>