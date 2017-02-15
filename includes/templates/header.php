<header>
<nav id="mainNav">
  <h2 class="hidden">Main Navigation</h2>
  <img class="logo" src="img/logo.jpg">
  <a href="#" class="hamburger">
    <div>
    <div class="top">
    </div>
    <div class="mid">
    </div>
    <div class="bot">
    </div>
  </div>
  </a>
  <ul class="hidden">
    <li><a href="home" class=<?php if($page==="home"){echo 'current';} ?>>Home</a></li>
    <li><a href="story" class=<?php if($page==="story"){echo 'current';} ?>>Story</a></li>
    <li><a href="gallery" class=<?php if($page==="gallery"){echo 'current';} ?>>Gallery</a></li>
    <li><a href="partnerships" class=<?php if($page==="partnerships"){echo 'current';} ?>>Partnerships</a></li>
    <li><a href="contact" class=<?php if($page==="contact"){echo 'current';} ?>>Contact</a></li>
  </ul>
  <div class="left"></div>
  <div class="right"></div>
</nav>
</header>
<div id="loading">
  <img src="img/loading.gif">
</div>
