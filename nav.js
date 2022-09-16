function createTopNav(){
    const header = document.getElementById('nav_bars');
    header.innerHTML +=
    `<input type="checkbox" id="toggle" alt="Open hamburger nav"/>
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
            <li class="top set1"><a href="index.php">Home</a></li>
            <li class="top set1"><a href="services.php">Services</a></li>
            <li class="logo_container"><img class="top_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions"></li>
            <li class="top set2"><a href="about.php">About</a></li>
            <li class="top set2"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
`
document.querySelectorAll("a").forEach((navLink) => {
    navLink.addEventListener("click", highlightActive, false);
});

function highlightActive(e) {
    document.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");
    console.log(`link clicked: $e.target`);
}

};

createTopNav();


function createFooter(){
    const footer = document.getElementById('footer');
    footer.innerHTML +=
    `<div class="to_top">
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
            <li class="bottom"><a href="index.php">Home</a></li>
            <li class="bottom"><a href="services.php">Services</a></li>
        </ul>
        <ul class="bottom_links_col2">
            <li class="bottom"><a href="about.php">About</a></li>
            <li class="bottom"><a href="contact.php">Contact</a></li>
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
    `
};

createFooter();

