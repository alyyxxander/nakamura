<?php
    require "include.inc";
    HTMLStart("Home Page", true);
    HTMLNavigation();
    HTMLDecor();
?>

    <main class="home-wrapper">

        <div class="intro">

            <!--this will be invisible, but will still control the size of the div-->
            <img src="assets/home/Nakamura-Lights.jpeg"> 
            
            <div>  <!-- put actual content of intro here -->
                <h2>Welcome to Nakamura NYC</h2>
                <h2>We welcome you to come and enjoy our fresh Japanese Ramen, Sushi, Nigiri, and more!</h2>
            </div>
        </div>

        <div class="carousel-container">
            <div class="panel">
                <h1>Small Plates</h1>
                <h3>These are our speciality small plate</h3>
                <h3>Click arrow icons on the sides to browse</h3>
            </div>

            <!-- IMAGE CAROUSEL -->
            <section class="panel image-carousel">
                <div class="carousel-tile fade">
                    <img src="assets/home/Chicken-Gyoza.jpeg" alt= "Chicken-Gyoza">
                    <h2>Chicken Gyoza (7 Piece) - $10</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Chili-Cabbage.jpeg" alt="Chili Cabbage">
                    <h2>Chili Cabbage - $6</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Edemame-Pesto.jpeg" alt="Edemame Pesto">
                    <h2>Edamame Pesto - $8</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Mushroom-Cauliflower.jpeg" alt="Mushroom Cauliflower">
                    <h2>Mushroom Cauliflower - $10</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Shishito-Peppers.jpeg" alt="Shishito Peppers">
                    <h2>Shishito Peppers - $8</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Teriyaki-Chashu.jpeg" alt="Teriyaki Chashu">
                    <h2>Teriyaki Chashu (pork or chicken) - $9</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Yuzu-Wings.jpeg" alt="Yuzu Wings">
                    <h2>Yuzu Wings - $15</h2>
                </div>

                <div class="carousel-tile fade">
                    <img src="assets/home/Yuzu-Wonton-Soup.jpeg" alt="Yuzu Wonton Soup">
                    <h2>Spicy Yuzu Wonton Soup - $10</h2>
                </div>

                <!-- buttons on the sides of the image carousel -->
                <i id="next" class="fa-solid fa-chevron-right" onclick="showNextTile(1);"></i>
                <i id="prev" class="fa-solid fa-chevron-left" onclick="showNextTile(-1);"></i>

            </section> <!-- end of carousel-->

        </div>

    </main>

<?php
    HTMLFooter();
    HTMLEnd();
?>