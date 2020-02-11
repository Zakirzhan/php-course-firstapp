<?php 

$title_page = 'Dashboard'; 


if(!empty(SESSION::get('user'))){
	$user = SESSION::get('user');
}
require_once(APP_DIRECTORY.'app/views/main.blade.php');
?>