<?php $page = "gallery" ?>
<section id="splash" class="dark-overlay">
  <div class="banner">GALLERY<div class="back"></div></div>
  <h4 class="subheading">VIDEOS, PHOTOS &amp; NEWS</h4>
  <!-- <img src="img/ACTION-1.jpg" alt="background hockey game 1972"> -->
  <!-- <div class="callToAction">
    <div class="tagline">It's not what they did. It's how they did it.</div>
    <a href="story" class="ajax white button">learn more</a>
  </div> -->
  <a id="viewMore" href="#gallery" class="scroller white button">View</a>
  <!-- <div class="dark-overlay"></div> -->
  <div class="back-img"></div>
</section>
<section id="gallery" class="dark-overlay">
  <!-- <div class="dark-overlay"></div> -->
  <div class="inner">
  <?php for($i=0;$i<6;$i++):?>
  <a href="#" class="image parallax">
    <h3 class="imageHeader">ACTION</h3>
    <img src="img/ACTION-1.jpg" alt="">
  </a>
<?php endfor;?>
<div class="buttons">
  <?php $noPages = 10;?>
  <?php $currentPage = 1;?>
  <?php if($currentPage>4){echo '<a href="1" class="pageButton">First Page</a>';}?>
  <?php if($currentPage>1){echo '<a href='.($currentPage-1).'class="pageButton">Prev</a>';}?>
  <?php for($i=0;$i<4;$i++):?>
    <a href=<?php echo $i+1;?> class="pageButton"><?php echo $i+1;?></a>
  <?php endfor;?>
  <?php if($currentPage>1){echo '<a href='.($currentPage+1).'class="pageButton">Prev</a>';}?>
  <?php if($noPages>4){echo '<a href='. ($noPages). 'class="pageButton">Last Page</a>';}?>
</div>
</div>
</section>
