<?php 
/* API */
$tel = substr( preg_replace("/(\D)/", "", $_POST['tel']), -10 );
$set['request']['contacts']['add'][] = array(
	'name' => $_POST['name'],
	'custom_fields' => array(
		array(
			'id' => 1255322,
			'values' => array(
				array(
					'value' => '8' . $tel,
					'enum' => 'MOB'
				)
			),
		),
		array(
			'id'=>1711823,
			'values'=>array(
				array(
					'value' => 'ng-primula.ru',
				)
			)
		),
		array(
			'id'=>1740801, #Тип контакта 
			'values'=>array(
				array(
					'value'=>4056905
				)
			)
		),
	),
);

require_once '/var/www/u7598131/data/crm/add_order.php';
