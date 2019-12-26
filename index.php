<?php
require_once ('functions.php');
$data = getData('https://dp.informator.ua/category/news/');
?>
<!document html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Новости Днепра</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="text-center">Новости Днепра</h1>
	<div class="row">
		<div class="col">
			<a class="btn btn-block btn-outline-success" href="/" role="button">Обновить</a>
			<div>
				<ul class="list-group list-group-flush">
					<?php foreach ($data as $value) : ?>
						<li class="list-group-item">
							<a href="<?=$value["url"]?>" target="_blank"><?=$value["title"]?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>