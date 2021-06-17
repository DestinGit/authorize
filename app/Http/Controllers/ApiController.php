<?php

namespace App\Http\Controllers;

use DB;
use Psr\Http\Message\ResponseInterface;

class ApiController
{
	public function index(ResponseInterface $response, DB $db): ResponseInterface
	{
		$user = $db->table('users')->find(1);
		$response->getBody()->write(json_encode($user, JSON_PRETTY_PRINT));

		return $response;
	}
}