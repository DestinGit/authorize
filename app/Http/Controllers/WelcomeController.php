<?php


namespace App\Http\Controllers;

use App\Support\View;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class WelcomeController
{
	public function index(View $view): Response
	{
		return $view('auth.home', ['name'=> 'Clean Code Studio']);
	}

	public function show(View $view, $user, $id): Response
	{
		return $view('user.show', compact('user', 'id'));
	}
}