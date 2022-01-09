<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Транслировать код php класса в код js класса </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
	<link rel="stylesheet" type="text/css" href="/s/css.css?1">
	<script type="text/javascript" src="/j/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="/j/tsiteapp.js"></script>
	
	<link rel="stylesheet" href="/s/0.css" type="text/css"/>
	<script src="/j/php2jstranslator/lib.js" type="text/javascript"></script>
	<script src="/j/php2jstranslator/php2js.js" type="text/javascript"></script>
	<script src="/j/php2jstranslator/stringprocessor.js" type="text/javascript"></script>
	<script src="/j/php2jstranslator/classparser.js" type="text/javascript"></script>
	<script src="/j/php2jstranslator/test/teststringprocessor.js" type="text/javascript"></script>
	<script src="/j/php2jstranslator/test/testclassparser.js" type="text/javascript"></script>
	<script src="/j/landlib/net/rest.es5.js" type="text/javascript"></script>
	<script src="/j/0.js" type="text/javascript"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7827647386416612"    crossorigin="anonymous"></script>
</head>
<body>
	<header class="mainhead">
		<div class="mainhead-content">
			<div class="logotext left">
				<div>PHP2JS</div>
				<div class="textsmall">translator</div>
			</div>
			<nav class="left topmenulinks">
				<a href="./../index.html">Зачем это</a>
				<a href="./../index.html#as_include">Как подключить</a>
				<a href="./../index.html#quick_start">Краткая справка</a>
				<a href="#">Транслировать php -> js сейчас</a>
				<a href="https://raw.githubusercontent.com/lamzin-andrey/php2jstranslator/functions/php.js" target="_blank">Скачать php.js</a>
			</nav>
			<div class="beta right">
				<div>BETA</div>
				<div class="langlink"><a href="/en">EN</a></div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="content translator-content">
		<!--div style="border:1px solid red;max-width:800px;margin:0 auto;">
			<p><a href="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/compile_android_online_apache_cordova/" style="margin-left:14px; font-weight:bold;color:green; text-decoration:none;"><span style="line-height:25px;vertical-align:middle;display:inline-block;margin-right:8px;">
				<img src="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/img/acord/h5.png" style="height:46px;"> <img src="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/img/acord/js.png"></span>
				 Компиляция Apache Cordova приложений для Android онлайн						</a></p>
		</div-->
		
		
		<?php 
			include $_SERVER['DOCUMENT_ROOT'] . '/q/q/ip/SxGeo22_API/cgeoip.php';
			CGeoIp::getInfo($city, $country);
			$country = strtoupper($country);
		 ?>
		
		<?php if ('RU' === $country): ?>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/p/units/osago/tpl/o/banner.php'; ?>
		<?php else :?>
		
			<div style="border:1px solid red;max-width:800px;margin:0 auto;">
				<p><a href="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/extensions_for_php_7.3.12_linux/" style="margin-left:14px; font-weight:bold;color:green; text-decoration:none;"><span style="line-height:25px;vertical-align:middle;display:inline-block;margin-right:8px;">
					<img src="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/img/xampp.png" style="height:46px;"></span>
					 imagick.so, xdebug.so, memcached.so for linux PHP-7.3.12 amd64 (64 bits) </a></p>
			</div>
		<?php endif?>
		<h1 id="why">Транслировать php to js</h1>
		<div class="left">
			<p>Вставьте в поле код одного php класса</p>
		</div>
		<div class="right">
			<p><a href="./../translate_php_function/to_js_function.html">Транслировать код php функции в javascript код</a></p>
		</div>
		<div id="work">
			<textarea id="in"></textarea>
			<textarea id="out"></textarea>
		</div>
		<div>
			<p>
				Не забудьте подключить на вашу страницу файл <a target="_blank" href="https://raw.githubusercontent.com/lamzin-andrey/php2jstranslator/functions/php.js">php.js</a>
			</p>
		</div>
		
		
		<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="//yastatic.net/share2/share.js"></script>
		
		
	</div>
	
	<footer>
		<div class="footer-wrapper">
			<div class="copyright-block left">
				&copy; <a href="https://moikrug.ru/lamzin-155855" target="_blank">Андрей Ламзин</a>, 2016 <script>
					document.write('l');
					document.write('a');
					document.write('m');
					document.write('z');
					document.write('i');
					document.write('n');
					document.write((8*10));
					document.write('@');
					document.write('m');
					document.write('a');
					document.write('i');
					document.write('l');
					document.write('.');
					document.write('r');
					document.write('u');
				</script>
			</div>
			<div class="left" style="margin-left:200px;">
				<div class="ya-share2" data-services="vkontakte,facebook,gplus,twitter,blogger,whatsapp"></div>
			</div>
			<div class="right">
				<a href="https://github.com/lamzin-andrey/php2jstranslator/tree/functions" target="_blank">Скачать с github</a>
				<div style="float: left;margin-right: 10px;">
			<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t50.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->

</div>
			</div>
			<div class="clear"></div>
		</div>
</footer> 
	
</body>

</html>
