<?php
session_start();
session_destroy();

header('location:contact.php');

/* This file is used to end the session  */
?>