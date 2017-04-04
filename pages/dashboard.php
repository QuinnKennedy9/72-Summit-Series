<?php $page = 'dashboard';
if($_SESSION["loggedIn"] !== "true"){
    header("Location: login");
}else{
  $loggedIn = "true";
}
?>
