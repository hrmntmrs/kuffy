<?php
    session_start();
    require_once("config.php");

    if(!$_SESSION['isLogged']){
      header('Location: index.php');
    }

    $link = mysqli_connect(DBMS_HOST, DBMS_USER, DBMS_PASSWORD, DBMS_DB );

    if (!$link) {
      exit;
    }
 ?>
