<?php


namespace App\Providers;


use App\Support\SimplyDotEnv;
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class EnvironmentVariablesServiceProvider extends ServiceProvider
{

	public function register()
	{
		try {
			$env = Dotenv::createImmutable(base_path());
			$env->load();
		} catch (InvalidPathException $exception) {
		}
	}

	public function boot()
	{
		// TODO: Implement boot() method.
	}
}