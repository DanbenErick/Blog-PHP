<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../static/css/style-register.css">
</head>
<body>
    <main>
        <section class="section-image"></section>
        <section class="authentication">
            <h1>REGISTRATE</h1>
            <div class="container">
                <form action="../src/php/registerUser.php" method="POST" id="formRegister">
                    <div class="form_group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="name">
                    </div>
                    <div class="form_group">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="user">
                    </div>
                    <div class="form_group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="pass">
                    </div>
                    <div class="form_button">
                        <button id="register_user">REGISTRARSE</button>
                    </div>
                </form>
            </div>
            <a href="login.php">Ingresar con mi Cuenta</a>
        </section>
    </main>
</body>
</html>