<?php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to TSN,";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' please sign up or log in';
?>
