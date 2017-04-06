<?php $page = "gallery-delete";
if($_SESSION["loggedIn"] !== "true"){
    header("Location: login");
}else{
      $loggedIn = "true";
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
       $sql = "SELECT FROM `gallery_images` WHERE `id` = $daID";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
           $filename = realpath($row['i_src']);
           if(is_writable($filename)){
             unlink($filename);
             $del = "DELETE FROM `gallery_images` WHERE `id` = $daID";
             $del = $conn->query($sql);
           }
          }
        }
        header("Location: gallery");
     }
?>
