<?php
    require "include.inc";
    session_start();
    HTMLStart("Map Page", false);
    HTMLNavigation();
    HTMLDecor();
?>

<!-- MAP WRAPPER -->
<main class="map-wrapper panel">

    <div class="item map-img">
        <h2>Where To Find Us</h2>
        <!-- Adds a map from Google Maps to center on our location -->
        <iframe width="600" height="500"
            src="https://maps.google.com/maps?q=172%20Delancey%20St,%20New%20York,%20NY%2010002&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>

</main>
        
<?php
    HTMLFooter();
    HTMLEnd();
?>