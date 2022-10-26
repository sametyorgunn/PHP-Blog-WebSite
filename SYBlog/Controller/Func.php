<?php
function Cikis()
{
    session_destroy();
    header("Location: Loginn");
}
include 'Views/Home.php';
include  'Views/BlogDetay.php';
include  'Views/Login.php';