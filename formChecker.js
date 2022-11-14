function validate() {
    //username
    let username = document.getElementById("username");
    if (username.value == "") { 
        alert("Please enter a username in email form (user@domain.com).");
        return false;
    }

    //password 
    let password = document.getElementById("password");
    if (password.value == "") { 
        alert("Please enter a password.");
        return false;
    }

    //items
    let items = document.getElementsByClassName("items");
    let totalItems = 0;
    for (let i = 0; i < items.length; i++) {
        totalItems += items[i].value;
    }
    if (totalItems == 0) {
        alert("Please choose an item to purchase.");
        return false;
    }    

    //shipping 
    let shipping = document.getElementsByName("shipping");
    let shippingTracker = false;
    for (let i = 0; i < shipping.length; i++) {
        if (shipping[i].checked) {
            shippingTracker = true;
        }
    }
    if (!shippingTracker) {
        alert("Please choose a shipping option.");
        return false;
    }
    return true;
}