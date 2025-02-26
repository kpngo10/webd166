<?php

session_start();
$PHPSESSID = session_id();

if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['income'])) {
    $_SESSION['income'] = $_POST['income'];
} else {
    exit("Sorry, there is an error somewhere. Please go back and try again.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Survey Assignment Result Page</title>

    <style>
               
        body {
            background-color: #fffbeb;

        }
        body {
            font-family: arial, sans-serif;
            font-size: 100%;
        }
        

        

    </style>
</head>

<body>
    <header>
        <h1>Thank you for Taking Our Anonymous Survey</h1>
        
        <img src="https://thewisconsinvegetablegardener.files.wordpress.com/2019/05/adm_survey_660x320.png?w=705" alt="photo of survey">
    </header>

    <section>
        <h2>Your Response is below</h2>
        <?php
            foreach ($_SESSION as $name => $value) {
                $name = ucfirst($name);
                echo "$name: $value<br>\n";
                echo "\t\t";
            }
        ?>
    
    </section>

</body>
</html>
