<?php
include('connection.php');

$link = "<a href='login.html'>Log in to see this page!</a>";

if (!isset($_COOKIE['username'])) {
  exit("You are not logged in! $link");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Enter a Blog Post</title>

    <style>
      body {
        font-family: arial, sans-serif;
        font-size: 100%;
        background-color: floralwhite;
        padding: 20px;
      }

      h1 {
        font-size: 1.8em;
      }

      .flexcontainer {
        width: 350px;
        display: flex;
        justify-content: flex-start;
        margin-bottom: 25px;
      }

      .flexcontainer label {
        width: 50px;
      }

      [type="text"] {
        width: 280px;
      }

      textarea {
        width: 280px;
      }

      [type="submit"],
      [type="reset"] {
        margin-top: 25px;
        padding: 10px;
        border: none;
        background-color: #ccc;
        width: 150px;
        font-size: 1em;
        font-weight: bold;
      }

      form {
        border-top: 1px solid #000;
        padding-top: 20px;
        margin-top: 20px;
      }
    </style>
  </head>

  <body>
    <header>
      <h1>Enter a Blog Post</h1>
    </header>

    <h2><a href="logout.php">Log Out</a></h2>

    <form action="blog_results.php" method="post">
      <div class="flexcontainer">
        <label for="blogtitle">Title: </label>
        <input
          type="text"
          id="blogtitle"
          name="blogtitle"
          maxlength="100"
          required
        />
      </div>

      <div class="flexcontainer">
        <label for="blogentry">Entry: </label>
        <textarea
          id="blogentry"
          name="blogentry"
          rows="10"
          cols="50"
          required
        ></textarea>
      </div>

      <input type="submit" value="Submit Entry" />

      <input type="reset" value="Clear Form" />
    </form>
  </body>
</html>
