<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 31/01/2017
 * Time: 21:16
 */
session_start();
session_destroy();
header("Location: http://localhost/Unicef_project/admin_login.php");
?>