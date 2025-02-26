<?php
    $miles_driven = $_POST['miles_driven']; 
    $gallons_used = $_POST['gallons_used']; 
    $ppg = $_POST['price_gallon']; //price per gallon
    $mpg = 0; //miles per gallon
    $cost_trip = 0; //total cost of trip 
?>

<!DOCTYPE html>
<!-- Author: Khang Ngo -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mileage Cost Calculator</title>
</head>
<body>
    <header>
        <h1>Trip Calculations</h1>
    </header>
    <main>
        <?php //calculate miles per gallons and cost of trip
            $mpg = number_format($miles_driven / $gallons_used, 2);
            $cost_trip = number_format($gallons_used * $ppg, 2);

            //format user-input values
            $miles_driven = number_format($miles_driven);
            $ppg = number_format($ppg, 2);
        ?>

        <h2>Values Entered</h2>
        <p><?php echo "Miles Driven: $miles_driven" ?></p>
        <p><?php echo "Gallons Used: $gallons_used" ?></p>
        <p><?php echo "Price per Gallons: \$$ppg" ?></p>
        
        <h2>Your Results</h2>
        <p><?php echo "Miles Per Gallon: $mpg" ?></p>
        <p><?php echo "Cost of the Trip: \$$cost_trip" ?></p>
    </main>
</body>
</html>