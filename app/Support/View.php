<?php


namespace App\Support;

//function view(Response $response, $template, $with = []): Response
//{
//	$cache = config('blade.cache');
//	$views = config('blade.views');
//
//	$blade = (new Blade($views, $cache))->make($template, $with);
//
//	$response->getBody()->write($blade->render());
//	return $response;
//}

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

class View
{
	/**
	 * @var ResponseInterface
	 */
	private $response;

	/**
	 * View constructor.
	 */
	public function __construct(ResponseFactoryInterface $factory)
	{
		$this->response = $factory->createResponse(200, 'success');
	}

	public function __invoke($template, $with = []): ResponseInterface
	{
		$cache = config('blade.cache');
		$views = config('blade.views');

		$blade = (new Blade($views, $cache))->make($template, $with);
		$this->response->getBody()->write($blade->render());

		return $this->response;
	}
}