<?php $page = "gallery" ?>
<section id="splash" class="dark-overlay">
  <div class="banner">GALLERY<div class="back"></div></div>
  <h4 class="subheading">VIDEOS, PHOTOS &amp; NEWS</h4>
  <a id="viewMore" href="#gallery" class="scroller white button">View</a>
  <!-- <div class="dark-overlay"></div> -->
  <div class="back-img"></div>
</section>
<section id="gallery" class="dark-overlay">
  <!-- <div class="dark-overlay"></div> -->
  <div class="inner clearfix">
    <!-- INSERT GALLERY IMAGES -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_teamcanada";
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $noPages = 0;
    $sql = "SELECT * FROM `gallery_images`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '<a href="#" class="image"><h3 class="imageHeader">'.$row['i_title'].'</h3><img src="'.$row['i_src'].'" alt="'.$row['i_desc'].'"></a>';
        $noPages++;
      }
    } else {
      echo "<div class='centered'>Nothing in the gallery right now!</div>";
    }
     ?>

<div class="buttons">
  <?php $currentPage = 1;?>
  <?php if($currentPage>4){echo '<a href="gallery?page=1" class="gallajax pageButton">First Page</a>';}?>
  <?php if($currentPage>1){echo '<a href=gallery?page='.($currentPage-1).'class="gallajax pageButton">Prev</a>';}?>

  <?php for($i=0;$i<4;$i++):?>
    <a href="gallery?page=<?php echo $i+1;?>" class="gallajax pageButton"><?php echo $i+1;?></a>
  <?php endfor;?>
  <?php if($currentPage>1){echo '<a href=gallery?page='.($currentPage+1).'class="gallajax pageButton">Prev</a>';}?>
  <?php if($noPages>4){echo '<a href=gallery?page='. ($noPages). 'class="gallajax pageButton">Last Page</a>';}?>
</div>
<?php
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "true"){
  echo '<a id="gallery-upload" href="gallery-upload">Upload</a>';
}
 ?>
</div>
</section>
