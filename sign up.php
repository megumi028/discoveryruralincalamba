<?php
  session_start();

  include("db.php");

  if($_SERVER ['REQUEST_METHOD'] == "POST") {
    $fullname = $_POST['fname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
 
     $query = "insert into form (fname, address, gender, mail, pass) value ('$fullname', '$address', '$gender', '$email', '$password')"; 
 
     mysqli_query($con, $query);
 
     echo "<script type='text/javascript'> alert('Successfully Register')</script>";
 
    }

    else {

        echo " <script type='text/javascript'> alert('Please Enter valid information')</script>";
    
       }
       

   }

  
   
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="with=device-width, intial-scale=1.0">
 <title>Discoveries of rurals in Calamba</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="/main.js"></script>
</head>
<body class="Login">
  <div class="background-img">
    
<section class="join">
    <div class="container">
        <h1>Sign up</h1>
        <form method="POST">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fname" class="input-field" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="input-field" required>

            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" class="input-field" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="mail" class="input-field" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" class="input-field" required>
            <button type="submit" class="submit-button">Submit</button>
            </select>

            
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    
</section>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
   }
   function hideMenu(){
    navLinks.style.right = "-200px";
   }
</script>

</body>
</html>
