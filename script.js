

// variable to hold the total # of items in users cart
var itemsInCart = 0;

// create a list of nodes with the class "item"
var itemList = document.querySelectorAll(".item");

// variables to hold the item currently being dragged, and the price of it
var beingDraggedID, itemPrice;

// create a variable to hold the users total
var total = 0;

// make a connstannt that refers to the users cart
const userCart = document.getElementById("user-cart");

// make a constant that refers to the "dropHere" box
const tempBox = document.querySelector(".drop-here");

// variable that refers to the quantity box, which is a hidden element on the page
var qtyBox = document.querySelector(".item-quantity");

// variable to hold the current item panel displayed on the takeout page
var currentPanel = "";

// check if a userCart exists on the page
if (userCart != null) {
    //add listeners to the userCart
    userCart.addEventListener("dragover", dragOver);
    userCart.addEventListener("dragenter", dragEnter);
    userCart.addEventListener("dragleave", dragLeave);
    userCart.addEventListener("drop", dragDrop);
}


//====================================== USER INTERACTION FUNCTIONS
function dragStart() {
    beingDraggedID = this.id;
    itemPrice = this.dataset.price;

    //display a "drop here" box
    userCart.appendChild(tempBox);
}

function dragEnd() {
    //reset the beingDraggedID and itemPrice variables
    beingDraggedID = null;
    itemPrice = null;

    //remove the "drop-here" box
    userCart.removeChild(tempBox);
}

function dragOver(event) {
    event.preventDefault();
}

function dragEnter(event) {
    event.preventDefault();
}

function dragLeave() {

}

function dragDrop() {
    //get the item
    var itemChosen = document.querySelector("#takeout-menu #" + beingDraggedID);

    //get the same item from the cart
    var cartItem = document.querySelector("#user-cart #" + beingDraggedID);

    // check if the item already exists in the cart
    if (cartItem == null) {
        // if it doesnt already exist, create a copy of the chosen item and add it to the cart
        this.appendChild(itemChosen.cloneNode(true));

        // reset this variable now that it exists
        cartItem = document.querySelector("#user-cart #" + beingDraggedID);

        //add a quantity attribue
        cartItem.setAttribute("data-qty", Number(1));
        addQtyBox();

        cartItem.addEventListener("dblclick", doubleClick);

        updatePrice();

    } else {    // if it already exists

        //increase the item quantity
        cartItem.dataset.qty = Number(cartItem.dataset.qty) + 1;

        updatePrice();
    }

    itemsInCart++;

    //display new quantity
    updateQty();
}

function doubleClick() {
    
    var doubleClickedID = this.id;

    //ask the user if they want to remove the clicked item
    var choice = window.confirm("Remove item from cart?");

    if (choice == true) {
        removeFromCart(doubleClickedID);
    }
}

//====================================== FUNCTIONS FOR TAKEOUT & ORDERING
function removeFromCart(itemID) {

    //get the item from the cart
    var targetItem = document.querySelector("#user-cart #" + itemID);
    
    //decrease the item qty by 1
    var newQty = Number(targetItem.getAttribute("data-qty")) - 1;

    //set the price to be NEGATIVE, so it's SUBTRACTED from the total price instead of added
    itemPrice = Number(targetItem.getAttribute("data-price")) * Number(-1);
    updatePrice();

    //reset this variable since we are done with it
    itemPrice = null;

    //if qty is 0, just remove it completely
    if (newQty == 0) {

        userCart.removeChild(targetItem);

        //dont forget to remove the qty box!
        document.getElementById("qty-" + itemID).remove();
    } else { 
        //set the new qty
        targetItem.setAttribute("data-qty", newQty);
        
        //display new qty
        document.getElementById("qty-" +itemID).innerHTML = targetItem.dataset.qty;
    }

    //decrease total # of items in cart and display the new qty
    itemsInCart--;
    document.getElementById("itemsInCart").innerHTML = itemsInCart;
}

function addQtyBox() {
    qtyBox.setAttribute("id", "qty-" + beingDraggedID);
    userCart.appendChild(qtyBox.cloneNode(true));
}

function updateQty() {

    //if an item was just dragged into the cart 
    if (beingDraggedID != null) {
        //update quantity of item
        var cartItem = document.querySelector("#user-cart #" + beingDraggedID);
        document.getElementById("qty-" + beingDraggedID).innerHTML = cartItem.dataset.qty;
    }

    //update total number of items in cart
    document.getElementById("itemsInCart").innerHTML = itemsInCart;
}

//NOTE: to subtract from the total, set the itemPrice to be a negative number
function updatePrice() {
    total = Number(total) + Number(itemPrice);
    document.getElementById("total").innerHTML = "$" + total.toFixed(2);
}

