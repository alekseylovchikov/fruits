<?php

/**
 * Class FruitsMainController
 */
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
		$this->addCss($this->Fruits->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->Fruits->config['jsUrl'] . 'mgr/fruits.js');
		$this->addHtml('
		<script type="text/javascript">
			Fruits.config = ' . $this->modx->toJSON($this->Fruits->config) . ';
			Fruits.config.connector_url = "' . $this->Fruits->config['connectorUrl'] . '";
		</script>
		');

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