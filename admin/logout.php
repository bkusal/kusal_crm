<?php
session_start();
session_destroy();

echo "Session destroyed!";
header("Refresh:3; url=../admin/loginad.php");


?>
