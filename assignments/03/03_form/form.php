<?php //store user-entered values from from
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$heard = $_POST['heard'];
$comments = $_POST['comments'];
?>

<!DOCTYPE html>
<!-- Author: Khang Ngo -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Feedback</title>
</head>
<body>
    <header>
        <h1>Thank You For Signing Up!</h1>
    </header>
    <main>
        <h2>You have entered the following information:</h2>
        <p>Name: <?php echo $name ?></p>
        <p>Email: <?php echo $email ?></p>
        <p>Phone: <?php echo $phone ?></p>
        <p>How you heard about us: <?php echo $heard ?></p>
        <p>Comments: <?php echo $comments ?></p>
    </main>
</body>
</html>