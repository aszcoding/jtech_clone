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
      include("nav.php");
?>

</head>

<body>
  <a  name="top"></a>
  <main>
    <header id="nav_bars">
    <?php echo createHeader(); ?>
    </header>
  
    <div class="facility_image_container">
      <img class="facility_image" src="content/services-sp/ic_1547766459_1600x462_true.jpg" alt="Massage tables">
    </div>

    <div class="services_intro">
      <h1>Club Wellness Evolutions Consulting Services</h1>
        <h2>Preparing for the club of the future — <br> From concept to creation and beyond.</h3>
          <p class="our_services">Our services support the wellness evolution of your club. Club Wellness Evolutions' comprehensive hands-on approach delivers a thorough, high-touch integrated consulting service for your club.</p>
    </div>

   <div class="list_of_services" id="services">
    <?php include("service_cards.php");?>

  </div>

  <div class="consulting_fees">
    <h4 class="consulting_fees_title">Consulting Fees</h4>
    <p>The Consulting service fees range from an hourly rate for specific work to a contract fee that encompasses the scope of a project. 
      Contact us to discuss how our services can assist with your unique club objectives.</p>
  </div>

  <div class="call_to_action">
    <hr>
    <h5>Interested In A Consultation?</h5>
    <button class="call_to_action_btn" href="contact.php">Contact Us</button>
    <hr>
  </div>

  <footer id="footer">
    <?php echo createFooter(); ?>
  </footer>

</main>
</body>
<script src="lightbox.js" async></script>
</html>
