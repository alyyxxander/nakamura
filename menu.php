<?php
    require "include.inc";
    session_start();
    HTMLStart("Menu Page", true);
    HTMLNavigation();
    HTMLDecor();
?>

<!-- MENU WRAPPER -->
<main class="menu-wrapper">

        <div class="menu-top-panel">
            <!-- PHP VERSION -->
            <div class="category-button-panel">
                <button class="button" onclick="loadMenu('drink', 'category-panel');">beverages</button>
                <button class="button" onclick="loadMenu('alcoholic-drink', 'category-panel');">alcoholic beverages</button>
                <button class="button" onclick="loadMenu('sushi', 'category-panel');">sushi</button>
                <button class="button" onclick="loadMenu('nigiri', 'category-panel'); resetItemListeners();">nigiri</button>
                <button class="button" onclick="loadMenu('ramen', 'category-panel');">ramen</button>
                <button class="button" onclick="loadMenu('side', 'category-panel');">sides</button>
                <button class="button" onclick="loadMenu('small-plate', 'category-panel');">small plates</button>
            </div>
    
            <!-- this is where the panel of items will appear -->
            <div id="category-panel"></div>
        </div>


    <!-- Panel for References -->
    <section class="reference panel">
        <div class="panel-title">REFERENCE</div>

        <div class="item">
            <div class="name">Sashimi</div>
            <div class="description">
                Sashimi is just the meat, served without other ingredients.
            </div>
        </div>

        <div class="item">
            <div class="name">Sushi</div>
            <div class="description">
                Sushi features the meat and adds rice and other ingredients, such as vegetables, which are all rolled up in a sheet of nori (seaweed) and then sliced into pieces.
            </div>
        </div>

        <div class="item">
            <div class="name">Nigiri</div>
            <div class="description">
                Nigiri is a dish that's halfway in between sashimi and sushi. Nigiri is sashimi that's served on a molded rectangle of rice.
            </div>
        </div>
    </section>

</main>

<?php
    HTMLFooter();
    HTMLEnd();
?>