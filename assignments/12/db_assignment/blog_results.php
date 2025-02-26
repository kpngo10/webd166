<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//remove tags and special characters
function rmtags($input) {
  return addslashes(strip_tags(trim($input)));
}

//check if request is made from form
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = rmtags($_POST['blogtitle']);
    $entry = rmtags($_POST['blogentry']);
    // echo "$title $entry";

    //connect to db
    $dsn = "mysql:host=localhost;dbname=myblog";
    $username = "root";
    $password = "";

    //test connection
    try {
      $conn = new PDO($dsn, $username, $password);
      echo "Connection is successful<br>";
      
      //insert blog entry into database
      $sql_entry = "INSERT INTO my_table (Title, Entry) 
                    VALUES ('$title', '$entry')";
      
      //execute
      $conn->exec($sql_entry);
      echo "The record was successfully entered.<br>";
    }

    catch (PDOException $e) {
      $error_message = $e->getMessage();
      echo "An error occurred: $error_message" ;
    }

    $conn = null;

  }
?> 

<!DOCTYPE html>
<!-- Khang Ngo -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Results</title>
</head>
<body>
  <h1>Blog Post Result</h1>
  <p>Thank you for submitting a blog post! You may see your entry
      <a href="blog_home.php">here</a>
  </p>
</body>
</html>