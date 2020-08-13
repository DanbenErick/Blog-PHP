<?php
	require_once("../src/php/modules/functions.inc.php");
	$articulo = getArticleById($_GET['id'])['content'][0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Titulo de la Pagina</title>
	<link rel="stylesheet" href="../static/css/style-post-complete.css">
</head>
<body>
	<header></header>
	<main>
		<article>
			<h1><?= $articulo['title']?></h1>
			<!-- <img src="https://images.unsplash.com/photo-1524729429516-485db0307e59?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=749&q=80" alt=""> -->
			<p><?= $articulo['content']?></p>
			<div class="container-cite">
				<cite>
					<span class="separator"></span>
					<span class="container-user">Author: <span class="user"><?= $articulo['name']?></span></span>
				</cite>
			</div>
		</article>
	</main>
</body>
</html>