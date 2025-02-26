

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Page Check</title>

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
            width: 500px;
            margin: 50px 0;
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;           
        }

        .flexcontainer li {
            width: 120px;
            padding: 20px;
            text-align: center;
            background-color: #ccc;            
            border: 1px solid #000;

        }
        
        .flexcontainer a {
            text-decoration: none;
            color: #000;
            font-size: 1.2em;
            display: block;
            cursor: pointer;
        }


    </style>
</head>

<body>
        <header>
            <h1>Our Blog</h1>
        </header>

       
           <nav>
               <ul class="flexcontainer">
                   <li><a href="form.html">Create a Post</a></li>
                   <li><a href="blog_home.php">View all Posts</a></li>
                   <li><a href="logout.php">Logout</a></li>
               </ul>
           </nav>

</body>
</html>
