<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $okay = false;

    function rmchar($var_string) {
        $var_string = strip_tags(trim($var_string));
        return $var_string;
    }

    //check if checkbox is clicked
    if (isset($_POST['subscription'])) {
        $okay = true;
    }
?>

<!DOCTYPE html>
<!-- Author: Khang Ngo (PHP) -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Confirmation</title>
    <style>
        body {
            font-family: arial;
            font-size: 100%;
            background-image: url(https://cdn1.vectorstock.com/i/1000x1000/91/00/background-with-dog-paw-print-and-bone-vector-2669100.jpg);
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
        
        .input_ck {
                    display: inline;
                    margin-bottom: 25px;
                }        
        
        input[type=submit] {
            margin-top: 25px;
        }
        
        .red {
            color: red;
        }

    </style>
</head>
<body>
    <header>
        <h1>Human Society Donations</h1>
        <h2>Help the Animals</h2>
    </header>
 
    <section id="outer">
        <h2 class="info">Donation Information</h2>
        <?php
        
            //display errors when fields are empty
            if (empty($fname) || empty($lname) || empty($email) || empty($amount)) {
                echo "<p>Please <a href='./donation2.html'>GO BACK</a> and fill in the following errors:</p>\n";
                if (empty($fname)) {
                    echo "\t\t<p>First Name must be filled in</p>\n";
                }
                if (empty($lname)) {
                    echo "\t\t<p>Last Name must be filled in</p>\n";
                }
                if (empty($email)) {
                    echo "\t\t<p>Email address must be filled in</p>\n";
                }
                if (empty($amount)) {
                    echo "\t\t<p>Amount must be filled in</p>\n";
                }
            } 
            
            else {

                //remove tags and spaces once we know fields are filled
                $fname = rmchar($fname);
                $lname = rmchar($lname);
                $email = rmchar($email);
                $amount = number_format(rmchar($amount), 2);
                $name = $fname . " " . $lname;

                //display confirmation message
                echo "<p>Thank you $name for your donation of \$$amount.</p>\n";
                echo "\t\t<p>We will email your receipt to $email.</p>\n";

                //display messages based on checkbox
                if ($okay) {
                    echo "\t\t<p>You have chosen not to receive a free year subscription to our e-magazine.</p>\n";
                } else {
                    echo "\t\t<p>You will receive a free year subscription to our e-magazine.</p>\n";
                }
            }
        ?>
</body>
</html>