//function to remove all items from the user cart 
function emptyCart() {
    
    /*  this code would remove the cart from the page entirely, but we just want to reset it
    
        const element = document.getElementById("user-cart");
        element.remove();
    */
    

    //remove all of the inner elements (items) from the cart
    userCart.innerHTML = "";

    //reset the total price
    total = Number(0.00);
    document.getElementById("total").innerHTML = "$" + total.toFixed(2);

    //reset the number of items in cart
    itemsInCart = 0;
    document.getElementById("itemsInCart").innerHTML = itemsInCart;
}

//function to alert the user of their total, and then emmpty the cart
function placeOrder() {
    alert("CONFIRMED ORDER! Your total: $" + total);
    emptyCart();
}

//function to get a takeout panel of items
function getPanel(panelFileName, outputID) {

    //if the new panel requested is already on the page, hide it instead of loading it again
    if (currentPanel == panelFileName) {
        clearPanelContent();
        currentPanel = "";
        return;
    }

    // declare local variables
    var xmlhttp;

    // create the request object depending on the browser type
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Safari, Opera
        xmlhttp = new XMLHttpRequest;
    } else {
        // code for IE6 and earlier - need to use an ActiveX object (yuck!)
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // set the callback function. this function inserts the html that
    //      is received into the "category-panel" section of the page. It is
    //      a callback function because the XMLHttpRequest object
    //      calls this function when the ready state changes and it
    //      is provided by the user of the object.
    xmlhttp.onreadystatechange = function () {
        // check for a good return
        if ((xmlhttp.readyState == 4) &&
            (xmlhttp.status == 200)) {
            // add the received html to the category-panel section
            document.getElementById(outputID).innerHTML = xmlhttp.responseText;

            resetItemListeners();
            currentPanel = panelFileName;
        }
    }

    // create the request. this creates a HTTP GET request for the file name in the second parameter.
    // the final parameter is whether the request is synchronous or asynchronous. generally use asynchronous (true). 
    // also note that you don't need the complete https:// on the file name if you are getting something from the same server. 
    // if you are not, you WILL need the fully qualified path.
    xmlhttp.open("GET", panelFileName, true);

    // send the request to the server
    xmlhttp.send();
}

function resetItemListeners() {

    //reset list of nodes with the class "item"
    itemList = document.querySelectorAll(".item");

    //loop through every item in the list and add drag listeners
    for (var item of itemList) {
        item.addEventListener("dragstart", dragStart);
        item.addEventListener("dragend", dragEnd);
    }
}

//function to clear the panel of items on the takeout page
function clearPanelContent() {
    var panel = document.getElementById("category-panel");
    panel.innerHTML = "";
}



//====================================== CODE FOR THE IMAGE CAROUSEL ON HOMEPAGE

//create a list of each tile
var itemTiles = document.querySelectorAll(".carousel-tile");
//index of the tile list
var tileIndex = 0;

//displays the first tile in the tile list on initial page load
if (itemTiles.length != 0)
    showNextTile(0);

// to display the NEXT tile, use "1" for the addToIndex parameter
// to display the PREVIOUS tile in the list, use "-1" for the addToIndex parameter
function showNextTile(addToIndex) {

    tileIndex += addToIndex;
    //loop through each tile and hide it
    for (var tile of itemTiles) {
        tile.style.display = "none";
    }

    //if the user is on the last tile and clicks "next", loop back to the first tile
    if (tileIndex > (itemTiles.length - 1) )
        tileIndex = 0;

    //if the user is on the first tile and clicks "previous", loop back to the last tile
    if (tileIndex < 0) 
        tileIndex = itemTiles.length - 1;

    //since all tiles are hidden, we will only show the image at the selected index be shown
    itemTiles[tileIndex].style.display = "flex";
}



//====================================== CODE FOR PHP STUFF
function loadMenu(category, outputID) {

    //check if the category that was clicked on is already openn
    if (categoryOpen == category) {
        //if its already open, close it and dont run any of the code below
        document.getElementById(outputID).innerHTML = "";
        categoryOpen = "";
        return;
    }




    // declare local variables
	var xmlhttp;

	// create the request object depending on the browser type
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Safari, Opera
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6 and earlier - need to use an ActiveX object (yuck!)
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	// set the callback function. this function inserts the html that is received into the page
	xmlhttp.onreadystatechange = function () {
		// check for a good return
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			// add the received html to the info section
			document.getElementById(outputID).innerHTML = xmlhttp.responseText;
            resetItemListeners();
            categoryOpen = category;
		}

        
	};

	// create the request
	xmlhttp.open("POST", "menu-DB.php", true);

	// this set the content of the http pack mime type so that PHP can process it correctly
	xmlhttp.setRequestHeader(
		"Content-type",
		"application/x-www-form-urlencoded"
	);
	var Argument = "Category=" + category;

	// send the request to the server
	xmlhttp.send(Argument);

}


var categoryOpen = "";




