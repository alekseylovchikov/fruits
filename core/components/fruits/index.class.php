<?php

abstract class FruitsMainController extends modExtraManagerController {
	/** @var Fruits $Fruits */
	public $Fruits;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('fruits_core_path', null, $this->modx->getOption('core_path') . 'components/fruits/');
		require_once $corePath . 'model/fruits/fruits.class.php';

		$this->Fruits = new Fruits($this->modx);

		$this->modx->regClientCSS($this->Fruits->config['cssUrl'] . 'mgr/main.css');
		$this->modx->regClientStartupScript($this->Fruits->config['jsUrl'] . 'mgr/fruits.js');
		$this->modx->regClientStartupHTMLBlock('<script type="text/javascript">
		Ext.onReady(function() {
			Fruits.config = ' . $this->modx->toJSON($this->Fruits->config) . ';
			Fruits.config.connector_url = "' . $this->Fruits->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('fruits:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends FruitsMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}