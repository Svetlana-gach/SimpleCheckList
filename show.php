<?php
include "bach-functions.php";
$id = $_GET['id'];

$db = include "database/start.php";
$post = $db->getOne('posts', $id);
echo 'Представьте здесь красивую дизайнерскую страницу.';
?>