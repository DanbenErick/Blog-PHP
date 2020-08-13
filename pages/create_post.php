<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un Articulos</title>
    <link rel="stylesheet" href="../static/css/style-create-post.css">
</head>
<body>
    <?php
        session_start();
        error_reporting(0);
        $pages = "pages";
        require_once("templates/nav.inc.php");
    ?>
    <main>
        <h1>CREAR UN ARTICULO</h1>
        <div class="container_form">
            <form action="../src/php/register_article.php" method="POST" id="formRegisterArticle">
                <div class="group_input">
                    <label for="title">Titulo</label>
                    <input type="text" id="title" name="title">
                </div>
                <div class="group_input">
                    <label for="content">Contenido</label>
                    <textarea name="content" id="content" rows="10"></textarea>
                </div>
                <div class="group_button">
                    <button type="submit">Publicar Articulo</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>