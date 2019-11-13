<?php
class Route {
	public function __construct() {
		$url  = $_SERVER['REQUEST_URI'];
		$aUrl = explode('?', $url);
		$this->_baseUrl =  $baseUrl = $aUrl[0];

		//Default
		$this->master = __dir__ . '/master.tpl.php';
		$handler = __dir__ . '/ctrl/main.php';
		$this->view    = __dir__ . '/view/home.tpl.php';
		
		
		$this->_stat();
		
		
	}
	/**
	 * @description Маршруты для страницы /p/p2jstat.jn/
	*/
	protected function _stat()
	{
		$s = str_replace('_', '', __FUNCTION__);
		$sCtrlDir = __dir__ . '/ctrl/' . $s . '/';
		
		$baseUrl = $this->_baseUrl;
		if ($baseUrl == '/p/p2jstat.jn/') {
			$handler = $sCtrlDir . 'statcount.php';
			require_once $handler;
			$this->app = new StatCount();
		}
	}
	/**
	 * @description Маршруты для страницы /p/portfolio/
	*/
	protected function _portfolio()
	{
		$s = str_replace('_', '', __FUNCTION__);
		$sCtrlDir = __dir__ . '/ctrl/' . $s . '/';
		
		$baseUrl = $this->_baseUrl;
		if ($baseUrl == '/p/portfolio/') {
			$this->master = __dir__ . '/master.tpl.php';
			$handler = $sCtrlDir . 'list.php'; //from list
			$this->view    = __dir__ . '/view/portfolio.tpl.php';
			require_once $handler;
			$this->app = new ProductsEditor();
		}
		if ($baseUrl == '/p/portfolio/list.jn/') {
			$handler = $sCtrlDir . 'plist.php';
			require_once $handler;
			$this->app = new PortfolioList();
		}
		if ($baseUrl == '/p/portfolio/product.jn/') {
			$handler = $sCtrlDir . 'product.php';
			require_once $handler;
			$this->app = new Product();
		}
		if ($baseUrl == '/p/portfolio/removeproduct.jn/') {
			$handler = $sCtrlDir . 'productremove.php';
			require_once $handler;
			$this->app = new ProductRemove();
		}
		if ($baseUrl == '/p/portfolio/psave.jn/') {
			$handler = $sCtrlDir . 'psave.php';
			require_once $handler;
			$this->app = new ProudctPost();
		}
		if ($baseUrl == '/p/portfolio/productupload.jn/') {
			$handler = $sCtrlDir . 'productupload.php';
			require_once $handler;
			$this->app = new PortfolioFileUpload();
		}
		if ($baseUrl == '/p/portfolio/sha256remove.jn/') {
			$handler = $sCtrlDir . 'sha256remove.php';
			require_once $handler;
			$this->app = new ProductSha256FileRemove();
		}
		if ($baseUrl == '/p/portfolio/reorder.jn/') {
			$handler = $sCtrlDir . 'reorder.php';
			require_once $handler;
			$this->app = new PortfolioReorder();
		}
		if ($baseUrl == '/p/portfoio/move.jn/') {
			$handler = __dir__ . '/ctrl/portfolio/portfoliomovetopage.php';
			require_once $handler;
			$this->app = new PortfolioMoveToPage();
		}
	}
	/**
	 * @description Маршруты для страницы /p/
	*/
	protected function _p()
	{
		$baseUrl = $this->_baseUrl;
		if ($baseUrl == '/p/') {
			$this->master = __dir__ . '/master.tpl.php';
			$handler = __dir__ . '/ctrl/main.php';
			$this->view    = __dir__ . '/view/home.tpl.php';
			require_once $handler;
			$this->app = new ArticleEditor();
		}
		if ($baseUrl == '/p/articleslist.jn/') {
			$handler = __dir__ . '/ctrl/articlespage.php';
			require_once $handler;
			$this->app = new ArticlesPage();
		}
		if ($baseUrl == '/p/article.jn/') {
			$handler = __dir__ . '/ctrl/article.php';
			require_once $handler;
			$this->app = new Article();
		}
		if ($baseUrl == '/p/articlesave.jn/') {
			$handler = __dir__ . '/ctrl/articlesave.php';
			require_once $handler;
			$this->app = new ArticlePost();
		}
		
		if ($baseUrl == '/p/removearticle.jn/') {
			$handler = __dir__ . '/ctrl/removearticle.php';
			require_once $handler;
			$this->app = new RemoveArticle();
		}
		if ($baseUrl == '/p/articlelogoupload.jn/') {
			$handler = __dir__ . '/ctrl/articlelogoupload.php';
			require_once $handler;
			$this->app = new ArticleLogoUpload();
		}
		if ($baseUrl == '/p/articleogimageupload.jn/') {
			$handler = __dir__ . '/ctrl/articleogimageupload.php';
			require_once $handler;
			$this->app = new ArticleOgImageUpload();
		}
		if ($baseUrl == '/p/articleinlineimageupload.jn/') {
			$handler = __dir__ . '/ctrl/articleinlineimageupload.php';
			require_once $handler;
			$this->app = new ArticleInlineImageUpload();
		}
		if ($baseUrl == '/p/articlesreorder.jn/') {
			$handler = __dir__ . '/ctrl/articlesreorder.php';
			require_once $handler;
			$this->app = new ArticlesReorder();
		}
		if ($baseUrl == '/p/articles/move.jn/') {
			$handler = __dir__ . '/ctrl/articlesmovetopage.php';
			require_once $handler;
			$this->app = new ArticlesMoveToPage();
		}
	}
}
$route = new Route();
$app = $route->app;
