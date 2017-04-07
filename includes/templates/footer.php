<footer>
<div class="left">
  <?php
  if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
    echo '<a id="dashboard" class="ajax" href="dashboard">Dashboard</a>';
    echo '<a id="logout" href="logout">Logout</a>';
  }else{
    echo '<a id="login" class="ajax" href="login">Log in</a>';
  }
  ?>
</div>
<div class="right">
&copy; <?php echo date("Y");?> Team Canada 1972
</div>
</footer>
