<?php

    include "include.inc";

    HTMLStart( "Contact Page" )
    
    WrapperStart();

    HTMLNavigation();

    HTMLDecor();

?>

        <!-- CONTACT WRAPPER -->
        <main class="contact-wrapper panel">
            
            <section class="item">
                <h1>Where To Reach Us</h1>
                <!-- Each line adds an image of a flower to make it look very neat -->
                <p>Phone: (212) 614-1810</p>
                <div class="decorative-div">
                    <img src="assets/flower1.svg">
                </div>
                <!-- Each has a hyperlink that leads to their instagram, facebook, twitter, and youtube -->
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

            <!-- SIDEBAR CONTENT -->
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

    WrapperEnd();

    HTMLEnd();

?>