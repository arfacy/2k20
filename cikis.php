<?php 

echo "Burda olamaman gerekiyor.";

session_start();
session_unset();
session_destroy();

header('Location:login.php');

?>