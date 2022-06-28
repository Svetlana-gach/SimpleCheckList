<?php
include "bach-functions.php";
$id = $_GET['id'];

$db = include "database/start.php";
$post = $db->getOne('posts', $id);

?>

<DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<title>Изменить Пост</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container"> 
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="/update.php?id=<?php echo $post['id'];?>" method="post">
					<div class='form-group'>
						<label for="">Title</label>
						<input type="text" name="title" class="form-control" value="<?php echo $post['title']?>">
					</div>
				<div class="form-group">
					<button class="btn btn-warning">Изменить Пост</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>