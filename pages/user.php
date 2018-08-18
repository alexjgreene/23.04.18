<?php
return function ($request, $response, $service, $app) {
	$userId = $request->param('id');
	$db = $app->db();
	$query = $db->prepare('SELECT * FROM user WHERE id = :id');
	$query ->execute(['id' => $userId]);
	$user = $query->fetch();
	if ($user) {
		$service->render(
			'views/user.php',
			['user' => $user]
		);
	} else {
		$service->render(
		'views/notfound.php'
		);
	}
};