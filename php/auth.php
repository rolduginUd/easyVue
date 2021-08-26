<?php
	include_once "bd.php";

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $pass = md5($_POST['password']);
        
        $check_user = $db->query("SELECT `id` FROM `users` WHERE `login` = '". $_POST['email'] ."' && `password` = '". $pass ."'");
        if ($check_user->num_rows > 0) {
            echo 1;
        } else {
            echo 'Невірний логін або пароль';
        }
    } else {
        echo 'Відсутній логін або пароль';
    }
?>
