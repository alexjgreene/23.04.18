<?php
require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond(function ($request, $response, $service) {
    $service->layout('views/layout.php');
});

$klein->respond(
	'GET',
	'/hello-world',
	require('pages/hello.php')
);

$klein->respond(
	'GET',
	'/hello-world/[:id]',
	require('pages/user.php')
);

$klein->respond(
	'GET',
	'/',
	require('pages/main.php')
);

$klein->respond(
	['GET','POST'],
	'/register',
	require('pages/register.php')
);


$klein->respond(
	['GET','POST'],
	'/login',
	require('pages/login.php')
);

$klein->respond(
	['GET'],
	'/logout',
	require('pages/logout.php')
);

$klein->app()->register('db', function () {
    $params = require('db.php');
    return new PDO($params['connection'], $params['username'], $params['password']);
});

$klein->dispatch();