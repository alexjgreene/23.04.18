<?php
return function ($request, $response, $service, $app) {
	$name = 'world';
	$db = $app->db();
	$users = $db->query('SELECT * FROM user')->fetchAll();
    $service->render(
	'views/hello.php',
		[
			'name' => $name,
			'users' => $users		
		]
	);
};