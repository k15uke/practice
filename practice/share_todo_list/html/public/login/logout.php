<?php

require_once('../../App/config.php');

unset($_SESSION['user']);

unset($_SESSION['post']);
unset($_SESSION['msg']);

header('Location: ./');
exit;