<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Favicon\favicon-32x32.png" type="image/x-icon">
    <title>Unique Coaching Classes</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <div class="container" id="class">
        <header>
            <nav id="navbar">
                <!--Navigation Bar That will include : Home, Vision, Admissions, Contact Us-->
              
                        <div>
                            <img src="final logo coaching class.png" alt="Logo" id="logo">
                            <p id="logo-text">Unique Classes - The Symbol of Excellence!</p>
                        </div> 
                       
                         <ul id="nav-items">
                            <li> <a href="#">Home</a>  </li>
                            <li><a href="#">Courses</a> </li>
                            <li><a href="#">Admissions</a> </li>
                            <li><a href="#">Contact Us</a> </li>
                            <li><a href="view.php">View Forms</a> </li>
                        </ul>
            </nav>
                   </header>

        <section id="main-content"> 
            <h2 class="text-format" id="intro_text">Welcome To Unique Classes- place where students love to come...</h2>

           <div id="glowbtn_container"> <button id="glow_button"> ADMISSIONS OPEN! </button></div> 
            <form action="" method = "post" id="admission-form">
                <h2 class="text-format">Admission Form</h2>
                <div class="form_div" id="form_div1">
                    <label for="name">Name: </label>
                <input type="text" name ="name" id="name" placeholder="Enter Your Full Name">
                </div>
                
                <div class="form_div"><label for="std">Enter Your Standard: </label>
                    <input type="text" name="std" id="std" placeholder="Enter Your Standard" >
                </div>
                
                <div class="form_div"><label for="address">Enter Your Address: </label>
                    <input type="text" name="address" id="address" placeholder="Enter Your address" >
                </div>

                <div class="form_div">
                    <label for="school-name">Enter Your School Name:</label>
                <input type="text" name="school_name" id="school_name" placeholder="Enter Your School Name">
                </div>

                <div class="form_div"><label for="mobile-number">Enter Your Mobile Number: </label>
                    <input type="tel" name="mobile" id="mobile" placeholder="Enter Your Mobile Number">
    
                </div>

                <div class="form_div">
                    <label for="email">Enter Your Email-id:</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email-Id">
                </div>

                  <button name="submitbtn" id="submitbtn" class="form_div" type="submit">Submit</button>
            </form>
            

        </section>
        <footer>

        </footer>
    </div>
</body>

</html>


<?php

    $conn = mysqli_connect('localhost', 'root', '', 'project1');
    // if (mysqli_connect_errno()){
    //     echo 'Connection failed.';
    // }
    // else{
    //     echo 'Connection Successful.';
    // }

    if(isset($_POST['submitbtn'])){

    $name = $_POST['name'];
    $std = $_POST['std'];
    $address = $_POST['address'];
    $school_name = $_POST['school_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $insert = "INSERT INTO admissionform (name, std, address, school, mobile, email) VALUES ('$name', '$std', '$address', '$school_name', '$mobile', '$email')";

    $run_insert = mysqli_query($conn, $insert);
    
    if($run_insert == true){
        echo 'Data has been added.';
    }else{
        echo 'Failed, try again.';
        }

    }

?>
