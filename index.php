<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="static/css/style-blog.css">
</head>
<body>
	<?php
		error_reporting(0);
		require_once("src/php/modules/functions.inc.php");
		$all_articles = getAllBlog()['content'];
		session_start();
		$page = "main";
        if($_SESSION['id_user']){
			require_once('pages/templates/nav.inc.php');
		}
    ?>
	<header></header>
	<main>
		<h1>Blog</h1>
		<?php foreach($all_articles as $article):?>
			<article>
				<h2><?= $article['title']?></h2>
				<p><?= substr($article['content'], 0, 301) . "..."?></p>
				<?php if(strlen($article['content']) >= 250):?>
				<button>
					<a href=<?= "pages/post_complete.php?id=" . $article['id']?>>Leer Mas</a>
				</button>
				<?php endif;?>
				<div class="container-cite">
					<cite>
						<div class="separator"></div>
						<div class="container-user">Author: <span class="user"><?= $article['name']?></span></div>
					</cite>
				</div>
			</article>
		<?php endforeach;?>
	</main>
	<?php
		if(!$_SESSION['id_user']) {
			require_once("pages/templates/action_button.inc.php");
		}
	?>
</body>
</html>