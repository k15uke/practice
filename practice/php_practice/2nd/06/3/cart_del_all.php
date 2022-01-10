<?php
session_start();
session_regenerate_id();

unset($_SESSION['cart']);

header('location: ./cart_show.php');
exit;