<?php
    require "include.inc";
    HTMLStart("Order Page", true);
    HTMLNavigation();
    HTMLDecor();
?> 

<main class="takeout-wrapper panel">

    <!-- ======== LEFT PANEL ======== -->
    <section class="takeout-menu" id="takeout-menu">
        <h1>TAKEOUT MENU</h1>

        <!-- NOTE: finish fixing the formatting for this toggle -->
        <details class="direction-toggle">
            <summary>directions</summary>

            <div class="dir_inner_box">
                Click a category to show the available items.
            </div>

            <div class="dir_inner_box">
                Drag an item to your cart.
            </div>

            <div class="dir_inner_box">
                Double click an item in your cart to remove it.
            </div>
        </details>


        <!-- NOTE: DONT GET RID OF THE JS VERSION YET -->

        <!-- JS VERSION -->
        <!-- <div class="category-button-panel">
            <button class="button" onclick="getPanel('takeout-panels/beveragePanel.php', 'category-panel');">beverages</button>
            <button class="button" onclick="getPanel('takeout-panels/sushiPanel.php', 'category-panel');">sushi</button>
            <button class="button" onclick="getPanel('takeout-panels/nigiriPanel.php', 'category-panel');">nigiri</button>
            <button class="button" onclick="getPanel('takeout-panels/ramenPanel.php', 'category-panel');">ramen</button>
            <button class="button" onclick="getPanel('takeout-panels/sidesPanel.php', 'category-panel');">sides</button>
            <button class="button" onclick="getPanel('takeout-panels/smallplatesPanel.php', 'category-panel');">small plates</button>
        </div> -->

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


    </section> <!-- end of takeout menu (left panel) -->


    <div class="vertical-divider"></div>


    <!-- ======== RIGHT PANEL ======== -->
    <section class="cart-panel">

        <div class="cart-heading">
            <h1>Your Cart</h1>
            <h1>qty</h1>
        </div>

        <div id="user-cart">
            <!-- this is where the added items will go -->
        </div>

        <div class="totalItems">
            Items in cart:
            <span id="itemsInCart">0</span>
        </div>

        <div class="totalPrice">
            Your total is:
            <span id="total">$0.00</span>
        </div>


        <button onclick="emptyCart();">
            CLEAR ORDER
        </button>

        <button onclick="placeOrder();">
            PLACE ORDER
        </button>

    </section> <!-- end of user cart (right panel) -->

</main>

<!-- these elements are hidden -->
<div class="invisible">
    <div class="drop-here"></div>
    <div class="item-quantity item" id="default-id">0</div>
</div>

<?php
    HTMLFooter();
    HTMLEnd();
?>