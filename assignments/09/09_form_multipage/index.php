<?php

//start the session and preserve session id
session_start();
$PHPSESSID = session_id();

?>
<!DOCTYPE html>
<!-- Author: Khang Ngo (PHP) -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Survey Assignment</title>

    <style>
               
        body {
            background-color: #fffbeb;

        }
        body,
        input {
            font-family: arial, sans-serif;
            font-size: 100%;
        }
        
        div {
            margin-bottom: 15px;
            width: 150px;
            display:flex;
            justify-content: space-around;
        }
        
        div:last-of-type {
            margin-bottom: 30px;
        }
        
        label {
            width: 100px;
        }
        
        input[type=submit] {
            width: 120px;
            background-color: #000;
            color: #fffbeb;
            font-size: 1.5em;
            font-weight: bold;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #888;
            padding: 5px;
        }
        
        form {
            margin-bottom: 50px;
        }        

    </style>
</head>

<body>
    <header>
        <h1>Please Take Our Anonymous Survey</h1>
        
        <img src="https://thewisconsinvegetablegardener.files.wordpress.com/2019/05/adm_survey_660x320.png?w=705" alt="photo of survey">
    </header>

    <section>
        <h2>Enter the information below</h2>

        <form action="survey2.php" method="post">
           
           <p>What is your age group?</p>
           
              <div>           
                <label for="under18">under 18</label>
                <input type="radio" id="under18" value="under 18" name="age" required>
              </div>    

              <div> 
                <label for="18-29">18 - 29</label>
                <input type="radio" id="18-29" value="18 - 29" name="age" required>
              </div>     

              <div>
                <label for="30-49">30 - 49</label>
                <input type="radio" id="30-49" value="30 - 49" name="age" required>
              </div>   

              <div>
                <label for="50-65">50 - 65</label>
                <input type="radio" id="50-65" value="50 - 65" name="age" required> 
              </div>    

              <div>
                <label for="over65">over 65</label>
                <input type="radio" id="over65" value="over 65" name="age" required>
              </div>                                                                                                                       
        
            <input type="submit" value="Next >>" class="clear">            
        </form>
    </section>

</body>
</html>
