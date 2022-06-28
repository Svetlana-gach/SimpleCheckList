<?php


$routes = [
	"/homepage" => 'functions/homepage.php',
	"/about" => 'functions/about.php'
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)){
	include $routes[$route]; exit;
} else{
	var_dump(404);
}


$db = include "database/start.php";


$post = $db->getOne('posts', 2);




$posts = $db->get_all('posts');


//подключили сам вид
include "bach-view.php";
?>
