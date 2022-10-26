<?php
function dosyaadi($degisken){
    $bul	= array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', 'Ö', 'İ', 'Ü', '-');
    $degistir = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'o', 'i', 'u', ' ');
    $sonuc = strtolower(str_replace($bul, $degistir, $degisken));
    $sonuc = str_replace(' ', '-', $sonuc);
    return $sonuc;
}
function Aktif()
{global $db,$menu;

    $result = $db->exec("
        UPDATE blog SET
        Status = '1'
        WHERE id = $menu[4]");
    echo '<script>window.location.href = "Admin/BlogList";</script>';

}
function Pasif()
{global $db,$menu;

    $result = $db->exec("
        UPDATE blog SET
        Status = '0'
        WHERE id = $menu[4]");
    echo '<script>window.location.href = "Admin/BlogList";</script>';

}

function Cikis()
{
    session_destroy();
    header("Location: Loginn");
}
include '../Admin/Views/Home.php';
include '../Admin/Views/Blog.php';
include '../Admin/Views/BlogListele.php';
