<?php
include '../Controller/ConnectionString.php';
include '../Admin/Controller/Func.php';
$url = $_SERVER['REQUEST_URI'];
$menu = explode('/',$url);

include '../Admin/Views/Layout/Header.php';

if ($menu[3]!='') {
    if (function_exists($menu[3])) {
        $menu[3]();
    } else {
        Anasayfa(); // Fonksiyon Bulunamadı
    }
} else {
    Anasayfa(); // Karşılama Ekranı
}

include '../Admin/Views/Layout/Footer.php';