<?php require "../confiq/confiq.php"; ?>

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
  <body style="background-image: url(../assets/back.jpg)">
    <nav>
      <div class="nav-main">
        <div class="nav-logo">
          <img src="../assets/Logo.png" alt="" />
        </div>
        <ul class="menu">
          <li>
            <a href="../index.php">Home</a>
          </li>
          <li>
            <a href="wedding.php">Wedding</a>
          </li>
          <li>
            <a href="gift.php">Gifts</a>
          </li>
          <li>
            <a href="about.php">About</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <a href="signup.php" target="_blank"
            ><span class="sign sign1"> sign in </span></a
          >
        </ul>
        <a href="signup.php" target="_blank"
          ><span class="sign">
            <img src="../assets/Sesion.png" alt="" width="20%" height />
            sign in
          </span></a
        >
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    </nav>

    <main>
      <header class="wedding-header">
        <h1>Wedding Flowers</h1>
      </header>
    </main>

    <?php
if(isset($_POST['buy']))
{
?>
<p id="error"class="error">payed sucessfully .<br> your order will be delivered in 24H .</p>
<?php
}
?>
    <div class="wedding-text">
      <h1 class="reveal fade-right">We Love To Do Weddings</h1>
      <p class="reveal fade-left">
        We are here to help with an array of beautiful flowers for stunning
        ceremonies, gorgeous lunches, dinners and parties. We invite brides to
        visit us at any of our stores to discuss their vision. Please email or
        call us, we are waiting to meet you.
      </p>
    </div>

 <!--    cards     -->
 
 <section class="sec">
  <h1>Our Wedding Flowers</h1>
  <h5>we a greet collection produced for you</h5>
</section>

<!-- this is card-->
<section class="card-container reveal fade-bottom">

<?php 
  if ($wedding_result->num_rows > 0) {
    // output data of each row
    while($row = $wedding_result->fetch_assoc()) {
         ?>
      <div class="card reveal fade-bottom">
      <img src="../assets/<?php echo $row["image"] ?>" alt="" width="100%" />
      <img src="../assets/Heart 3.png" alt="" class="heart" />
      <h3><?php echo $row["name"] ?></h3>
      <p><?php echo $row["description"] ?></p>
      <span style="cursor: pointer;" class="shop-now"  onclick="document.getElementById('id01').style.display='block'">Buy Now</span>
    <!-- Trigger/Open The Modal -->
<!-- Trigger/Open the Modal -->
<em class="pink" style="font-size:1.5rem;color:#a57266;margin-left:4rem;"><?php echo $row["price"] ?>$</em>

      </div>
      
<!-- The Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <p  onclick="document.getElementById('id01').style.display='none'"
      >x</p>
      Are You sure you want to pay <em style="font-size:1.5rem;color:#a57266;"><?php echo $row["price"]?>$</em> to buy <?php echo $row["name"]?> ?  
      <br><form action="#" method="post"><input name="buy" value="Buy Now" type="submit" onclick="document.getElementById('id01').style.display='none'" class="shop-now"></input>
      <span href=""onclick="document.getElementById('id01').style.display='none'" class="read-more">Cancel</span></form> 
      </div>
  </div>
</div>
  <?php }}  ?>
   <style>
    .w3-modal{
      position:fixed;
      display:none;
      top:1rem;
       padding:2rem;
      background-color:white;
      border-radius:1rem;
      z-index: 300;
      transition: all 0.3s ease-in-out;
    }
    .w3-modal p{
    background-color: #765a33;
    color:white;
    border-radius: 50%;
    width:30px;
    height:30px;
    text-align:center;
 cursor: pointer;
    }
    .w3-modal span{
   cursor: pointer;
    }
    .w3-modal p:hover{
    background-color: wheat ;
    color:#a57266;
    border-radius: 50%;
    width:30px;
    height:30px;
    text-align:center;
 cursor: pointer;
    }
   </style>


    </section>





    <section class="we-love">
      <img src="../assets/brid2.png" alt="" width="500" height="" class="reveal fade-right"/>
  <div class="we-love-text reveal fade-left">
   <h1>Our Pricing</h1>
    <p>wedding is ever the same, that’s why we are here to assist in creating a fully customised proposal to meet your specific requirements (no matter how specific) within all budgets.</p>
    <a href="" class="shop-now">Get Pricing</a>
  </div>
  
  
    </section>

    <!-- footer section -->
    <footer>
      <h1>Subscribe Our Newsletter</h1>
      <p>Be the first to know about upcoming and discoveries</p>
      <div class="subscribe">
        <input type="text" placeholder="enter your Email" /><span for=""
          >Subscribe</span
        >
      </div>
      <div class="social-footer">
        <img src="../assets/Logo.png" alt="" />
        <div>
          <a href="">what we offer</a>
          <a href="">how it works</a>
          <a href="">sign up</a>
        </div>
        <div>
          <a href=""><img src="../assets/facebook.png" alt="" width="35" /></a>
          <a href=""><img src="../assets/insta.ong.png" alt="" width="35" /></a>
          <a href=""><img src="../assets/youtube.png" alt="" width="35" /></a>
        </div>
      </div>
    </footer>

    <div class="copyright">
      &copy;. All rights reserved copyright &copy;2022
    </div>
    <script src="../js/index.js"></script>
  </body>
</html>
