<?php
// development environment configuration
return array(
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1','::1'),
		),
	),
	'components' => array(
		/*
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_apollo_basic_dev',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),
		*/
	),
);
