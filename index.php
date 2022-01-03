<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Транслятор php кода в js код. Как перевести код яваскрипт в php</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="yandex-verification" content="89fb13f7f059ad71" />
	<meta name="keywords" content="Конвертировать php в js,Транспоилер php в javascript,Как перевести php код в javascript код,php to js translator,php to javascript converter,php to javascript transpoiler,php to javascript traslator,php to js">
	<link rel="stylesheet" type="text/css" href="/s/css.css?1">
	<script type="text/javascript" src="/j/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="/j/tsiteapp.js"></script>
</head>
<body>
	
	<header class="mainhead">
		<div class="mainhead-content">
			<div class="logotext left">
				<div>PHP2JS</div>
				<div class="textsmall">translator</div>
			</div>
			<nav class="left topmenulinks">
				<a href="#why">Зачем это</a>
				<a href="#as_include">Как подключить</a>
				<a href="#quick_start">Краткая справка</a>
				<a href="./php2js/class.html">Транслировать php -> js сейчас</a>
				<a href="https://raw.githubusercontent.com/lamzin-andrey/php2jstranslator/functions/php.js" target="_blank">Скачать php.js</a>
			</nav>
			<div class="beta right">
				<div>BETA</div>
				<div class="langlink"><a href="/en">EN</a></div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="content">
	<!-- miner gui div class="coinhive-miner" 
		style="width: 256px; height: 310px"
		data-key="XgRFxrhvv0RuVQyqGemb9YcZA2fVOYIC">
		<em>Loading...</em>
	</div-->	
		
		<!--div style="border:1px solid red;max-width:800px;margin:0 auto;">
			<p><a href="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/compile_android_online_apache_cordova/" style="margin-left:14px; font-weight:bold;color:green; text-decoration:none;"><span style="line-height:25px;vertical-align:middle;display:inline-block;margin-right:8px;">
				<img src="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/img/acord/h5.png" style="height:46px;"> <img src="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/img/acord/js.png"></span>
				 Компиляция Apache Cordova приложений для Android онлайн						</a></p>
		</div-->
		
		
		<?php 
			include __DIR__ . '/q/q/ip/SxGeo22_API/cgeoip.php';
			CGeoIp::getInfo($city, $country);
			$country = strtoupper($country);
		 ?>
		
		<?php if ('RU' === $country): ?>
			<?php include __DIR__ . '/p/units/osago/tpl/o/banner.php'; ?>
		<?php else :?>
		<div style="border:1px solid red;max-width:800px;margin:0 auto;">
			<p><a href="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/extensions_for_php_7.3.12_linux/" style="margin-left:14px; font-weight:bold;color:green; text-decoration:none;"><span style="line-height:25px;vertical-align:middle;display:inline-block;margin-right:8px;">
				<img src="https://andryuxa.ru/portfolio/web-razrabotka/saity/fastxampp/img/xampp.png" style="height:46px;"></span>
				 imagick.so, xdebug.so, memcached.so for linux PHP-7.3.12 amd64 (64 bits) </a></p>
		</div>
		<?php endif ?>
		
		
		<h1 id="why">Зачем это</h1>
		<p>
			Чтобы транслировать код php класса в код js класса. Если ваше приложение работает с небольшим списком (я считаю такими списками содержащие менее чем 1000 элементов) вы можете получить
			их на страницу в json формате и все сортировки, фильтрации по тем или иным параметрам выполнять на клиенте, изменяя url в адресной строке браузера посредством historyApi.
		</p>
		<p>
			Зачем? Чтобы не беспокоить ваш сервер излишними запросами.
		</p>
		<p>
			Но при этом вы наверняка захотите, чтобы пользователи вашего веб-приложения могли делиться ссылками на отсортированный и отфильтрованный результат.
			Если вы реализуете сортировку и фильтрацию средствами php
			(оставив на совести сервера баз данных только выборку неупорядоченных элементов)
			вы можете транслировать эти алгоритмы сортировки 
			и фильтрации в js код и использовать его на клиенте.
		</p>
		<p>
		Реализация на php будет работать на сервере при переходе по ссылке на отсортированный и отфильтрованный результат.
		</p>
		<h1 id="as_include">Как подключить</h1>
			<p>
				Помимо транслированного в js код php кода вам понадобится файл php.js из архива.
				Файл содержит код аналога некоторых стандартных функций php.
				Недостающие напишите сами - я считаю что для программиста это не проблема.
				Исключение составляют может быть preg_* функции.
				О стандартных функциях php, работающих с системными процессами, файловой системой, удаленными базами данных  и прочим
				 недоступным на js 
				в принципе речь по понятным причинам не идет. Хотя... всему свое время. 
			<p>
				Если вы используете node.js или другие интерпретаторы js для работы не в браузере 
				вы вполне можете создать свою реализацию и этих функций обеспечив работу транислированного кода.
				Я использую в таких случаях решение основанное на Qt WebView (это по сути веб-браузер, 
				но умеющий работать с локальной файловой системой и кое-что ещё), но поделиться им время еще не пришло.
			</p>
		</p>
		<h1 id="quick_start">Краткая справка</h1>
		<p>Вы можете транслировать код класса php или код php функции.</p>
		<p>На зеленом фоне плюшки, на красном - баги и недоработки.</p>
		<h2>Конструкции классов php</h2>
		<div class="good">
			<p>Меняет в коде '<b>extends</b> ParentClass' на вызов 'extend(ParentClass, YourClass)'. Функция extend определена в php.js</p>
			<p>Меняет '<b>static function </b>foo' на 'YourClass.foo = <b>function</b>'</p>
			<p>Меняет '<b>private/public/protected function foo</b>' на '<b>YourClass.prototype.foo = function ...</b>'</p>
			<p>Меняет '<b>parent</b>::foo(arg1, arg2, arg3)' на 'YourClass.superclass.__constructor.call(this, $a, $b, $c);' </p>
			<p>Меняет 'self' на 'YourClass' </p>
		</div>
		<div class="bad">
			<p>Пока не обрабатывает <b>use</b></p>
			<p>Вы можете транслировать за один раз код только одного php класса</p>
			<p>Пока не обрабатывает магические методы такие как '__get, __set' 
			вы можете перенести ваш алгоритм сами, используя defineProperty</p>
			<p>Пока нет поддержки трансляции комбинированных массивов, таких как <b>array</b>(1,2'foo' => 'bar'), старайтесь использовать в своем коде отдельно  <b>array</b>('foo' => 'bar', 'one' => 'two', ['co' => 'kigo']), и <b>array</b>('s','k','d')</p>
			<p>Лучше избегать использования конструкции <b>array</b> вообще, используйте []</p>
		</div>
		<h2>Конструкции php</h2>
		<div class="good">
			<p>Собирает все переменные php  и выносит их в начало функции, предваряя ключевым словом <b>var</b></p>
			<p>Меняет в коде '->', '::' на '.';</p>
			<p>Извлекает из строки переменные, например "Hello, $name {$user['surname']}!" меняется на "Hello " + $name + $user['surname'] + "!";</p>
			<p>Меняет в коде соединения строк с '.' на '+'.</p>
			<p>Меняет переносы в одной строковой переменной на соединение нескольких строковых переменных.</p>
			<p>Меняет в коде определения ассоциативного массива, такие как "['key' => 'value']" на "{'key':'value'}". Не очень хорошо поддерживает 'array()' construction. Все массивы лучше определять с помощью конструкции '[]'. </p>
			<p>Вы можете использовать '$arr = [];//{}' если знаете, что $arr будет ассоциативным массивом. Тогда на выходе вы получите '$arr = {push:__php2js_push__};'. Функция __php2js_push__ определена  в php.js</p>
			<p>Меняет в коде код '$arr[] = $val;' на '$arr.push($val);'</p>
			<p>Меняет в коде 'foreach ($array as $key => $item) {' на 'for ($key in $array) { $item = $array[$key];'.</p>
			<p>Меняет в коде 'foreach ($array as $item) {' на 'for (i100500 in $array) { $item = $array[i100500];'.</p>
			<div class="spoiler-block">
			<p>Если аргумент типа массив не передается функции в оригинальном php коде по ссылке, в транслированном js коде добавляется конструкция '$b = __php2js_clone_argument__($b);' 
					<a href="#" class="spoilerlink">Зачем?</a>
					<div class="slpoiler-content hide spoiler-decoration">
						<p>В javascript все массивы  однозначно передаются по ссылке. То есть они ведут себя так, как если бы в php вы все функции, принимающие аргументом массив определяли '<b>function</b> foo(array &$arr){...}'</p>
						<p>(В скобках замечу, что и в php5  и в javascript аргументы типа <b>object</b> или <b>StdClass</b> всегда ведут себя точно так же: если вы измените поле класса внутри функции, оно изменится и во внешнем коде, вызвавшем функцию и передавшему ей этот аргумент.)</p>
					</div>
			</p>
			</div>
			<p>Если аргумент функции содержит значение по умолчанию в оригинальном php коде, в транслированном js коде добавляется конструкция '$b = String($b) == "undefined" ? 10 : $b;' </p>
			<p>Файл php.js содержит несколько аналогов стандартных php функций и будет пополняться новыми.</p>
		</div>
		<div class="bad">
			<p>Функции php, принимающие аргументы по ссылке  и имеющие аргументы по умолчанию корректно транслируются только при трансляции кода всего класса php (а не одной функции)</p>
			<p>Функции php, принимающие аргументы типа, отличного от <b>array</b>  и <b>object (StdClass)</b>по ссылке, 
			работают некорректно. Если вы любите писать '<b>function</b> foo(&$a = 1, &$b = 'bar', &$c = 10.2, &$d)'
			ваш код не будет корректно транслирован. 
			Вы можете вручную заменить передачу таких аргументов на передачу объектов {val:null}  и 
			в коде функций присваивать значения свойству объекта val. Вы вызвавшем коде также придется использовать значение .val объекта.</p>
		</div>
		<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="//yastatic.net/share2/share.js"></script>
		
	</div>
	
	<footer>
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
		
</footer> 
	
</body>

</html>
