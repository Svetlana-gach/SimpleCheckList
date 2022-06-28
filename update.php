<?php
include "bach-functions.php";
$db = include "database/start.php";

$id  = $_GET['id'];
$db->update('posts', [
	'title' => $_POST['title'],
	], $id);

header("Location:/bach.php");


?>