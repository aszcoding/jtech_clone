<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Services</title>
  <link rel="icon" type="favicon" href="assets/img/favicon/club_wellness_favicon.png" alt="Club Wellness favicon">
<link rel="preload" href='style.css' as="style" onload="this.rel = 'stylesheet'">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php include_once("config.php"); ?>

</head>

<body>
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
              <a href="#">Home</a>
              <a class="active" href="#">Services</a>
              <a href="#">About</a>
              <a href="#">Contact</a>
            </nav>
          </div>
        </div>
        
        <nav class="full_nav">
          <ul class="top_links">
            <li class="top set1"><a href="#">Home</a></li>
            <li class="top set1"><a class="active" href="#">Services</a></li>
            <li class="logo_container"><img class="top_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions"></li>
            <li class="top set2"><a href="#">About</a></li>
            <li class="top set2"><a href="#">Contact</a></li>
          </ul>
        </nav>
    </header>
  
    <div class="facility_image_container">
      <img class="facility_image" src="content/services-sp/ic_1547766459_1600x462_true.jpg" alt="Massage tables">
    </div>

    <div class="services_intro">
      <h1>Club Wellness Evolutions Consulting Services</h1>
        <h2>Preparing for the club of the future — <br> From concept to creation and beyond.</h3>
          <p class="our_services">Our services support the wellness evolution of your club. Club Wellness Evolutions' comprehensive hands-on approach delivers a thorough, high-touch integrated consulting service for your club.</p>
    </div>

   <div class="list_of_services">
    <div class="service_1">
      <div class="img_container"> 
          <img class="service_img" src="content/services/ic_1547765637_520x346_true.jpg"  alt="Arms on a desk with coffee and a laptop"/>
            <div class="overlay">
              <?php

                $sql = "SELECT service FROM service_titles WHERE id=1;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
                }}

              ?>
          </div>
        </div>
        <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=1;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
      </div>

    <div class="service_2">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1549899859_520x346_true.jpg" alt="Hands dumping a small bowl of cherry tomatoes into a salad">
          <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=2;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
   </div>
   <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=2;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}
            ?>
        </div>
    </div>

    <div class="service_3">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1549899952_520x346_true.jpg" alt="Concept map of a wellness center">
        <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=3;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=3;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
    </div>

    <div class="service_4">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1547765525_520x346_true.jpg" alt="Pair of hands between two laptops, taking notes in a notebook">
        <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=4;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=4;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
    </div>

    <div class="service_5">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1554303215_520x346_true.jpg" alt="Group of men and women in uniform, smiling">
        <div class="overlay">
    <?php

        $sql = "SELECT service FROM service_titles WHERE id=5;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        while($row = $result->fetch_assoc()){
        echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
      }}

        ?>
    </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=5;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

            ?>
        </div>
    </div>

    <div class="service_6">
      <div class="img_container">
        <img class="service_img" src="content/services/ic_1547765561_520x346_true.jpg" alt="Hands holding a tablet that's displaying charts">
        <div class="overlay">
          <?php

              $sql = "SELECT service FROM service_titles WHERE id=6;";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0){
              while($row = $result->fetch_assoc()){
              echo "<h3 class='service_title'>" . $row['service'] . "<br>" . "</h3>";
            }}

          ?>
        </div>
      </div>
      <div class="service_details">
           <?php

                $sql = "SELECT description FROM service_descriptions WHERE service_id=6;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = $result->fetch_assoc()){
              echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
                }}

                $conn->close();
            ?>
        </div>
    </div>
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
<script src="script.js" async></script>
</html>
