<?php
//Запуск сессии
session_start();
//Если в сессии есть ключ pages, можно с ним работать
if (isset($_SESSION['pages']))
{} else {}
 
 
foreach ($_SESSION['pages'] as $page)
{
        print $page;
}
?>