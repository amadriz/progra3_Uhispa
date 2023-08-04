<?php

// Initialize the session.
session_start();
//Destroy session
session_destroy();

header("location: ../index.php");

?>