<?php
    $domen = "localhost";
    $user = "root";
    $password = "";
    $name = "vue_bd";

    $db = new mysqli($domen, $user, $password);
    $db->set_charset("utf8mb4");
    $db->select_db($name);
?>