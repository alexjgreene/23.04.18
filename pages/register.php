<?php
return function ($request, $response, $service, $app) {
	if (isset($_POST['register'])) {
		$register = $_POST['register'];
		if(
			$register['email'] != '' &&
			$register['password'] != ''
		) {
			$query = $app->db()->prepare(
				'INSERT INTO user (email, password)
				VALUE (:email, :password)'
			);
			$query->execute([
				'email' => $register['email'],
				'password' => password_hash(
					$register['password'],
					PASSWORD_DEFAULT
				)
			]);
			$response->redirect('/');
			return;
		}
	} else {
		$register = [
			'email' => '',
			'password' => ''
		];
	}
	$service->render(
			'views/register.php',
			['register' => $register]
		);
};