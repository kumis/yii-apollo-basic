<?php
// web application configuration
return array(
	// path aliases
	'aliases' => array(
		'bootstrap' => 'vendor.crisu83.yiistrap',
	),

	// application behaviors
	'behaviors' => array(
	),

	// controllers mappings
	'controllerMap' => array(
	),

	// application modules
	'modules' => array(
	),

	// application components
	'components' => array(
		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),
		'log' => array(
			'routes' => array(
				array(
					'class' => 'vendor.malyshev.yii-debug-toolbar.yii-debug-toolbar.YiiDebugToolbarRoute',
					'ipFilters' => array('127.0.0.1', '::1'),
				),
			),
		),
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,
			'caseSensitive' => false,
			'rules' => array(
				// seo rules
				'<controller:\w+>/<name>-<id:\d+>.html'=>'<controller>/view',
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user' => array(
			'allowAutoLogin' => true,
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
	),
);