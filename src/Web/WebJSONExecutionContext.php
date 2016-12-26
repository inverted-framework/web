<?php
namespace Inverted\Web;

/**
 *
 */
class WebJSONExecutionContext extends \Inverted\Web\JSONExecutionContext {
	private $_controller;
	private $_action;

	/**
	 * 
	 */
	private static $_instance;

	/**
	 * 
	 */
	protected function __construct($configuration_file) {
		parent::__construct($this->_parse($configuration_file));
	}

	/**
	 * 
	 */
	public static function getInstance($configuration_file) {
		if (empty(static::$_instance)) {
			static::$_instance = new WebJSONExecutionContext($configuration_file);
		}
		return static::$_instance;
	}

	/**
	 * 
	 */
	public function Go() {
		$controller = 'index';
		$action     = 'index';
		$arguments  = [];

		$path = explode('/', $_SERVER['PATH_INFO']);
		/* throw-away */ array_shift($path);
		$controller 
	}

	private function __clone() { /* no op */ }

	private function __wakeup() { /* no op */ }
}