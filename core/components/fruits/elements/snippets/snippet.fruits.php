<?

$fruits = $modx -> getService('fruits', 'Fruits', $modx -> getOption('fruits.core_path', null, $modx -> getOption('core_path') . 'components/fruits/') . 'model/fruits/', $scriptProperties);

if(!($fruits instanceof Fruits)) {
	return '';
}

$tpl = $modx -> getOption('tpl', $scriptProperties, 'rowTpl');
$sort = $modx -> getOption('sort', $scriptProperties, 'name');
$dir = $modx -> getOption('dir', $scriptProperties, 'ASC');

$output = '';

return $output;
