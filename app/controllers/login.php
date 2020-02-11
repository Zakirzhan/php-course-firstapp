<?php 	

$title = 'Страница авторизации';


if(!empty($_GET['email']) && !empty($_GET['password'])){
	
	$email = urldecode($_GET['email']);
	$password = md5(urldecode($_GET['password']));

	$user = $mydb->query("SELECT * FROM `".$db['name']."`.`users` WHERE `email` = '$email' AND `password` = '$password'")->fetchArray();

	if(!empty($user)){

		Session::set('user',$user);

		header("location: ".APP_BASE_URL);
		    die();
	} else {

		header("location: ".APP_BASE_URL."?do=login&error=1");
	    die();
	}
	
}




require_once(APP_DIRECTORY.'app/views/login.blade.php');

 ?>