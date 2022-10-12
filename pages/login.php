<?php

require "../confiq/confiq.php";

if(isset($_POST['submit']))
{

 $password=$_POST['password'];
 $email=$_POST['email'];
 setcookie('user', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
 $_COOKIE['user']=$_POST['name'];
  $sql = "select * from  users where email ='".$email."' AND password = '".$password."'";
  $res=$conn->query($sql);
  print_r($res->fetch_assoc());
  if ($res->num_rows > 0) {
    header('Location: '.'../index.php');
  } else {

   ?>
<p id="error"class="erro">Your email and password are incorrect ??.</p>
<?php

  }
}

?>
<style>
  .erro {
  float:left;
  position: fixed;
  left:40%;
  top: 6rem;
  opacity: 0;
  animation-name: inim;
  animation-duration: 5s;
  animation-iteration-count: none;
  width: 22rem;
  list-style: none;
  padding:1rem;
  background: rgba(115, 112, 112, 0.4);
  border-radius: 10px;
  border: none;
  color:black !important;
  border-right: 6px solid var(--pink);
  border-left: 6px solid var(--pink);
  backdrop-filter: blur(5px);
  z-index:1000;
}
</style>
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
  <form action="login.php" method="post">
    <label for="input">User Email :</label> <br>
    <input type="email" placeholder="please enter your email" name="email"><br>
    <label for="input"> password :</label> <br>
    <input type="password" placeholder="please enter your password" name="password"><br>
    <input type="submit" value="Login" name="submit">
  </form>
  <a href="signup.php">dont have account</a>
 </div></div>
  </body>
</html>
