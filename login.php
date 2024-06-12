<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['mail'];
    $password =$_POST['pass'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
      $query = "select * from form where mail = '$email' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['pass'] == $password)
          {
            header("locaction: index.php");
            die;
          }
        }
      }
      echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else {
      echo "<script type='text/javascript'> alert('wrong username or password')</script>";
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
<body>
  <section class="header">
    <div class="background-img">
      
      <div class="login-container">
        <h1>Discoveries of rurals in Calamba </h1>
        <form method="POST">
        <label for="email">Email:</label>
            <input type="email" id="email" name="mail" class="input-field" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" class="input-field" required>
            <button type="submit" class="submit-button"><a href="index.php">Submit</a></button>
        </form>
        <a href="sign up.php">sign up</a>
      </div>
    </div>
    </section>    
</body>
</html>