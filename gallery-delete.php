<?php session_start(); ?>
<!doctype html>
<html>
<?php $page = "gallery-delete";
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
  //REMOVE FROM DB
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_teamcanada";

  $conn = new mysqli($servername, $username, $password,$dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $daID = $_GET['id'];
  $sql = "DELETE FROM `gallery_images` WHERE `id` = $daID";
  $result = $conn->query($sql);
  header("Location: gallery");
}else{
  header("Location: login");
     }
?>
</html>
