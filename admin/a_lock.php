<?php
session_start();
include "../config.php";
include "../functions.php";

check_session();
mysqli_close($con);
?>