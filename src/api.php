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
<style type="text/css">
	<!--
	.box27 {
    position: relative;
    margin: 2em 0;
    padding: 0.5em 1em;
    border: solid 3px #62c1ce;
    background: #ccc;
}
.box27 .box-title {
    position: absolute;
    display: inline-block;
    top: -27px;
    left: -3px;
    padding: 0 9px;
    height: 25px;
    line-height: 25px;
    vertical-align: middle;
    font-size: 17px;
    background: #62c1ce;
    color: #ffffff;
    font-weight: bold;
    border-radius: 5px 5px 0 0;
}
.box27 p {
    margin: 0; 
    padding: 0;
}
	-->
</style>
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
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://urler.cf/api.php" data-text="URLer" data-via="I_am_4a" data-size="100" data-related="I_am_4a" data-count="horizontal" data-hashtags="URLer">Tweet</a> 
		<div class="line-it-button" data-lang="ja" data-type="share-a" data-url="http://urler.cf/" style="display: none;"></div>
 <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
 <div class="fb-like" data-layout="box_count" ></div>
 <div id="fb-root"></div>
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
		<h2>URLerのAPI</h2>
		<p>
			URLerでは、ログイン不要で使えるAPIを搭載しています。<br>
		</p>
		<h3>エンドポイント</h3>
		<p>
			アクセスに対応しているエンドポイントです。<br>
			<span style="color: red;"><i class="fas fa-exclamation-triangle"></i> 2018/02/19より、アクセス方法が"POST"になりました。<br>Content-Typeを「application/json」、リクエスト内容にJSONを追加してください。</span>
			<blockquote>
				<p><span style="color: orange">POST </span>http://urler.cf/bin/urlgen.php</p>
			</blockquote>
		</p>
		<h3>各種パラメータ</h3>
		<p>
			<table class="responsive">
			<thead>
				<tr>
					<th>項目</th>
					<th>説明</th>
					<th>値の型</th>
					<th>例</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>url<br><span style="color: red">※必須</span></td>
					<td>短縮するURLです。<br><del>URLエンコードされている必要があります。</del><br><ins>JSON形式に変更となったため、必要なくなりました。</ins></td>
					<td>string</td>
					<td>http://www.iam4a.ml/</td>
				</tr>
				<tr>
					<td>simple</td>
					<td>返り値をシンプルにするかを設定します。<br>デフォルトはfalseです。</td>
					<td>boolean</td>
					<td>false</td>
				</tr>
				</tbody>
			</table>
			<pre>
{
	"url": "http://www.iam4a.ml/",
	"simple": false
}
			</pre>
		</p>
		<h3>返り値の説明</h3>
		<p>
			通常版:<br>
			<pre>
{
	"success":true,
	"msg":"Success.",
	"data":{
		"longUrl":"http:\/\/www.iam4a.ml\/",
		"shortUrl":"http:\/\/urler.cf\/wt3w_6J",
		"id":"wt3w_6J",
		"title":"I_am_4a\u2019s Diary &#8211; \u201cMy life makes me happy.\u201d"
	},
	"reqTime":1518964574
}
			</pre><br>
			<table class="responsive">
			<thead>
				<tr>
					<th>項目</th>
					<th>説明</th>
					<th>値の型</th>
					<th>例</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>success<br></td>
					<td>リクエストが成功したかの項目です。</td>
					<td>boolean</td>
					<td>true</td>
				</tr>
				<tr>
					<td>msg</td>
					<td>処理の結果メッセージです。<br> successがfalseの時はエラーメッセージが出ます。</td>
					<td>string</td>
					<td>Success.</td>
				</tr>
				<tr>
					<td>data</td>
					<td>結果が入っています。<br>successがfalseの場合はnullです。</td>
					<td>object</td>
					<td>---</td>
				</tr>
				<tr>
					<td>data.longUrl</td>
					<td>インプットされたURLです。</td>
					<td>string</td>
					<td>http:\/\/www.iam4a.ml\/</td>
				</tr>
				<tr>
					<td>data.shortUrl</td>
					<td>短縮されたURLです。</td>
					<td>string</td>
					<td>http:\/\/urler.cf\/G-h2PlG</td>
				</tr>
				<tr>
					<td>data.id</td>
					<td>短縮URLのIDです。</td>
					<td>string</td>
					<td>G-h2PlG</td>
				</tr>
				<tr>
					<td>data.title</td>
					<td>移動先のページのタイトルです。<br>取得できなかった場合はnullになります。</td>
					<td>string</td>
					<td>I_am_4a\u2019s Diary &#8211; \u201cMy life makes me happy.\u201d</td>
				</tr>
				<tr>
					<td>reqTime</td>
					<td>リクエスト時のタイムスタンプです。</td>
					<td>timestamp(number)</td>
					<td>1518964574</td>
				</tr>
				</tbody>
			</table>
			シンプル版:<br>
			<pre>
{
	"success":true,
	"msg":"Success.",
	"longUrl":"http:\/\/www.iam4a.ml\/",
	"shortUrl":"http:\/\/urler.cf\/G-h2PlG",
	"reqTime":1518964792
}
			</pre>
			<table class="responsive">
			<thead>
				<tr>
					<th>項目</th>
					<th>説明</th>
					<th>値の型</th>
					<th>例</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>success<br></td>
					<td>リクエストが成功したかの項目です。</td>
					<td>boolean</td>
					<td>true</td>
				</tr>
				<tr>
					<td>msg</td>
					<td>処理の結果メッセージです。<br> successがfalseの時はエラーメッセージが出ます。</td>
					<td>string</td>
					<td>Success.</td>
				</tr>
				<tr>
					<td>longUrl</td>
					<td>インプットされたURLです。</td>
					<td>string</td>
					<td>http:\/\/www.iam4a.ml\/</td>
				</tr>
				<tr>
					<td>shortUrl</td>
					<td>短縮されたURLです。</td>
					<td>string</td>
					<td>http:\/\/urler.cf\/G-h2PlG</td>
				</tr>
				<tr>
					<td>reqTime</td>
					<td>リクエスト時のタイムスタンプです。</td>
					<td>timestamp(number)</td>
					<td>1518964792</td>
				</tr>
				</tbody>
			</table>
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