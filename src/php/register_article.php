<?php

    $title = $_POST['title'];
    $content = $_POST['content'];

    require_once("modules/functions.inc.php");

    $result = detect_empty($title, $content);

    if($result) {
        $result_register = registerPost($title, $content);
        if($result_register['code'] == 1 ){
            header("Location: ../../index.php");
        }else {
            header("Location: ../../pages/create_post.php");
        }
    }

?>