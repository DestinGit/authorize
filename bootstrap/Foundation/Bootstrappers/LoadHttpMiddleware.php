<?php


namespace Boot\Foundation\Bootstrappers;


use Boot\Foundation\Kernel;

class LoadHttpMiddleware extends Bootstrapper
{
	public function boot()
	{
		$kernel = $this->app->getContainer()->get(Kernel::class);
		$this->app->getContainer()->set('middleware', function () use ($kernel) {
			return [
				'global'=> $kernel->middleware,
				'api'=>$kernel->middlewareGroups['api'],
				'web'=>$kernel->middlewareGroups['web']
			];
		});
	}

	public function beforeBoot()
	{
		// TODO: Implement beforeBoot() method.
	}

	public function afterBoot()
	{
		// TODO: Implement afterBoot() method.
	}
}