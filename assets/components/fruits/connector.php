<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.class.php';
/** @var Fruits $Fruits */
$Fruits = $modx->getService('fruits', 'Fruits', $modx->getOption('fruits_core_path', null, $modx->getOption('core_path') . 'components/fruits/') . 'model/fruits/');
$modx->lexicon->load('fruits:default');

// handle request
$corePath = $modx->getOption('fruits_core_path', null, $modx->getOption('core_path') . 'components/fruits/');
$path = $modx->getOption('processorsPath', $Fruits->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));