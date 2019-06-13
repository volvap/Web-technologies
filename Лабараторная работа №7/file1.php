<?php
$name_page="Название страницы";
$link_page="<a href='".$_SERVER['REQUEST_URI']."'>".$name_page."</a>";
 

session_start();

if (isset($_SESSION['pages']))
{
        if (count($_SESSION['pages']) < 5)
        {
                //Дописываем в массив адрес страницы
                $_SESSION['pages'][] = $link_page;
        }
        else {
                //Если в списке уже есть 5 страниц, надо передвинуть список назад
                for ($i=1; $i<5; $i++)
                {
                        $_SESSION['pages'][$i-1] = $_SESSION['pages'][$i];
                }
                $_SESSION['pages'][4] = $link_page;
        }
//Если ключа pages нет, его надо создать как массив
} else {
        $_SESSION['pages'] = array();
        $_SESSION['pages'][] = $link_page;
}
foreach ($_SESSION['pages'] as $page)
{
         print '<div>'.$page.'</div>';
}
?>