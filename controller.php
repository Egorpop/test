<?php
function connect(){
$db_host='localhost'; // ваш хост
$db_name='rocket'; // ваша бд
$db_user='mysql'; // пользователь бд
$db_pass='mysql'; // пароль к бд
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
$mysqli->set_charset("utf8mb4"); // задаем кодировку
$result = $mysqli->query('SELECT * FROM `news` ORDER BY data DESC LIMIT 9'); // запрос на выборку
return $result;
}
