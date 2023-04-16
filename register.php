<?php
    session_start();
    require_once 'conf/database.php';

    if(isset($_POST['create'])) {
        if(!empty($_POST['user_name']) && !empty($_POST['user_nickname']) && !empty($_POST['user_mail']) && !empty($_POST['user_password']) && !empty($_POST['user_picture'])) {
            $user_name = htmlspecialchars($_POST['user_name']);
            $user_nickname = htmlspecialchars($_POST['user_nickname']);
            $user_mail = htmlspecialchars($_POST['user_mail']);
            $user_password = sha1($_POST['user_password']);
            $user_picture = htmlspecialchars($_POST['user_picture']);    
            $user_data = [$user_name, $user_nickname, $user_mail, $user_password, $user_picture];
                 
            $insert_user = $database->prepare('INSERT INTO user(user_name, user_nickname, user_mail, user_password, user_picture) VALUES(?,?,?,?,?)');
            $insert_user->execute($user_data);

            $actual_id = $database->lastInsertId();

            $_SESSION['user_id'] = $actual_id;
            header('Location: index.php');
            die();
        }else {
            echo "Veuillez compléter tous les champs";
        }
    }
?>