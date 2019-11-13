<?php
include __DIR__ . '/openapp.php';

class StatCount extends OpenApp {
	/** @property string $url страницы, с которой был сделан запрос */
	public $url = '';
	
	/** @property string code Транслитированый код */
	public $content = 0;
	
	/** @property string source Исходный код */
	public $source = 0;
	
	/** @property string sourcemd5 md5 исходного кода */
	public $sourcemd5 = '';
	
	/** @property int $url_id */
	public $url_id = 0;
	
	/** @property int $uid */
	public $uid = 0;
	
	/** @property  $*/
	//public $ = 0;
	
	
	
	public function __construct() {
		parent::__construct();
		
		$this->tsreq('url');
		$this->tsreq('content');
		$this->tsreq('source');
		
		$this->table = 'p2j_codes';
		
		$uid = $this->_getUid();
		$nUrlId = $this->_getUrlId();
		
		if (!$this->content) {
			json_error('msg', l('Empty content'));
		}
		
		db_escape($this->content);
		db_escape($this->source);
		$now = now();
		$sourcemd5 = md5($this->source);
		
		query("INSERT INTO `{$this->table}` (`content`, `url_id`, `uid`, `source`, `date`, `sourcemd5`)
										VALUES  ('{$this->content}', '{$nUrlId}', '$uid', '{$this->source}', '{$now}', '{$sourcemd5}')
				ON DUPLICATE KEY UPDATE sourcemd5 = '{$sourcemd5}'");
		
		json_ok();
	}
	
	/**
	 * Возвращает идентификатор url русурса
	 * @return int
	*/
	private function _getUrlId()
	{
		//$nUid = query("SELECT id FROM p2j_urls WHERE url = '{$this->url}'");
		$nUid = query("INSERT INTO p2j_urls (`url`) VALUES ('{$this->url}') ON DUPLICATE KEY UPDATE url = '{$this->url}'");
		return $nUid;
	}
	
	/**
	 * Возвращает идентификатор пользователя
	 * @return int
	*/
	private function _getUid()
	{
		$nUid = Auth::getUid();
		if (!$nUid) {
			$nUid = Auth::createUid();
		}
		return $nUid;
	}
	
	public function breq($key, $field = '', $varname = 'REQUEST')
	{
		$field = $field ? $field : $key;
		$s = $this->tsreq($key, $field, $varname);
		$this->$field = ($s == 'true' ? true : false);
		if ($this->$field) {
			$this->request[$field] = $this->$field = 1;
		} else {
			$this->request[$field] = $this->$field = 0;
		}
		return $this->$field;
	}
}
