<?php $page = "gallery";
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
  $loggedIn = "true";
}
 ?>
<section id="splash" class="dark-overlay">
  <div class="banner">BLOG<div class="back"></div></div>
  <br>
  <h4 class="subheading">SHARING THE STORY, EVERYDAY</h4>
  <a id="viewMore" href="#gallery" class="scroller white button">Read</a>
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
    if(!isset($_GET['page'])){
      $currentPage = 1;
    }else{
      $currentPage = $_GET['page'];
    }
    $limit = 10;
    $end = $limit * ($currentPage-1);
    $noResults=0;
    $sql = "SELECT * FROM `blogposts` ORDER BY `p_date` DESC LIMIT $limit OFFSET $end";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '<div class="image">';
        if(isset($loggedIn) && $loggedIn == "true"){
          echo '<a class="delete" href="blog-delete?id='.$row['id'].'">X</a>';
        }
        echo '<h3 class="imageHeader">'.$row['p_title'].'</h3><img src="'.$row['p_img_src'].'" alt="'.$row['p_content'].'"><p>'.$row['p_content'].'</p></div>';
        $noResults++;
      }
    } else {
      echo "<div class='centered'>Nothing posted right now!</div>";
    }
     ?>

<div class="buttons">
  <?php if($currentPage>$limit){echo '<a href="gallery?page=1" class="gallajax pageButton">First Page</a>';}?>
  <?php if($currentPage>1){echo '<a href="gallery?page='.($currentPage-1).'" class="gallajax pageButton">Prev</a>';}?>
  <?php for($i=$currentPage+1;$i<5;$i++):?>
    <a href=<?php echo '"gallery?page='.$i.'"';?> class="gallajax pageButton"><?php echo $i;?></a>
  <?php endfor;?>
  <?php if($noResults>=4){echo '<a href="gallery?page='. ($currentPage+1). '" class="gallajax pageButton">Next</a>';}?>
</div>
<?php
if(isset($loggedIn) && $loggedIn == "true"){
  echo '<a id="gallery-upload" class="white button" href="gallery-upload">Upload</a>';
}
 ?>

</div>
</section>
