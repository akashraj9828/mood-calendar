<?php
// if(isset($_SESSION['u_id'])){
//     echo "<span> you are logged in!!</span>";
// }
session_start();
include_once 'includes/login.inc.php';
include_once 'includes/signup.inc.php';
include_once 'includes/upload.inc.php';
include_once 'header.php';
include_once 'clndr.script.php';
include_once 'content.php';
include_once 'footer.php';
