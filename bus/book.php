<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">OnlineBusTravels</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.html">About</a>
         <a href="ourbuses.html">Our Buses</a>
         <a href="ourbuses.html">Book</a>
         <a href="./controller/logout.php" class="loginbtn">Logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book now</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your bus</h1>

      <form action="" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" maxlength="30" name="name">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" maxlength="50" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" maxlength="10" min="0" max="9999999999" placeholder="enter your number"
                  name="phone">
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" maxlength="50" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>From :</span>
               <input type="text" placeholder="start-city" name="location" maxlength="50">
            </div>
            <div class="inputBox">
               <span>To :</span>
               <input type="text" placeholder="destination-city" name="location" maxlength="50">
            </div>
            <div class="inputBox">
               <span>Date :</span>
               <input type="date" name="">
            </div>
         </div>

         <input type="submit" value="SearchBus" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->

















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> About</a>
            <a href="ourbuses.html"> <i class="fas fa-angle-right"></i> Our Buses</a>
            <a href="book.html"> <i class="fas fa-angle-right"></i> Book</a>
         </div>

         <div class="box">
            <h3>Top Routes</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Pokhara-Kathmandu</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Pokhara-Ghandruk</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Pokhara-Baglung</a>

         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i>9809669245 </a>
            <a href="#"> <i class="fas fa-envelope"></i> onlinebustravels@gmail.com </a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>
   </section>
   <footer>
      &copy; 2024 Online Bus Travels
   </footer>


   <!-- footer section ends -->






   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>