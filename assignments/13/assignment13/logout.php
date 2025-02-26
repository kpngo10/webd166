<?php
$link = "<a href='login.html'>Log in again</a>";

if (isset($_COOKIE['username'])) {
  setcookie('username', '');
  echo "You are now logged out! $link";
}

?>