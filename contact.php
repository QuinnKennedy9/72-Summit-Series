<?php session_start(); ?>
<!doctype html>
<html>
<?php $page="contact"; ?>
<?php @require "includes/templates/doctop.php"; ?>
<?php @require "includes/templates/header.php"; ?>
<main id="pageContainer">
  <?php @require "pages/".$page.".php"; ?>
</main>
<?php @require "includes/templates/footer.php"; ?>
<?php @require "includes/templates/docbot.php"; ?>
</html>
