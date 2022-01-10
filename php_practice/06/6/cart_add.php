<?php
    session_start();
    session_regenerate_id();

    $_SESSION['cart'][] = $_POST;

    header('location: ./');
    exit;
    ?>