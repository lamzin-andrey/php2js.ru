(function(){
	$(init);
	function init() {
		setListeners();
	}
	function setListeners() {
		initspoilerlinks();
		initmenulinks();
	}
	
	function initmenulinks(){
		var links = $('.topmenulinks a');
		links.click(function(evt) {
			var t = $(evt.target);
			setTimeout(function(){
				window.scrollBy(0, -100);
			}, 10);
		});
		if (window.location.hash) {
			window.scrollBy(0, -100);
		}
	}
	
	function initspoilerlinks() {
		var cssLink = '.spoilerlink', cssContent = '.slpoiler-content', cssBlock = '.spoiler-block';
		$(cssLink).click(
			function(evt) {
				evt.preventDefault();
				var t = $(evt.target), contentBlock = t.parents(cssBlock).first();
				if (contentBlock.find(cssContent)[0]) {
					if (contentBlock.find(cssContent).hasClass('hide')) {
						contentBlock.find(cssContent).removeClass('hide')
					} else {
						contentBlock.find(cssContent).addClass('hide')
					}
				}
			}
		);
	}
})()
