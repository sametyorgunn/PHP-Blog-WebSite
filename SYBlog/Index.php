<?php
include 'Controller/ConnectionString.php';
include 'Controller/Func.php';
$url = $_SERVER['REQUEST_URI'];
$menu = explode('/',$url);



if($menu[2]!="Loginn")
{
    include 'Views/Layout/Header.php';
}


if ($menu[2]!='') {
    if (function_exists($menu[2])) {
        $menu[2]();
    } else {
        Blogs(); // Fonksiyon Bulunamadı
    }
} else {
    Blogs(); // Karşılama Ekranı
}
if($menu[2]!="Loginn")
{
    include 'Views/Layout/Footer.php';
}
