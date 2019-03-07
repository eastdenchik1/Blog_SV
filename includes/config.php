<?php


$url=parse_url(getenv("CLEARDB_DATABASE_URL"));


$config = array (
    'title' => 'Блог Дениса Свиридова',
    'VK_URL' => 'https://vk.com/westdenchik',
    'users' => array(
        'login' => 'admin',
        'password' => '1234'
    ),
    'db' => array(
        'server' => $url["host"],
        'user' => $url["user"],
        'password' => $url["pass"],
        'dbname' => substr($url["path"],1)
    ),
);



/*
$config = array (
    'title' => 'Блог Дениса Свиридова',
    'VK_URL' => 'https://vk.com/badwolf4500',
    'users' => array(
        'login' => 'admin',
        'password' => '1234'
    ),
    'db' => array(
        'server' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'blog_course'
    ),
);
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"],1);
*/


require "db.php";
