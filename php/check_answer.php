<?php
	include_once "bd.php";

    if (isset($_POST['val']) && isset($_POST['bnt_id'])) {
        $right_answer = $db->query("SELECT `answer` FROM `answers` WHERE `id` = '". $_POST['bnt_id'] ."'");
        if ($right_answer->num_rows > 0) {
            $right_answer = $right_answer->fetch_array(MYSQLI_ASSOC);

            if ($_POST['val'] == $right_answer['answer']){
                echo 1;
            } else {
                echo 'Відповідь не правильна, спробуйте ще раз';
            }
        } else {
            echo 0;
        }
    }
?>
