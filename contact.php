<?php
    require "include.inc";
    session_start();
    HTMLStart("Contact Page", false);
    HTMLNavigation();
    HTMLDecor();
?>

    <!-- CONTACT WRAPPER -->
    <main class="contact-wrapper panel">
        
        <section class="item">
            <h1>Where To Reach Us</h1>
            
            <p>Phone: (212) 614-1810</p>
            <div class="decorative-div">
                <img src="assets/flower1.svg">
            </div>
            
            <p> Instagram: <a href="https://www.instagram.com/nakamuranyc/"> @nakamuranyc </a></p>
            <div class="decorative-div">
                <img src="assets/flower2.svg">
            </div>

            <p>Facebook: <a href="https://www.facebook.com/nakamura.ratube"> @nakamura.ratube </a></p>
            <div class="decorative-div">
                <img src="assets/flower1.svg">
            </div>

            <p>Twitter: <a href="https://twitter.com/RaTubeNYC"> @RaTubeNYC </a></p>
            <div class="decorative-div">
                <img src="assets/flower2.svg">
            </div>

            <p>YouTube: <a href="https://www.youtube.com/c/RaTubeNakamura/featured"> RaTube </a></p>
            <div class="decorative-div">
                <img src="assets/flower1.svg">
            </div>

        </section>

        <!-- RESTAURANT HOURS -->
        <section class="item">
            <h1>Hours</h1>
            <p>Mon: 12pm - 9pm</p>
            <p>Tue: 12pm - 9pm</p>
            <p>Wed: 12pm - 9pm</p>
            <p>Thu: 12pm - 9pm</p>
            <p>Fri: 12pm - 10pm</p>
            <p>Sat: 12pm - 10pm</p>
            <p>Sun: Closed</p>
        </section>

    </main> 
        
<?php
    HTMLFooter();
    HTMLEnd();
?>