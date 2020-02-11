<?php 

//добавляем конфиг
require_once(APP_DIRECTORY.'app/config.php');

//добавляем класс базы данных
require_once(APP_DIRECTORY.'app/models/database.php');
$mydb = new MyDB($db);

//подключаем функцию для регистрации
require_once(APP_DIRECTORY.'app/models/register.php');

 ?>