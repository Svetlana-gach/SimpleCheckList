<DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<title>Список дел</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="btn btn-primary" type="button">Меню</button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>

<div class='container'>
	<div class = "row">
		<div class="col=md-8 offset-md-2">
			<a href="/create.php" class = "btn btn-success">Добавить задачу</a>
			<table class = "table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Дело дня</th>
      <th scope="col">Действия</th>
    </tr>
  </thead>
  <tbody>
  		<?php foreach($posts as $post):?>
  	<tr>
      <th scope="row"><?php echo $post['id'];?></th>
      <td><a href="/show.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></td>
      <td>
      	<a href="/edit1.php?id=<?php echo $post['id'];?>" class="btn btn-warning">Изменить</a>
      	<a href="/delete.php?id=<?php echo $post['id'];?>" class="btn btn-danger" onclick="return confirm('А ты уверен?!')">Удалить</a>
      </td>
    </tr>

  		<?php endforeach; ?>
    
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>