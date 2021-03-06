<?php $page = "blog";
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
  $loggedIn = "true";
}
 ?>
<section id="splash" class="">
  <div id="fade">
  <div class="banner">
    <!-- <img id="logo" src="img/logo.png" alt=""> -->
    <div class="spacer"></div>
    <div class="back">
    <div class="fitText">BLOG</div>
    </div>
  <div class="callToAction">
    <h4 class="subheading">SHARING THE STORY, EVERYDAY</h4>
    <a id="viewMore" href="#blog" class="scroller white button">Read</a>
  </div>
</div>
</div>
<div class="back-img"></div>
</section>

<section id="blog" class="dark-overlay">
  <h2 class="hidden">Current Articles</h2>
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
        echo '<div class="post">';
        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
          echo '<a class="delete" href="blog-delete?id='.$row['id'].'">X</a>';
        }
        echo '<h3 class="postHeader">'.$row['p_title'].'</h3>';
        if($row['p_img_src']!=NULL){
          echo '<img src="'.$row['p_img_src'].'" alt="'.$row['p_content'].'">';
        }else{
          echo '<img src="img/uploads/blog/default.png" alt="post">';
        }
        echo '<p class="content">'.$row['p_content'].'</p></div>';
        $noResults++;
      }
    } else {
      echo "<div class='centered'>Nothing posted right now!</div>";
    }
     ?>

<div class="buttons hidden">
  <?php if($currentPage>$limit){echo '<a href="gallery?page=1" class="gallajax pageButton">First Page</a>';}?>
  <?php if($currentPage>1){echo '<a href="gallery?page='.($currentPage-1).'" class="gallajax pageButton">Prev</a>';}?>
  <?php for($i=$currentPage+1;$i<5;$i++):?>
    <a href=<?php echo '"gallery?page='.$i.'"';?> class="gallajax pageButton"><?php echo $i;?></a>
  <?php endfor;?>
  <?php if($noResults>=4){echo '<a href="gallery?page='. ($currentPage+1). '" class="gallajax pageButton">Next</a>';}?>
</div>
</div>
</section>
