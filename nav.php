<?php function createHeader(){ 
        $directoryURI = $_SERVER['REQUEST_URI'];
        $path = parse_url($directoryURI, PHP_URL_PATH);
        $components = explode('/', $path);
        $active_pg = $components[1];
?>

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
          <a href="index.php">Home</a>
          <a href="services.php">Services</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
        </nav>
      </div>
    </div>
    <nav class="full_nav">
        <ul class="top_links">

            <li class="top set1"><a class="<?php if ($active_pg=="index") {echo "active";} else {echo "";} ?>" href="index.php">Home</a></li>
            <li class="top set1"><a class="<?php if ($active_pg=="services") {echo "active";} else {echo "";} ?>" href="services.php">Services</a></li>
            <li class="logo_container"><img class="top_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions"></li>
            <li class="top set2"><a class="<?php if ($active_pg=="about") {echo 'active';} else {echo "";} ?>" href="about.php">About</a></li>
            <li class="top set2"><a class="<?php if ($active_pg=="contact") {echo "active";} else {echo "";} ?>" href="contact.php">Contact</a></li>
        </ul>
    </nav>
<?php } ?>