<?php

require_once('../../../sources/model/connetion.php');

session_start();



try {

    $_SESSION['user_email'] = filter_input(INPUT_POST, 'email_field', FILTER_SANITIZE_EMAIL);
    $_SESSION['user_pass']  = filter_input(INPUT_POST, 'pass_field', FILTER_SANITIZE_STRING);


    $loginquery = $connection->prepare("SELECT user_email, user_pass FROM tb_users_compra_mais WHERE user_email = :email LIMIT 1");
    $loginquery->bindParam(':email', $_SESSION['user_email']);

    $loginquery->execute();

    //header('location: ../../Login/index.php?type=' . $_SESSION['typeAccount'] . '&register=true');
} catch (PDOException $error) {
    echo $error->getMessage();
    die;
}


if ($loginquery->rowCount() > 0) {

    $row = $loginquery->fetch();

    if (password_verify($_SESSION['user_pass'], $row["user_pass"])) {
        echo 'tudo ok';
    } else {
        echo 'Senha Incorreta';
        //enviar uma mensagem de erro pro login
    }
} else {
    echo 'Usuário Não encontrado';
    //enviar uma mensagem de erro pro login
}
