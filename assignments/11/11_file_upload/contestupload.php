<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//remove tags and special characters
function rmtags($input) {
  return strip_tags(trim($input));
}

  //capitalize first letter of each word
function capitalize($input) {
  $temp = explode(' ', $input);
  $result = [];

  if (count($temp) == 1) {
    return ucfirst($input);
  } else {
    foreach ($temp as $words) {
      $words = ucfirst($words);
      array_push($result, $words);
    }
  }
  return implode(' ', $result);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //initialize variables
  $err_msg = '';
  $file_path = './uploads/';
  $okay = false;

  $name = rmtags($_POST['name']);
  $email = rmtags($_POST['email']);

  //check if user uploads a file and if there's error
  if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
    //store file variables
    $file_name = $_FILES["photo"]["name"];
    $file_type = $_FILES["photo"]["type"];
    $file_size = $_FILES["photo"]["size"];
    $file_tmp_name = $_FILES["photo"]["tmp_name"];
    $file_error = $_FILES["photo"]["error"];

    //check if it's correct file type
    if (($file_type != "image/jpeg") && ($file_type != "images/png") && ($file_type != "images/jpg")) {
      $err_msg = "You must upload a jpg, jpeg, or png file.";
    } else {
      move_uploaded_file($file_tmp_name, "./uploads/" . $file_name);
      $okay = true;
      $name = capitalize($name);
    }
  }
} else {
  exit("You do not have permission to view this page.");
}
?>

<!DOCTYPE html>
<!-- Khang Ngo -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Contest Feedback</title>
</head>
<body>
  <h1>Photo Contest Feedback</h1>
  <?php
    if ($okay == false) {
      echo "$err_msg<br>";
    } else {
      echo "Thank you $name for entering our photo contest. You have submitted the below photo:<br>";
      echo "<img src='$file_path$file_name'>";
    }
  ?>
</body>
</html>