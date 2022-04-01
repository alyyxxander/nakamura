<?php

    include "include.inc";

    HTMLStart( "About Page" );
    
    WrapperStart();

    HTMLNavigation();

    HTMLDecor();

?> 
        <main class="about-wrapper panel">
            <!-- Centers the text on page -->
            <section class="item vcenter">
                <h1>About Us</h1>

                <p>Chef Shigetoshi Nakamura debuts his first restaurant in the United States.</p>

                <p>Hailed as one of only 4 "Ramen Gods" Chef Naka experienced colossal success in Japan after he opened Nakamura-Ya when he was 22.</p>

                <p>Always seeking to share his craft with America, he partnered up with Sun Noodle, the leading US-based ramen noodle manufacturer, and started building up a network state side.</p>

                <p> In the US, Chef Nakamura debuted at Sun Noodle's "Ramen Lab" where he again received critical acclaim.</p>

                <p>With a network of support created through Sun Noodle, and the success at Ramen Lab, Chef Naka was ready to open his own shop: Nakamura.</p>
            </section>
            <!-- adds the image of Chef Nakamura -->
            <img src="assets/About/ramen-nakamura-about.jpg" alt="Chef Shigetoshi Nakamura" style = "border-radius:5px;width: auto;height: auto;max-width: 100%;">

        </main>

<?php

HTMLFooter();

WrapperEnd();

HTMLEnd();

?>