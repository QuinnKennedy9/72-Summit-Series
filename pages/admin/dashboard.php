<?php
$page = 'admin/dashboard';
if($_SESSION["loggedIn"] !== "true"){
    header("Location: login");
}
?>
