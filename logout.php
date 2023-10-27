<?php 

session_start();
 if (isset($_SESSION['user_id'])) {
    session_unset();
    session_destroy();
 }

if (isset($_SESSION['user_id'])) {
echo '<a href="logout.php"logout></>a>';
}
 header('location: index.php');
 exit();
?>
