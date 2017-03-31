<footer>
<div class="left">
  <?php
  if($_SESSION["loggedIn"] == "true"){
    echo '<a id="logout" href="logout">Logout</a>';
  }else{
    echo '<a id="logout" href="login">Log in</a>';
  }
  ?>
</div>
<div class="right">
&copy; <?php echo date("Y");?> Team Canada 1972
</div>
</footer>
