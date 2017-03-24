<!doctype html>
<html>
<?php $page = "error" ?>
<?php $code = $_GET["code"];?>
<?php @require "includes/templates/doctop.php"; ?>
<?php @require "includes/templates/header.php"; ?>
<main id="pageContainer">
  <p class="codeName">Error Code <? echo $code;?></p>
  <p>This is a custom error page.</p>
</main>
<?php @require "includes/templates/footer.php"; ?>
<?php @require "includes/templates/docbot.php"; ?>
</html>
