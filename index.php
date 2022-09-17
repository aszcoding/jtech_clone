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
      include("nav.php");?>

</head>

<body class="home">
  <a  name="top"></a>
  <main>
    <header id="nav_bars">
      <?php echo createHeader(); ?>
    </header>
  
    <div class="gallery_container">
      <!--CREATE PHP GALLERY-->
    </div>

<div class="home_body">
    <div class="home_intro">
      <h1>Club Wellness Evolutions</h1>
        <h4>Inspiration. Innovation. Integration.</h4>
    </div>

   <div class="home_intro_text">
    <h4>Solutions Moving Wellness From Where You Are, To Where You Want To Be.</h4>
    <p>Lifestyle Real Estate is a 134 Billion Dollar industry according to the 2018 Global Wellness Economy Monitor.
        Private Clubs have a unique opportunity and are well positioned to add or expand their programs and facilities
        to offer members a comprehensive wellness lifestyle while becoming a competitive choice for future members.</p>
        <br>

        <div class="home_body_img">
            <!--PHP CODE TO PULL BODY IMAGE AND INSERT HERE-->
        </div>

    <p>Club Wellness Evolutions collaborates with private club managers, boards and committees, architects, 
        vendors and other industry experts to plan the programs, facilities and operational model that best meets 
        the club’s specific needs. From feasibility studies to facility and floor plan layouts to staff recruitment and 
        long-term strategic planning, Club Wellness Evolutions offers a variety of services that set the standard of 
        private club wellness operations.</p>
        <br>
    <p>Our consultants take a data-driven team approach to creating an integrated wellness lifestyle ecosystem 
        within the club. Club Wellness Evolutions has over 20 years of experience in the private club industry and 
        has developed the process and efficiencies to guide you from concept development and design to long-
        term operational success.</p>
  </div>

  <div class="call_to_action">
    <hr>
    <h5 class="home_btn_heading">Learn More About Our Approach</h5>
    <button class="call_to_action_btn" href="services.php">Our Services</button>
    <hr>
  </div>
</div>

  <footer id="footer"></footer>

</main>
</body>
<!-- <script src="nav.js" async></script> -->
<script src="lightbox.js" async></script>
</html>
