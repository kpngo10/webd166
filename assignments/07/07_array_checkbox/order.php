<?php
    $name = strip_tags(trim($_POST['name']));
    $phone = $_POST['phone'];
    
    $msg = ""; //tells user if they did or did not check toppings
    $info = ""; //confirms with user their personal info
    $total = ""; //tells user total cost
    $cost = 7.95; //numerical cost calculation

    if (isset($_POST['topping']) == false) {
        $msg = "You did not order any extra topping so you will receive our traditional cheese pizza.";
    } else {
        $toppings = $_POST['topping'];
        $count = count($toppings);
        $msg = "You have ordered the following $count toppings:";
        foreach ($toppings as $top) {
            $cost += 1.00;
        }
        $cost = number_format($cost, 2);
    }

    $info = "Your name is $name. Your phone number is $phone.";
    $total = "The total cost is \$$cost.";
?>

<!DOCTYPE html>
<!-- Author: Khang Ngo (PHP) -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: arial;
            font-size: 100%;
            background-color: #000;
            background-image: url(https://image.freepik.com/free-photo/crop-pizza-black_23-2147749510.jpg);
            background-repeat: no-repeat;
           
            background-size: 100%;
        }
        
        #outer {
            width: 60%;
            margin: 20px auto 50px 20px;
            padding: 10px;
            border: 1px solid #a8a8a8;
            box-shadow: 0px 0px 20px #a8a8a8;
            background-color: #d5d5d5;
        }
        
        h1,
        h2,
        h3 {
            text-align: center;
        }
        
        h2 {
            font-size: 2.5em;
        }
        
        h2 {
            font-size: 1.5em;
        }
        
        h3 {
            font-size: 1.25em;
        }
        
        .red {
            color: red;
        }
        
        div {
            margin-bottom: 25px;
        }
        
        .container{
            display:flex;
            justify-content: space-around;
        }
        
        .container div {
            flex-basis: 25%;
        }

        
        .textbox {
            width: 15em;
            margin-bottom: .2em;
        }
        
        input[type=submit],
        input[type=reset] {
            margin-top: 25px;
            margin-bottom: 25px;
            display: block;
        }
    </style>

</head>
<body>
    <section id="outer">
        <h1 class="red">Pizza Express</h1>
        <h2>Your pizza order will be ready for pick up in 15 minutes</h2>
        <?php 
            echo "<p>$msg</p>\n";
            echo "\t\t\t<ol>\n";
            foreach ($toppings as $top) { 
                echo "\t\t\t\t<li>$top</li>\n"; 
            }
            echo "\t\t\t</ol>\n";
            echo "\t\t<p>$info <span class='red'>$total</span></p>\n";
        ?>
    </section>
</body>
</html>