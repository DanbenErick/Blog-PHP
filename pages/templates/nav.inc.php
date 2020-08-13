<?php if ($page == "main"):?>
<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <?php if($_SESSION['user_rol'] == 1 || $_SESSION['user_rol'] == 2):?>
            <li><a href="pages/create_post.php">Crear articulo</a></li>
        <?php endif; ?>
        <?php if($_SESSION['user_rol'] == 2):?>
            <li><a href="pages/users.php">Usuario</a></li>
        <?php endif;?>
        <li><a href="#"><?= $_SESSION['name_user']?></a>
            <ul>
                <li><a href="pages/edit_user.php">Editar Usuario</a></li>
                <li><a href="src/php/cerrar_session.php">Salir</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php else: ?>
<nav>
    <ul>
        <li><a href="../index.php">Inicio</a></li>
        <?php if($_SESSION['user_rol'] == 1 || $_SESSION['user_rol'] == 2):?>
            <li><a href="create_post.php">Crear articulo</a></li>
        <?php endif;?>
        <?php if($_SESSION['user_rol'] == 2):?>
            <li><a href="users.php">Usuario</a></li>
        <?php endif;?>
        <li><a href="#"><?= $_SESSION['name_user']?></a>
            <ul>
                <li><a href="edit_user.php">Editar Usuario</a></li>
                <li><a href="../src/php/cerrar_session.php">Salir</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php endif;?>