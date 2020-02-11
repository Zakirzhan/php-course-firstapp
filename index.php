<?php 

ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);


require_once('app/core.php');
 

if (!empty($_GET['do']) && $_GET['do'] != 'main' && $_GET['do'] != '404') {

 $do = $_GET['do'];

 (@include APP_DIRECTORY.'app/controllers/' . $do . '.php') or include(APP_DIRECTORY.'app/controllers/404.php');

} elseif (empty($_GET['do'])) {


	 if(empty($_SESSION['user']) && empty($_GET['do'])) {
	    header("location: ".APP_BASE_URL."?do=login");
	    die();
	} 

    include APP_DIRECTORY.'app/controllers/main.php';
} else {
    include APP_DIRECTORY.'app/controllers/404.php';
}




 ?>