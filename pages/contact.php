<?php $page = "contact" ?>
<section id="splash" class="">
  <h2 class="hidden">Contact Page</h2>
  <div id="fade">
  <div class="banner">
    <!-- <img id="logo" src="img/logo.png" alt=""> -->
    <div class="spacer"></div>
    <div class="back">
    <div class="fitText">CONTACT US</div>
    </div>
  <div class="callToAction">
    <h4 class="subheading">Questions, Partnerships, and Events</h4>
    <a href="#formSection" class="scroller white arrow">SCROLL</a>
  </div>
</div>
  <div class="dark-overlay darker"></div>
</div>
<div class="back-img"></div>
</section>
<section id="formSection">
  <form id="form" action="form.php" method="post">
    <fieldset>
      <label for="name">Name</label>
        <input type="text" required id="name" size="30" placeholder="Please Enter Your Name">
      <label for="email">Email</label>
        <input type="email" required id="email" size="30" placeholder="Please Enter Your Email">
      <label for="subject"id="subjectLabel">Subject:</label>
        <label >Questions</label>
        <input type="radio" name="subject" size="30">
        <label >Partnerships</label>
        <input type="radio" name="subject" size="30">
        <label >Events</label>
        <input type="radio" name="subject" size="30">
        <input type="textarea" required id="message" size="60" placeholder="Enter Your Message">
        <input type="submit" id="submit" value="Submit">
    </fieldset>
  </form>

</section>
