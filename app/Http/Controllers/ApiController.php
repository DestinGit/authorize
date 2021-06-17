<?php

namespace App\Http\Controllers;

use App\Models\User;
use Psr\Http\Message\ResponseInterface;

class ApiController
{
	public function index(ResponseInterface $response, User $user): ResponseInterface
	{
//		$user = User::find(1);
//		$user = $user->find(1);
		$user = $user::find(1);
		$response->getBody()->write(json_encode($user, JSON_PRETTY_PRINT));

		return $response;
	}
}