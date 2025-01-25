<?php include_once ("./header.php"); ?>

<body>

   <!-- header section starts  -->
   <section class="header">

      <a href="index.php" class="logo">OnlineBusTravels</a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="ourbuses.php">Our Buses</a>
         <a href="login.php" id="loginbtn">Login/SignUp</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>


   <section class="buses">

      <h1 class="heading-title">our buses</h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/jagadamba.jpg" alt="">
            </div>
            <div class="content">
               <h3>Jagadamba Travels</h3>
               <p>Lorem ipsum dolor sit amet.</p>
               <a href="./login.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/deluxe.png" alt="">
            </div>
            <div class="content">
               <h3>Deluxe Bus</h3>
               <p>Lorem ipsum dolor sit amet.</p>
               <a href="./login.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/sanjog.jpg" alt="">
            </div>
            <div class="content">
               <h3>Sanjog Travels</h3>
               <p>Lorem ipsum dolor sit amet.</p>
               <a href="./login.php" class="btn">book now</a>
            </div>
         </div>


   </section>

   <!-- packages section ends -->
















   <!-- footer section starts  -->
   <?php include_once ("./footer.php"); ?>