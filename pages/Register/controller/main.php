<?php
    session_start();

    require_once('../../../sources/model/connetion.php');

    $_SESSION['user_name']  = filter_input(INPUT_POST,'user_name',FILTER_SANITIZE_STRING);
    $_SESSION['user_email'] = filter_input(INPUT_POST,'user_email',FILTER_SANITIZE_EMAIL);
    $_SESSION['user_pass'] = filter_input(INPUT_POST,'user_pass',FILTER_SANITIZE_STRING);


    if($_SESSION['typeAccount'] = 'buy'){
        $typeAccount = 'Buyer';
    }else if($_SESSION['typeAccount'] = 'sell'){
        $typeAccount = 'seller';
    }

    try{

        $insert = $connection->prepare("INSERT INTO tb_users_compra_mais (user_name, user_email, user_pass, type_account) VALUES (:nome,:email, :pass, :typeaccount)");
    
        $insert->bindParam(':nome',$_SESSION['user_name']);
        $insert->bindParam(':email',$_SESSION['user_email']);
        $insert->bindParam(':pass',password_hash($_SESSION['user_pass'],PASSWORD_DEFAULT));
        $insert->bindParam(':typeaccount',$typeAccount);
    
        $insert->execute();
        
        header('location: ../../Login/index.php?type='.$_SESSION['typeAccount'].'&register=true');

    }catch(PDOException $error){
        echo $error->getMessage();
    }


?>