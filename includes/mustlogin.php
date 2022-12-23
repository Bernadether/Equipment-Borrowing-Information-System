<?php
if(empty($_SESSION['UserID'])) {
    echo '<script> location.replace("../logout.php"); </script>';
    exit;
}