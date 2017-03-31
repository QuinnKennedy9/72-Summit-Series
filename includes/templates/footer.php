<footer>
<div class="left">
  <?php
  if($_SESSION["loggedIn"] == "true"){
    echo '<a id="dashboard" href="dashboard">Dashboard</a>';
    echo '<a id="logout" href="logout">Logout</a>';
  }else{
    echo '<a id="login" href="login">Log in</a>';
  }
  ?>
</div>
<div class="right">
&copy; <?php echo date("Y");?> Team Canada 1972
</div>
</footer>
