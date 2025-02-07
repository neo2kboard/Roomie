<?php

?>

<!DOCTYPE html>
<html lang="en">
  <?php include('./includes/header.php'); ?>

  <body>
    <!-- Navigations -->
    <?php include('./includes/navbar.php'); ?>

    <section id="profile">
      <div class="section__pic-container">
        <img src="./images/home.png" alt="John Doe profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hi, Welcome to</p>
        <h1 class="title">ROOMIE</h1>
        <p class="section__text__p2">You Stay, We Slay</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./images/doc.pdf')"
          >
            Download DS
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./images/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="window.open('https://linkedin.com', '_blank')"
          />
          <img
            src="./images/github.png"
            alt="My Github profile"
            class="icon"
            onclick="window.open('https://github.com', '_blank')"
          />
        </div>
      </div>
    </section>

    <?php 
      include('./pages/about.php'); 
      include('./pages/experience.php'); 
      include('./pages/projects.php'); 
      include('./pages/contact.php'); 
      include('./includes/footer.php');
      include('./includes/scripts.php');
    ?>


  </body>
</html>
