<!doctype html>
<html>
<?php $page="gallery"; ?>
<?php @require "includes/templates/doctop.php"; ?>
<?php @require "includes/templates/header.php"; ?>
<main>
  <?php @require "includes/pages/".$page.".php"; ?>
</main>
<?php @require "includes/templates/footer.php"; ?>
<?php @require "includes/templates/docbot.php"; ?>
</html>