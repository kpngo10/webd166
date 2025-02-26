<?php
include('header.html');

//Initializing for sticky values
$fname = "";
$lname = "";
$email = "";

//Initializing error msgs
$fname_err = "";
$lname_err = "";
$email_err = "";
$age_err = "";

//Variables for error check
$okay = true;
$checked = "";

/*
This section checks if the form has been posted. For each fields not properly filled, they generate an error message, store the variables (with white space and html symbols stripped), and set the flag variable to false. When all fields pass the error check, or there's no "false" flags, the page redirects user to a confirmation page.
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //script that directs user to #content, prevents loading from the top when refreshing
    include('formlocation.js');
    if (isset($_POST['submit'])) {
        if (empty($_POST['fname'])) {
            $fname_err = "Please enter your first name.";
            $okay = false;
        } else {
            $fname = strip_tags(trim($_POST["fname"]));
        }

        if (empty($_POST['lname'])) {
            $lname_err = "Please enter your last name.";
            $okay = false;
        } else {
            $lname = strip_tags(trim($_POST["lname"]));
        }

        if (empty($_POST['email'])) {
            $email_err = "Please enter your email.";
            $okay = false;
        } else {
            $email = strip_tags(trim($_POST["email"]));
        }

        if (isset($_POST['age']) == false) {
            $age_err = "You must be at least 18 years of age to subscribe to our newsletter.";
            $okay = false;
        } else {
            $checked = "checked='checked'";
        }

        if ($okay) {
            header('Location: subscribed.php');
            exit();
        }

    //reset values when user clicks clear button    
    } else if (isset($_POST['clear'])) {
        $_POST = [];
        header('Locaton: index.php#content');
    }
}

?>
    <!--  Content: also links to a script that directs to this exact position   -->
    <main id="content"><a href='formlocation.js'></a><a href="index.php#content"></a>

            <h2 class="center">Welcome to Coffee Connection!</h2>
            <blockquote>We’re not just passionate lovers of coffee, but everything else that goes with a full and rewarding coffeehouse experience. We also offer a selection of premium teas, fine pastries and other delectable treats. And the music you hear in store is chosen for its artistry and appeal.  It’s not unusual to see people coming to Coffee Connection to chat, meet up or even work. We’re a neighborhood gathering place, a part of the daily routine, and would like to be part of your way of life.
        </blockquote>
        
        
        <section id="contact">
            <h2 class="center">Sign up to Receive Our Newsletter</h2>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
           
              <div class="flexcontainer">
               <label for="fname">First Name:</label> <input type="text" name="fname" id="fname" value="<?php echo $fname;?>">
             </div>
             <?php echo "<p class='red'>$fname_err</p>"; ?>            
             
             <div class="flexcontainer">
              <label for="lname">Last Name:</label> <input type="text" name="lname" id="lname" value="<?php echo $lname;?>">
             </div>
             <?php echo "<p class='red'>$lname_err</p>"; ?>
              
            <div class="flexcontainer">
               <label for="email">Email:</label> <input type="email" name="email" id="email" value="<?php echo $email;?>"> 
            </div>
            <?php echo "<p class='red'>$email_err</p>"; ?>            
 
            <div class="flexcontainer2">
               <label for="age">I am over 18:</label> <input type="checkbox" name="age" id="age" value="yes" <?php echo $checked ?>> 
            </div>  
            <?php echo "<p class='red'>$age_err</p>"; ?>                                       
              
            <div class="flexcontainer">    
               <button type="submit" name="submit">Submit</button> 
            </div>

           </form>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="flexcontainer">    
               <button type="clear" name="clear">Clear</button> 
            </div> 
        </form>

        </section>        

        <section id="products">
           
            <div class="product center">
                <h3>Espresso</h3>
                <p><img src="images/coffee_espresso.jpg" alt="expresso coffee"></p>
                <p>Popular espresso beverages - latte, americano, cappuccino, macchiato, and cold espresso drinks</p>
            </div>

            <div class="product center">
                <h3>Blended</h3>
                <p><img src="images/coffee_blended.jpg" alt="blended coffee drinks"></p>
                <p>Delicious icy blends</p>
            </div>

            <div class="product center">
                <h3>Pastries</h3>
                <p><img src="images/coffee_pastries.jpg" alt="pastries"></p>
                <p>Muffins, bagels, coffee cakes, and more</p>
            </div>
            
            <div class="product center">
                <h3>Food</h3>
                <p><img src="images/coffee_food.jpg" alt="anytime food"></p>
                <p>Sandwiches, paninis, salads and more</p>
            </div>

            <div class="product center">
                <h3>Breakfast</h3>
                <p><img src="images/coffee_breakfast.jpg" alt="breakfast food"></p>
                <p>Biscuits, muffins, wraps, croissants, oatmeal and more</p>
            </div>

        </section>

    </main>

<?php
include('footer.html');
?>