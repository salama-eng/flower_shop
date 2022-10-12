<?php

require "../confiq/confiq.php";

if(isset($_POST['submit']))
{

 $name=$_POST['name'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $account_number=$_POST['account_number'];
 setcookie('user', $_POST['name'], time() + (86400 * 30), "/"); // 86400 = 1 day

  $sql = "INSERT INTO users (name, password, email , account_number ,account_type)
  VALUES ( '".$name."', '".$password."', '".$email."','".$account_number."', 'paypal')";
  if ($conn->query($sql) === TRUE) {
    header('Location: '.'../index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahand Ghavidel</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body style="background-image:url(../assets/login.jpg) ;background-repeat: no-repeat; ">

 <div class="container">
 <div class="login-container">
  <h1>WellCome</h1>
  <form action="signup.php" method="post">
    <label for="input">User Name :</label> <br>
    <input type="text" placeholder="please enter your name" name="name" ><br>
    <label for="input">User Email :</label> <br>
    <input type="email" placeholder="please enter your email" name="email"><br>
    <label for="input">User Account number :</label> <br>
    <input type="number" placeholder="please enter your account number" name="account_number"><br>
    <label for="input"> password :</label> <br>
    <input type="password" placeholder="please enter your password" name="password"><br>
    <input type="submit" value="SignUp" name="submit">
  </form>
  <a href="login.php">already have account</a>
 </div></div>
  </body>
</html>
