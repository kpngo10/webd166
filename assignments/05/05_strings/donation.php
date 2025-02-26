<?php //store variables from form 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
?>

<!DOCTYPE html>
<!-- Author: Khang Ngo (PHP only)-->
<html>
<head>
    <meta charset="utf-8">
    <title>Assignment 5 Strings</title>

    <style>
        body {
            font-family: arial;
            font-size: 100%;
            background-image:
            url(https://cdn1.vectorstock.com/i/1000x1000/91/00/background-with-dog-paw-print-and-bone-vector-2669100.jpg);
            background-size: cover;
        }
        
        #outer {
            width: 960px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid #a8a8a8;
            box-shadow: 0px 0px 20px #a8a8a8;
            background-color: aliceblue;
       }
        
        h1,
        h2 {
            font-size: 1.5em;
            color: navy;
            text-align: center;
        }
        
        .info {
            text-align: left;
        }
        
        input {
            display: block;
            margin-bottom: 25px;
        }
        
        input[type=submit] {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <?php
        //trim spaces and remove tags from inputs
        function rm_tags($var_string) {
            $var_string = strip_tags(trim($var_string));
            return $var_string;
        }

        //format to add 2 decimal points and comma for num >= 1000
        function frmt_num($var_num) {
            return number_format($var_num, 2);
        }

        //format names, email, and donation number
        $name = rm_tags($fname) . ' ' . rm_tags($lname);
        $email = rm_tags($email);
        $amount = frmt_num(rm_tags($amount));

        //store new lname for confirm number generator
        $lname = rm_tags($lname);

        //create a confirmation number
        $rand = mt_rand(1000, 9999);
        $confirm = strlen($lname) . strtoupper($lname[0]) . $rand;

    ?>

    <header>
        <h1>Humane Society Donations</h1>
        <h2>Help the Animals</h2>
    </header>

    <section id="outer">
        <h2 class="info">Your Contribution</h2>
        <p>Thank you <?php echo $name ?> for your donation of <?php echo "\$$amount" ?></p>
        <p>Your confirmation number is <?php echo $confirm ?>. We will email your receipt to <?php echo $email ?></p>
    </section>

</body>
</html>
