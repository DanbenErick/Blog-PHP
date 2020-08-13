<?php
session_start();
require_once("conexion.inc.php");
function getAllBlog() {
    global $pdo;
    $sql = "SELECT blog.* ,users.name FROM blog INNER JOIN users ON blog.id_user = users.id";
    $query = $pdo->prepare($sql);
    if($query->execute()) {
        return [
            'code' => 1,
            'content' => $query->fetchAll()
        ];
    }
    return [
        'code' => 2,
        'content' => $query->errorInfo()
    ];
}

function getArticleById($id) {
    global $pdo;
    $sql = "SELECT blog.* ,users.name FROM blog INNER JOIN users ON blog.id_user = users.id WHERE blog.id = :id";
    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $id);
    if($query->execute()) {
        return [
            'code' => 1,
            'content' => $query->fetchAll()
        ];
    }
    return [
        'code' => 2,
        'content' => $query->errorInfo()
    ];
}

function getInfoUserForId($id) {
    global $pdo;
    $sql = "SELECT * FROM user WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $id);
    if($query->execute()) {
        return [
            'code' => 1,
            'content' => $query->fetchAll()
        ];
    }
    return [
        'code' => 2,
        'content' => $query->errorInfo()
    ];
}

function loginUser($user, $password) {
    global $pdo;

    $consulta = "SELECT * FROM users WHERE user= :user";
    $query = $pdo->prepare($consulta);
    $query->bindValue(":user", $user);
    if ($query->execute()) {

        $resultado = $query->fetchAll();

        if ($resultado!=null) {
            $resultado = $resultado[0];
            $resultado_password = password_verify($password, $resultado['password']);
            if ($resultado_password) {
                return [
                    'code' => 1,
                    'id_user' => $resultado['id'],
                    'name' => $resultado['name'],
                    'username' => $resultado['user'],
                    'user_rol' => $resultado['validate'],
                    'content' => "El usuario se autentico correctamente"
                ];
            }else{
                return [
                    'code' => 2,
                    'content' => "La contraseña no es correcta",
                ];
            }
        }else{
            return [
                'code' => 3,
                'content' => "No existe el usuario"
            ];
        }
    }else {
        return [
            'code' => 4,
            'content' => "Error en la ejecucion del SQL",
            'err' => $query->errorInfo()
        ];
    }

}

function registerUser($name, $user, $password) {
    global $pdo;
    $newPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, user, password, registration_date) VALUES (:name, :user, :password, NOW())";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":name", $name);
    $insert->bindParam(":user", $user);
    $insert->bindParam(":password", $newPassword);
    if($insert->execute()) {
        return [
            'code' => 1,
            'content' => "Insercion Exitosa"
        ];
    }
    return [
        'code' => 2,
        'content' => $insert->errorInfo()
    ];
}

function registerPost($title, $content) {
    global $pdo;
    $sql = "INSERT INTO blog (title, content, date_register, id_user) VALUES (:title, :content, NOW(), :id_user)";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":title", $title);
    $insert->bindParam(":content", $content);
    $insert->bindParam(":id_user", $_SESSION['id_user']);
    if($insert->execute()) {
        return [
            'code' => 1,
            'content' => "Operacion Exitosa"
        ];
    }
    return [
        'code' => 2,
        'content' => $insert->errorInfo()
    ];
}

function detect_empty(...$variables) {
    foreach($variables as $variable) {
        if(empty($variable)) {
            echo "si \n";
            return [
                "code" => 1,
                "msg" => "Se encontro una variable vacia"
            ];
        }
    }
    return [
        "code" => 2,
        "msg" => "No se encontro ninguna variable vacia"
    ];
}

function getAllUsers() {
    global $pdo;
    $sql = "SELECT * FROM users";
    $query = $pdo->prepare($sql);
    if($query->execute()) {
        return [
            'code' => 1,
            'content' => $query->fetchAll(),
            'err' => null
        ];
    }
    return [
        'code' => 2,
        'content' => null,
        'err' => $result_query->errorInfo()
    ];
}

function verifyUser($id) {
    global $pdo;
    $sql = "UPDATE users SET validate = 1 WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $id);
    if($query->execute()) {
        return [
            'code' => 1,
            'content' => 'Se actulizo correctamente',
            'err' => null
        ];
    }
    return [
        'code' => 2,
        'content' => 'Ocurrio un error al actulizar el usuario',
        'err' => $query->errorInfo()
    ];
}