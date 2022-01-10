<?php
session_start();
session_regenerate_id();

unset($_SESSION['user']);

header('Location: ./login.php');