<?php
$db = include 'database/start.php';

$posts = $db -> get_all('posts');
include 'bach-view.php';

?>