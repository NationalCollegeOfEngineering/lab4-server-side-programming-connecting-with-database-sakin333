<?php
    session_start();
    $_SESSION['is_login'] = 'no';
    session_destroy();
    header("location: /nce-project/index.php");
?>