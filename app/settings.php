<?php

use Psr\Container\ContainerInterface;

return function (ContainerInterface $container) {
$container->set('settings', function () {
	return [
		'displayErrorsDetails' => true,
		'logErrors'=>true,
		'logErrorsDetails'=> true
	];
});
};