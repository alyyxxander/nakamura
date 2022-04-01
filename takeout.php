<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Takeout Page</title>
</head>

<body>

    <div class="primary-wrapper">

        <!-- NAV PANEL -->
        <nav class="nav-panel panel">
            <nav class="button"><a href="index.html">HOME</a></nav>

            <nav class="button"><a href="map.html">MAP</a></nav>

            <nav class="button"><a href="contact.html">CONTACT</a></nav>

            <nav class="button"><a href="about.html">ABOUT</a></nav>

            <nav class="button"><a href="menu.html">MENU</a></nav>

            <nav class="button"><a href="takeout.html">ORDER</a></nav>
        </nav>

        <!-- SIDE DECOR -->
        <aside class="left panel decor"></aside>
        <aside class="right panel decor"></aside>
        
        <main class="takeout-wrapper panel">

            <!-- ======== LEFT PANEL ======== -->
            <section class="takeout-menu" id="takeout-menu">
                <h1>TAKEOUT MENU</h1>


                <details class="direction-toggle">
                    <summary>directions</summary>

                    <div class="dir_inner_box">
                        Click a category to show the available items.
                    </div>
 
                    <div class="dir_inner_box">
                        Drag an item to your cart.
                    </div>

                    <div class="dir_inner_box">
                        Double click an item inn your cart to remove it.
                    </div>


                
                </details>



                <div class="category-button-panel">
                    <button class="button" onclick="getPanel('takeout-panels/beveragePanel.html', 'category-panel');">beverages</button>
                    <button class="button" onclick="getPanel('takeout-panels/sushiPanel.html', 'category-panel');">sushi</button>
                    <button class="button" onclick="getPanel('takeout-panels/nigiriPanel.html', 'category-panel');">nigiri</button>
                    <button class="button" onclick="getPanel('takeout-panels/ramenPanel.html', 'category-panel');">ramen</button>
                    <button class="button" onclick="getPanel('takeout-panels/sidesPanel.html', 'category-panel');">sides</button>
                    <button class="button" onclick="getPanel('takeout-panels/smallplatesPanel.html', 'category-panel');">small plates</button>
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

                <!-- empties user cart -->
                <button onclick="emptyCart();">
                    CLEAR ORDER
                </button>

                <!-- This will "place the order", showing an alert box that shows price and clearing the previous order -->
                <button onclick="placeOrder();">
                    PLACE ORDER
                </button>

            </section> <!-- end of user cart (right panel) -->

        </main> <!-- end of main panel-->

        <!-- FOOTER -->
        <footer class="panel">
            <span>COMP-205: Web-Based Application Development</span>
            <span>Spring 2022</span>
            <span>Group 5</span>
        </footer>

    </div>



    <!-- these elements are hidden -->
    <div class="invisible">
        <div class="drop-here"></div>
        <div class="item-quantity item" id="default-id">0</div>
    </div>

</body>

</html>