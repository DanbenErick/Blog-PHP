<?php

require_once("modules/functions.inc.php");
$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$result = detect_empty($name, $user, $pass);
if($result['code'] == 2) {
    $result_query = registerUser($name, $user, $pass);
    if($result_query['code'] == 1) {
        echo "Se logro registrar al usuario";
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
        var_dump($result_query['content']);
        echo "<script>alert('Ocurrio un error')</script>";
        header("Location: ../../pages/register.php");
    }
}else {

}

?>