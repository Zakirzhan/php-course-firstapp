<?php

$title_page = 'Регистрация нового пользователя';

if(!empty($_GET['email']) && !empty($_GET['password'])){
	
	$email = urldecode($_GET['email']);
	$password = md5(urldecode($_GET['password']));
	$mydb->query("INSERT INTO `".$db['name']."`.`users` (`id`, `email`, `password`, `date`) VALUES (NULL, '$email', '$password', CURRENT_TIMESTAMP)");

	$user = array('email' => $email, 'password' => $password, 'date' =>  date('Y-m-d h:i:s'));

	Session::set('user',$user);

	header("location: ".APP_BASE_URL);
	    die();
}


require_once(APP_DIRECTORY.'app/views/register.blade.php');


 ?>