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
</div>
<div class="back-img"></div>
</section>
<section id="formSection">
  <h2 class="hidden">Contact Form</h2>
  <form id="form" action="form.php" method="post" id="contactForm">
      <label for="name" id="name">Name</label>
        <input type="text" required id="name" size="30" placeholder="Please Enter Your Name">
      <label for="email" class="label">Email</label>
        <input type="email" required id="email" size="30" placeholder="Please Enter Your Email">
      <label for="subject"id="subjectLabel" class="label" >Subject</label>
        <input type="text" name="subject" required size="30" placeholder="Please Enter The Subject">
        <input type="textarea" rows=4 columns=50 required id="message" size="60" placeholder="Enter Your Message">
        <input type="submit" id="submit" value="Submit">
  </form>
</section>
