const fullNav = () => {
    document.getElementsByTagName("header").innerHTML +=
    `<nav id="full_nav">
        <ul class="top_links">
            <li class="top set1"><a class="active" href="index.php">Home</a></li>
            <li class="top set1"><a href="services.php">Services</a></li>
            <li class="logo_container"><img class="top_logo" src="assets/img/main/club-wellness-evolutions.svg" alt="Club Wellness Evolutions"></li>
            <li class="top set2"><a href="about.php">About</a></li>
            <li class="top set2"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
`};
