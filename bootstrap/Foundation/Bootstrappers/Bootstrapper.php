<?php


namespace Boot\Foundation\Bootstrappers;


use Slim\App;

abstract class Bootstrapper
{
	/**
	 * @var App
	 */
	protected $app;

	/**
	 * Bootstrapper constructor.
	 * @param App $app
	 */
	final public function __construct(App $app)
	{
		$this->app = $app;
	}


	/**
	 * @param App $app
	 * @param array $loaders
	 */
	final public static function setup(App &$app, array $loaders)
	{
		$loaders = array_map(function ($loader) use ($app) {
			return new $loader($app);
		}, $loaders);

		array_walk($loaders, function (Bootstrapper $boot) {
			$boot->beforeBoot();
		});

		array_walk($loaders, function (Bootstrapper $boot) {
			$boot->boot();
		});

		array_walk($loaders, function (Bootstrapper $boot) {
			$boot->afterBoot();
		});
	}

	abstract public function beforeBoot();
	abstract public function boot();
	abstract public function afterBoot();

//	public function beforeBoot()
//	{
//
//	}
//
//	public function boot()
//	{
//
//	}
//
//	public function afterBoot()
//	{
//
//	}
}