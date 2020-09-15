<?php
    
    require_once "DB.php";

    $db = new DB();
    $db->update($_GET['id'],$_POST);

?>