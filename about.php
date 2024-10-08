<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Skidadle</title>
   <link rel="icon" type="image/png" href="images\skidadle.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/mainbg.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choosing skidaddle.com allows you to purchase the most authentic
               skateboards. Apart from the numerous advantages of choosing us,
               some of the most important ones are being mentioned below:-
</p>
         <p>Facility to choose from a wide range of collection, 100% authentic,
         boards are also available at affordable prices, Attractive discounts on different boards, Cash on Delivery facility available, Free Home Delivery facility available,100% Secure and Safe Shopping</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>