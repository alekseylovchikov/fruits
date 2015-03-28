<?php

/**
 * The home manager controller for Fruits.
 *
 */
class FruitsHomeManagerController extends FruitsMainController {
	/* @var Fruits $Fruits */
	public $Fruits;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('fruits');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->Fruits->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->Fruits->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->Fruits->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->Fruits->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->Fruits->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->Fruits->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->Fruits->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "fruits-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->Fruits->config['templatesPath'] . 'home.tpl';
	}
}