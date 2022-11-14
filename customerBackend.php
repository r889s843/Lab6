<?php
    echo "<head>";
    echo "<title>Recipt</title>";
    echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\"/>";
    echo "</head>";

    echo "<h1> Welcome " . $_GET["username"] . "!</h1>";
    echo "Password: " . $_GET["password"] . "<br><br>";
    
    //table
    echo "<h3>Recipt</h3>";
    echo "<table>";

    echo "<tr>";
    echo "<td></td>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
    echo "</tr>";

    $helmetNum = $_GET["helmet"];
    $helmetCost = 59;
    $helmetTotal = $helmetNum * $helmetCost;
    echo "<tr>";
    echo "<th>Climbing Helmet</th>";
    echo "<td>" . $helmetNum . "</td>";
    echo "<td>$" . $helmetCost . ".00</td>"; 
    echo "<td>$" . $helmetTotal . "</td>";
    echo "</tr>";

    $shoesNum = $_GET["shoes"];
    $shoesCost = 34;
    $shoesTotal = $shoesNum * $shoesCost;
    echo "<tr>";
    echo "<th>Climbing Shoes</th>";
    echo "<td>" . $shoesNum . "</td>";
    echo "<td>$" . $shoesCost . ".00</td>"; 
    echo "<td>$" . $shoesTotal . "</td>";
    echo "</tr>";

    $binerNum = $_GET["biner"];
    $binerCost = 16;
    $binerTotal = $binerNum * $binerCost;
    echo "<tr>";
    echo "<th>Carabiner</th>";
    echo "<td>" . $binerNum . "</td>";
    echo "<td>$" . $binerCost . ".00</td>"; 
    echo "<td>$" . $binerTotal . "</td>";
    echo "</tr>";

    $ropeNum = $_GET["rope"];
    $ropeCost = 109;
    $ropeTotal = $ropeNum * $ropeCost;
    echo "<tr>";
    echo "<th>Rope (35m)</th>";
    echo "<td>" . $ropeNum . "</td>";
    echo "<td>$" . $ropeCost . ".00</td>"; 
    echo "<td>$" . $ropeTotal . "</td>";
    echo "</tr>";

    $shipping = $_GET["shipping"];
    echo "<tr>";
    echo "<th>Shipping</th>";
    echo "<td colspan=\"2\">" . $shipping . "</td>";
    if ($shipping == "$5.00 Three Day") {
        $shippingTotal = 5;
    }
    else if ($shipping == "$50.00 Over Night") {
        $shippingTotal = 50;
    }
    else {
        $shippingTotal = 0;
    }
    echo "<td>$" . $shippingTotal . "</td>";
    echo "</tr>";

    $totalCost = $helmetTotal + $shoesTotal + $binerTotal + $ropeTotal + $shippingTotal;
    echo "<tr>";
    echo "<th colspan=\"3\">Total Cost</th>";
    echo "<th>$" . $totalCost . "</th>";
    echo "</tr>";

    echo "</table>";

?>