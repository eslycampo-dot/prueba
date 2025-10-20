<?php
  require_once 'views/header.php';
  require_once 'views/login.php';
  $eventlog = new Logevent();
  $eventlog->login();
?>