<?php

include "bach-functions.php";

$db = include "database/start.php";
$db->create('posts', [
	'title' => $_POST['title']]);

header('Location: /bach.php');

?>