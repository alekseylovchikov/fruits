<?

$fruits = $modx -> getSetvice('fruits', 'Fruits', $modx -> getOption('fruits.core_path', null, $modx -> getOption('core_path') . 'components/fruits/') . 'model/fruits/', $scriptProperties);

if(!($fruits instanceof Fruits)) {
	return '';
}