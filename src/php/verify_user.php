<?php

    $id = $_GET['id'];
    echo $id;
    require_once('modules/functions.inc.php');
    if(verifyUser($id)['code'] == 1) {
        header("Location: ../../pages/users.php");
    }

?>
