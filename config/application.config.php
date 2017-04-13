<?php
return [
'modules' => require __DIR__ . '/modules.config.php',
'module_listener_options' => [
	'module_paths' => [
		'./module',
		'./vendor',
	],
	'config_glob_paths' => [
		realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
	],
],
];