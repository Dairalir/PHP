<?php




















function getParameter($name) {
    $param = $_POST[$name];

    return !empty($param);
}

    $password = getParameter("password");

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    password_verify($password, $password_hash);
?>