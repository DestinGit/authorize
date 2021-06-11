<?php


namespace Boot\Foundation;


use Boot\Foundation\Bootstrappers\Bootstrapper;
use Slim\App;

abstract class Kernel
{
	/**
	 * @var App
	 */
	protected $app;

	/**
	 * register application bootstrap loader
	 * @var array
	 */
	public $bootstrap = [];

	/**
	 * Kernel constructor.
	 * @param App $app
	 */
	public function __construct(App &$app)
	{
		$this->app = $app;
		$this->app->getContainer()->set(self::class, $this);
		Bootstrappers\Bootstrapper::setup($this->app, $this->bootstrap);
	}

	public static function bootstrap(App $app): Kernel
	{
		return new static($app);
	}

	/**
	 * @return App
	 */
	public function getApplication(): App
	{
		return $this->app;
	}


}