<?php
require './connection.php';
session_destroy();
header("Location: ./dashboard.php");
?>