<?php
use Slim\App;

return function (App $app) {
	$settings = $app->getContainer()->get('settings');
	$app->addErrorMiddleware(
		$settings['displayErrorsDetails'],
		$settings['logErrors'],
		$settings['logErrorsDetails']
	);
};