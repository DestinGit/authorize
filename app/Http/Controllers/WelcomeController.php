<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Support\View;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class WelcomeController
{
	public function index(View $view, User $user): Response
	{
		$user = $user->find(1);
		return $view('auth.home', ['user'=>$user]);
	}

	public function show(View $view, $name, $id): Response
	{
		return $view('user.show', compact('name', 'id'));
	}
}