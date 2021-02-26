<?php

session_start();
$statut = $_SESSION['active'];
$_SESSION['id']=0;
require('connect_db.php');
$req = $db->prepare('UPDATE users SET is_active=? WHERE id=?');
        $req -> execute(array(0, $id));
        header('location: dashboard.php');

?>