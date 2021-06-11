<?php

return [
	'name', env('APP_NAME', 'Slim 4 MM'),
	'providers'=> [
		\App\Providers\BladeServiceProvider::class,
		\App\Providers\RouteServiceProvider::class
	]
];