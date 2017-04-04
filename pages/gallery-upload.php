<?php $page = "gallery-upload";
if($_SESSION["loggedIn"] !== "true"){
    header("Location: login");
}else{
  $loggedIn = "true";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors= array();
      $file_name = $_FILES['p_img']['name'];
      $file_size =$_FILES['p_img']['size'];
      $file_tmp =$_FILES['p_img']['tmp_name'];
      $file_type=$_FILES['p_img']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['p_img']['name'])));

      $exts= array("jpeg","jpg","png");

      if(in_array($file_ext,$exts)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){ //2MB in binary
         $errors[]='File size must be less than 2 MB';
      }

      function format($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      function srcFormat($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if(empty($errors)==true && $loggedIn === "true"){
         move_uploaded_file($file_tmp,"img/uploads/gallery/".$file_name);
          //INSERT INTO DB
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $dbname = "db_teamcanada";

                 $conn = new mysqli($servername, $username, $password,$dbname);
                 if ($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
                 }
                 $i_title = format($_POST['i_title']);
                 $i_tags = format($_POST['i_tags']);
                 $i_desc = format($_POST['i_desc']);
                  $i_src = "img/uploads/gallery/".$file_name;

                 $sql = "INSERT INTO `gallery_images` (`id`, `i_albums`, `i_tags`, `i_src`, `i_title`, `i_desc`) VALUES (NULL, NULL, '$i_tags', '$i_src', '$i_title', '$i_desc')";
                 $result = $conn->query($sql);
                   echo "<script>alert('Your image has been successfully uploaded.');</script>";
                   header("Location: gallery");
                  // INSERT INTO `blogposts` (`id`, `p_title`, `p_date`, `p_time`, `p_content`, `p_img_src`, `p_tags`) VALUES (NULL, 'title', '2017-03-31', CURRENT_TIMESTAMP, 'text', 'imgsrc', 'tag,tags,the,tags');
                  // INSERT INTO `gallery_images` (`id`, `i_albums`, `i_tags`, `i_src`, `i_title`, `i_desc`) VALUES (NULL, NULL, 'tags', 'src', 'title', 'description');
              }else{
        //  print_r($errors);
      }
}
?>

<section id="splash">
  <div class="banner">UPLOAD<div class="back"></div></div>
  <h4 class="subheading">UPLOAD A PHOTO TO THE GALLERY</h4>
  <div class="dark-overlay"></div>
  <div class="back-img"></div>
</section>

<form id="upload" action="gallery-upload" method="POST" enctype="multipart/form-data">
  <label for="i_title">Image Title:</label>
  <input type="text" name="i_title" id="i_title">

  <label for="i_desc">Image Description:</label>
  <input type="text" name="i_desc" id="i_desc">

  <label for="i_tags">Image Tags:</label>
  <input type="text" name="i_tags" id="i_tags">

    <label for="p_img">Select image to upload:</label>
    <input type="file" name="p_img" id="p_img">
    <input type="submit" value="Upload Image" name="submit">
</form>