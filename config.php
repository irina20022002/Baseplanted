<?php
error_reporting(-1);
$dblocation = "localhost:3306"; // Имя сервера
$dbuser = "user1";          // Имя пользователя
$dbpasswd = "helloeverbody";
$dbname  = "backto";            
// устанавливаем соединение с базой данных 
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd); 
if (!$dbcnx) 
{
  // Выводим предупреждение
  echo ("<P>Server unavailable</P>");
  // Завершаем работу в случае неудачи
  exit();
}

// Код соединения с базой данных
if (!@mysql_select_db($dbname, $dbcnx)) 
{
  echo( "<P>Server is not available now</P>" );
  exit();
}
mysql_set_charset('utf8');
?>