<?php

class Fruits {
	public $modx;
	public $config = array();

	function __construct(modX &$modx, array $config = array()) {
		$this->modx =& $modx;

		$basePath = $this -> modx -> getOption('fruits.core_path', $config, $this -> modx -> getOption('core_path') . 'components/fruits/');
		$assetsUrl = $this -> modx -> getOption('fruits.assets_url', $config, $this -> modx -> getOption('assets_url') . 'components/fruits/');

		$this -> config = array_merge(array(
			'basePath' => $basePath,
			'corePath' => $basePath,
			'modelPath' => $basePath . 'model/',
			'processorPath' => $basePath . 'processors/',
			'chunksPath' => $basePath . 'elements/chunks/',
			'jsUrl' => $assetsUrl . 'js/',
			'cssUrl' => $assetsUrl . 'css/',
			'assetsUrl' => $assetsUrl,
			'connectorUrl' => $assetsUrl . 'connector.php'
		), $config);
	}

}
