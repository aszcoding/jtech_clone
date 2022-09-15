<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Services</title>
  <link rel="icon" type="favicon" href="assets/img/favicon/club_wellness_favicon.png" alt="Club Wellness favicon">
<link rel="stylesheet" type="text/css" href='style.css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php include_once("config.php");
      include("main_services_query.php"); 
?>

</head>

<body class="home">
  <a  name="top"></a>
  <main>
    <header>
        <input type="checkbox" id="toggle" alt="Open hamburger nav"/>
        <label for ="toggle" title="Hamburger Style Navigation Menu" class="hamburger">
          <div class="top_line"> </div>
          <div class="middle_line"></div>
          <div class="bottom_line"></div>
        </label>
        <div class="ham_nav">
          <div class="ham_nav_wrapper">
            <img class="ham_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions">
            <nav class="ham_nav_links">
              <a href="index.php" class="active">Home</a>
              <a href="services.php">Services</a>
              <a href="about.php">About</a>
              <a href="contact.php">Contact</a>
            </nav>
          </div>
        </div>
        
        <nav class="full_nav">
          <ul class="top_links">
            <li class="top set1"><a class="active" href="index.php">Home</a></li>
            <li class="top set1"><a href="services.php">Services</a></li>
            <li class="logo_container"><img class="top_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions"></li>
            <li class="top set2"><a href="about.php">About</a></li>
            <li class="top set2"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
    </header>
  
    <div class="gallery_container">
      <!--CREATE PHP GALLERY-->
    </div>

    <div class="services_intro">
      <h1>Club Wellness Evolutions</h1>
        <h2>Preparing for the club of the future — <br> From concept to creation and beyond.</h3>
          <p class="our_services">Our services support the wellness evolution of your club. Club Wellness Evolutions' comprehensive hands-on approach delivers a thorough, high-touch integrated consulting service for your club.</p>
    </div>

   <div class="list_of_services" id="services">
    <?php include("service_cards.php");?>

  </div>

  <div class="consulting_fees">
    <h4>Consulting Fees</h4>
    <p>The Consulting service fees range from an hourly rate for specific work to a contract fee that encompasses the scope of a project. 
      Contact us to discuss how our services can assist with your unique club objectives.</p>
  </div>

  <div class="consultation">
    <hr>
    <h5>Interested In A Consultation?</h5>
    <button id="contact_us_btn" href="#">Contact Us</button>
    <hr>
  </div>

  <footer>
    <div class="to_top">
      <button id="back_to_top_btn" onclick="location.href='#top'">
      <div class="arrow_container">
        <img class="up_arrow" src="assets/img/footer/circle-chevron-top-svgrepo-com.svg" alt="White circle with white chevron that's pointing upward in the center"/>
      </div>
      <div class="text">
        <p id="to_top_text">Back to top</p>
      </div>
      </button>
    </div>

    <div class="footer_logo">
      <img class="bottom_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions">
    </div>

    <div class="bottom_nav">
      <div class="contact_info">
        <div class="address">
              <p>Address:<br>
              216 Anhinga Lane<br>
              Jupiter, FL 33458
              </p>
        </div>
        <div class="nav_links">
          <ul class="bottom_links_col1">
              <li class="bottom"><a href="#">Home</a></li>
              <li class="bottom"><a href="#">Services</a></li>
          </ul>
          <ul class="bottom_links_col2">
              <li class="bottom"><a href="#">About</a></li>
              <li class="bottom"><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="phone">
          <p>Phone:<br>
          <span id="phone_number">(561)310-2499</span>
          </p>
        </div>
      </div>
    </div>

    <div class="bottom_of_footer">
    <div class="jtech">
      <a class="jtech_link" href="https://jtech.digital/">Website Design by JTech communications</a>
    </div>

    <div class="copyright">
      <p>© 2022 Club Wellness Evolutions </p>
    </div>
    </div>
  
  </footer>

</main>
</body>
<script src="lightbox.js" async></script>
</html>
