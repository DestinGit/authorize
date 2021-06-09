<?php
use Slim\App;

return function (App $app) {
	$app->addErrorMiddleware(
		config('middleware.error_details.displayErrorsDetails'),
		config('middleware.error_details.logErrors'),
		config('middleware.error_details.logErrorsDetails')
	);
};