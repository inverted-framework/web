<?php
namespace Inverted\Web;

/**
 *
 */
public class PathInfoResolutionAdapter implements ResolutionAdapter {
	const DEFAULT_CONTROLLER = 'index';
	const DEFAULT_ACTION     = 'index';

	/**
	 * @var string
	 */
	private $_controller;

	/**
	 * @var string
	 */
	private $_action;

	/**
	 * @var array
	 */
	private $_parameters;

	/**
	 *
	 */
	public function resolve() {
		$a = explode('/', $_SERVER['PATH_INFO']);

		$this->_controller = (isset($a[1])) ? $a[1] : 'index';
		$this->_action     = (isset($a[2])) ? $a[2] : 'index';
		$this->_parameters = array_slice($a, 3);
	}

	public function getController() {
		return $this->_controller;
	}

	public function getAction() {
		return $this->_action;
	}

	public function getParameters() {
		return $this->_parameters;
	}
}