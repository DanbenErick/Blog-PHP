<?php
    error_reporting(0);
    // require_once("modules/conexion.inc.php");]
    require_once("modules/functions.inc.php");

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $result = detect_empty($user, $pass);
    if($result['code'] == 2) {
        $result_login = loginUser($user, $pass);
        if($result_login['code'] == 1) {
            session_start();
            $_SESSION['id_user'] = $result_login['id_user'];
            $_SESSION['name_user'] = $result_login['name'];
            $_SESSION['username'] = $result_login['username'];
            $_SESSION['user_rol'] = $result_login['user_rol'];
            header("Location: ../../index.php");
        }else {
            echo $result_login["content"];
            var_dump($result_login['err']);
            header("Location: ../../pages/login.php");
        }
    }else {
        echo "No se pudo autenticar";
    }


?>