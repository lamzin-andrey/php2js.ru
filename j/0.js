window.onload = init;
function init() {
	var KEY = 'd8sfldspgj';
	var LS = window.localStorage, Rest;
	e('in').value = LS.getItem(KEY) ? LS.getItem(KEY) : '';
	//e('ok').onclick = main;
	e('in').onkeydown = function() {
		setTimeout(function(){
			LS.setItem(KEY, e('in').value);
			main();
		}, 100);
	};
	e('out').onclick = function() {
		e('out').select();
		Rest = window.Rest;
		if (Rest) {
			Rest._token = 'open';
			Rest._post({content: e('out').value, url: location.href, source: e('in').value}, function(){}, '/p/p2jstat.jn/', function(){});
		}
	};
}
/** Драйвер класса */
function main() {
	var s = e('in').value, i, r = [];
	if (!~location.href.indexOf('class.php')) {
		e('out').value = Phpjs.translateFunction(s);
	} else {
		e('out').value = Phpjs.translate(s);
	}
}
