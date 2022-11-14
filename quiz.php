<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 

    $correct = 0;

    echo "<h1>Grades</h1>";
    echo "(1) Which is the tallest peak in Colorado?<br>";
    echo "You answered: " . $_GET["tall"] . "<br>";
    echo "Correct answer: Mt. Elbert<br><br>";
    if ($_GET["tall"] == "Mt. Elbert") {
        $correct++;
    }

    echo "(2) Which is the shortest peak over 14,000ft?<br>";
    echo "You answered: " . $_GET["short"] . "<br>";
    echo "Correct answer: Sunshine Peak<br><br>";
    if ($_GET["short"] == "Sunshine Peak") {
        $correct++;
    }

    echo "(3) Which is the most climbed peak in Colorado?<br>";
    echo "You answered: " . $_GET["mostClimbed"] . "<br>";
    echo "Correct answer: Gray's Peak<br><br>";
    if ($_GET["mostClimbed"] == "Gray's Peak") {
        $correct++;
    }

    echo "(4) Which is the least climbed peak in Colorado?<br>";
    echo "You answered: " . $_GET["leastClimbed"] . "<br>";
    echo "Correct answer: North Eolus<br><br>";
    if ($_GET["leastClimbed"] == "North Eolus") {
        $correct++;
    }

    echo "(5) Which is not a real mountain?<br>";
    echo "You answered: " . $_GET["fake"] . "<br>";
    echo "Correct answer: Whippersnapper Peak<br><br>";
    if ($_GET["fake"] == "Whippersnapper Peak") {
        $correct++;
    }

    $percent = ($correct / 5) * 100;
    echo "Total: " . $correct . "<br>";
    echo "Percent: " . $percent . "%";
?>