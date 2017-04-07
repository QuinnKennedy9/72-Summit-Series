<?php $page = 'dashboard';
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
  $loggedIn = "true";
}else{
  header("Location: login");
}
?>
<section id="splash" class="">
  <div id="fade">
  <div class="banner">
    <!-- <img id="logo" src="img/logo.png" alt=""> -->
    <div class="spacer"></div>
    <div class="back">
    <div class="fitText">DASHBOARD</div>
    </div>
    <div id="dash-links">
      <a href="gallery-upload">Upload to Gallery</a>
      <!-- <a href="gallery-upload">Upload to Gallery</a> -->
    </div>
</div>
  <div class="dark-overlay darker"></div>
</div>
<div class="back-img"></div>
</section>
