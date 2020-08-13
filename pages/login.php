<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar - Blog</title>
    <link rel="stylesheet" href="../static/css/style-login.css">
</head>
<body>
    <main>
        <section class="section-image"></section>
        <section class="authentication">
            <h1>INGRESAR</h1>
            <div class="container">
                <form action="../src/php/loginUser.php" method="POST" id="formLogin">
                    <div class="form_group">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="user">
                    </div>
                    <div class="form_group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="pass">
                    </div>
                    <div class="form_button">
                        <button id="register_user">INGRESAR</button>
                    </div>
                </form>
            </div>
            <a href="register.php">No tengo cuenta</a>
        </section>
    </main>
</body>
</html>