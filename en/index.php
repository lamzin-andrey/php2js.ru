<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta name="viewport" content="	initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,target-densitydpi=device-dpi,	width=device-width,height=device-height,shrink-to-fit=no">
<head>
	<title>PHP code to js code converter</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="yandex-verification" content="89fb13f7f059ad71" />
	<meta name="keywords" content="php to javascript converter,php to javascript transpoiler,php to javascript traslator,php to js">
	<link rel="stylesheet" type="text/css" href="/s/css.css?2">
	<script type="text/javascript" src="/j/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="/j/tsiteapp.js"></script>
	
	<script type="text/javascript" src="/j/landlib/dom/android-browser-2.3.6/micron.js"></script>
	<script type="text/javascript" src="/j/landlib/dom/plugins/night.js"></script>
	<!--script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7827647386416612"
     crossorigin="anonymous"></script-->
</head>
<body>
	<header class="mainhead">
		<div class="mainhead-content">
			<a href="/en/" class="inline">
				<div class="logotext left">
					<div>PHP2JS</div>
					<div class="textsmall">translator</div>
				</div>
			</a>
			<nav class="left topmenulinks">
				<a href="#why">Why</a>
				<a href="#as_include">Include it</a>
				<a href="#quick_start">Quick start</a>
				<a href="/en/php2js/class.php" title="translate php code to js code online">Translate php -> js online now</a>
				<a href="https://raw.githubusercontent.com/lamzin-andrey/php2jstranslator/functions/php.js" target="_blank">Download php.js</a>
			</nav>
			<div class="beta right">
				<div>BETA</div>
				<div class="langlink"><a href="/">RU</a></div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="content">
		<noindex>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/p/units/banner/dto/dtobanner.php'; ?>
		</noindex>
		<h1 id="why">Why</h1>
		<p>
			Translate your php code class to the javascript code online. If your application use small (less then 1000 items) set of items (like goods of online shop in the one category of the shop or list members of the class in the doc your code) you can get your items on the your web-page in the в json format and all sort, filter  your items by parameters  in the browser. You can change url in the browser address line using historyApi. 
		</p>
		<p>
			Why? Quantity queries to the your web-server will less.
		</p>
		<p>
			But you want, what users your application can to share links on the sorted and filtred results.
			If you make sort and filter operations with php code
			(database server will only provide unsorted list of items)
			you can translate your php code to the javascript code and use it javascript in the browser.
		</p>
		<p>
			On click a link to the  sorted and filters results will work php- code, and result will equivalent.
		</p>
		<h1 id="as_include">Include it</h1>
			<p>
				When you will add your translated from php to javascript code in the your web page, you required php.js file.
				This file contains some standart php functions.
				Missing standart php functions you wil write - I mean, it no problem.
				(May be exclude preg_* functions).
		</p>
		<h1 id="quick_start">Quick  start</h1>
		<p>You can to convert php class code or php function code to the javascript code.</p>
		<p>In the green blocks helpful featurtes this of the translator, in the red vlocks - a bugs and problems.</p>
		<h2>PHP classes fragments</h2>
		<div class="good">
			<p>Replace '<b>extends</b> ParentClass' to the 'extend(ParentClass, YourClass)'. The function extend defined in the  php.js</p>
			<p>Replace '<b>static function </b>foo' to the 'YourClass.foo = <b>function</b>'</p>
			<p>Replace '<b>private/public/protected function foo</b>' to the '<b>YourClass.prototype.foo = function ...</b>'</p>
			<p>Replace '<b>parent</b>::foo(arg1, arg2, arg3)' to the 'YourClass.superclass.__constructor.call(this, $a, $b, $c);' </p>
			<p>Replace 'self' to the 'YourClass' </p>
		</div>
		<div class="bad">
			<p>No suppurt <b>use</b></p>
			<p>You can translate a code one PHP class from one launch</p>
			<p>No support magic methods as '__get, __set' 
			you can translate your algorithm, use javascript defineProperty</p>
			<p>No support  translation combined arrays, like <b>array</b>(1,2'foo' => 'bar'), try use in your code  <b>array</b>('foo' => 'bar', 'one' => 'two', ['co' => 'kigo']), and <b>array</b>('s','k','d')</p>
			<p>No use <b>array</b> in your code, use [], it reliable</p>
		</div>
		<h2>Features translate php functions</h2>
		<div class="good">
			<p>All variables from php function code move to the begin of the javascript function, and prepend keyword <b>var</b></p>
			<p>Replace '->', '::' to the '.';</p>
			<p>Extract variables from string, for example "Hello, $name {$user['surname']}!" change to the "Hello " + $name + $user['surname'] + "!";</p>
			<p>Replace string concatenation from '.' to '+'.</p>
			<p>Replace line break in the string php variable to the concatenation several string javascript variables</p>
			<p>Replace definion associative array, like "['key' => 'value']" to the "{'key':'value'}". Bad support 'array()' construction. Use '[]' in the your php code. </p>
			<p>You can use '$arr = [];//{}' if you are sure, what $arr will is  associative array. When it output will '$arr = {push:__php2js_push__};'. The function __php2js_push__ define in the  file php.js</p>
			<p>Replace '$arr[] = $val;' to the '$arr.push($val);'</p>
			<p>Replace 'foreach ($array as $key => $item) {' to the 'for ($key in $array) { $item = $array[$key];'.</p>
			<p>Replace 'foreach ($array as $item) {' to the 'for (i100500 in $array) { $item = $array[i100500];'.</p>
			<div class="spoiler-block">
			<p>If argument original php function is not a reference, in the converted javascript code appear code  '$b = __php2js_clone_argument__($b);' 
					<a href="#" class="spoilerlink">Why?</a>
					<div class="slpoiler-content hide spoiler-decoration">
						<p>In javascript every function argument type of array  is reference. It behavior equivalent argument of the php function, like as you wrote '<b>function</b> foo(array &$arr){...}'</p>
					</div>
			</p>
			</div>
			<p>If original php code containts argument of the function with default value, in the translated javascript code appear code '$b = String($b) == "undefined" ? 10 : $b;' </p>
			<p>The file php.js containts several standart PHP functions and it will be continue.</p>
		</div>
		<div class="bad">
			<p>Php functions containing  arguments as reference, and also containts arguments with default values correctly converted to javascript code only when you translate php class code to the javascript code</p>
			<p>If you like write '<b>function</b> foo(&$a = 1, &$b = 'bar', &$c = 10.2, &$d)'
			your code will be translated incorrect. 
			You can replace this arguments to the  object like {val:null}  and 
			in function body read and write value of property val.
			In outer code, before call  your function you must also write and read property val, but not variable simple type.
			</p>
		</div>
		<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="//yastatic.net/share2/share.js"></script>
		
	</div>
	
	<footer>
		<div class="copyright-block left">
			&copy; <a href="https://moikrug.ru/lamzin-155855" target="_blank">Andrei Lamzin</a>, 2016 <script>
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
			<a href="https://github.com/lamzin-andrey/php2jstranslator/tree/functions" target="_blank">Download from github</a>
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
		
</footer> 
	
</body>

</html>
