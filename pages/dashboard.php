<?php $page = 'dashboard';
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
  $loggedIn = "true";
}else{
  header("Location: login");
}
?>
