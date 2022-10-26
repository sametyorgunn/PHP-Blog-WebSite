<?php
$db = new PDO("mysql:host=localhost;dbname=syblog", "root", "sonel.1234");
$db->exec("SET NAMES utf8");
$db->exec("SET CHARACTER SET utf8");
$db->exec("SET COLLATION_CONNECTION = 'utf8_general_ci'");

session_start();