<!DOCTYPE html>
<!-- Author: Khang Ngo -->
<?php /* variables for an address */
    $name = "Googleplex";
    $street = "1600 Amphitheater Parkway";
    $city = "Mountain View";
    $state = "CA";
    $country = "United States";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBD166: Variables</title>
</head>
<body>
<?php /* displays name of the company as header and its address */
    print "<header>\n<h1>$name</h1>\n</header>\n";
    print "<main>\n<p> The $name is the corporate headquarters complex of Google
    and its parent company Alphabet Inc. It is located at:<br>
    $street<br>
    $city, $state, $country<br>\n</p>\n</main>\n";
?>
</body>
</html>