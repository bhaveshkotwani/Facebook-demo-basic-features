<?php
session_start();
session_destroy();
header("location:facebook.php?status=logout");
?>