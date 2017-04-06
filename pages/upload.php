<?php $page = "upload";
if($_SESSION["loggedIn"] !== "true"){
    header("Location: login");
}else{
  $loggedIn = "true";
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $exts= array("jpeg","jpg","png");

      if(in_array($file_ext,$exts)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){ //2MB in binary
         $errors[]='File size must be less than 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../img/uploads/".$file_name);
         echo "<script>alert('Your image has been successfully uploaded.')</script>";
          header("Location: dashboard");
      }else{
        //  print_r($errors);
      }
}
?>

<form action="admin/upload" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>
