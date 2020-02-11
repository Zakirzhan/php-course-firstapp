<?php 

//добавляем конфиг
require_once('config.php');

//добавляем класс базы данных
require_once(APP_DIRECTORY.'app/models/MyDB.class.php');
$mydb = new MyDB($db);	

//добавляем routes
require_once(APP_DIRECTORY.'app/models/Routes.class.php');

//добавляем класс сессии
require_once(APP_DIRECTORY.'app/models/Session.class.php');
Session::start();



 ?>