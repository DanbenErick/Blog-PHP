<?php
    session_start();
    require_once('../src/php/modules/functions.inc.php');
    $all_users = getAllUsers()['content'];
    if($_SESSION['user_rol'] == 2):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Admin</title>
    <link rel="stylesheet" href="../static/css/style-users.css">
</head>
<body>
    <?php
        // error_reporting(0);
        $page = "page";
        require_once("templates/nav.inc.php");
    ?>
    <main>
        <h1>LISTA DE USUARIOS</h1>
        <section>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>USUARIO</th>
                            <th>VERIFICAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($all_users as $user):?>
                            <tr>
                                <td><?= $user['id']?></td>
                                <td><?= $user['name']?></td>
                                <td><?= $user['user']?></td>
                                <?php if($user['validate'] == 0):?>
                                    <td><button><a href=<?= "../src/php/verify_user.php?id=" . $user['id']?>>VERIFICAR</a></button></td>
                                <?php endif;?>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>
<?php else: header("Location: ../index.php")?>
<?php endif;?>