<?php


namespace Boot\Foundation\Bootstrappers;


use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class LoadEnvironmentVariables extends Bootstrapper
{
	public function boot()
	{
		try {
			$env = Dotenv::createImmutable(base_path());
			$env->load();
		} catch (InvalidPathException $exception) {}
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