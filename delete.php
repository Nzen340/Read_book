<?php

    require_once "DB.php";
    $db = new DB();
    $db->delete($_GET['id']);
?>