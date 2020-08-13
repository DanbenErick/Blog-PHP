<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../static/css/style-edit-user.css">
</head>
<body>
    <?php
        session_start();
        // error_reporting(0);
        $page = "page";
        require_once("templates/nav.inc.php")
    ?>
    <main>
        <section>
            <h1>Editar Informacion Personal</h1>
            <div class="container-form">
                <form action="../src/php/edit_user.php" method="POST" id="editForm">
                    <div class="input_group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="input_group">
                        <label for="user">Usuario</label>
                        <input type="text" id="user" name="user">
                    </div>
                    <div class="button_group">
                        <button type="submit">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>