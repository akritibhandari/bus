<?php include_once ("./header.php"); ?>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">OnlineBusTravels</a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="../booking.php">Book</a>
         <a href="../controller/logout.php" class="loginbtn">Logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(../images/bus.jpg) no-repeat">
               <div class="content">
                  <span>Book Your Bus Ticket Now!</span>
                  <h3>Explore The Best Bus Travel Options With Us</h3>
                  <a href="../booking.php" class="btn">Book Now</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(../images/bus3.jpg) no-repeat">
               <div class="content">
                  <span>Book Your Bus Ticket Now!</span>
                  <h3>You can travel with us happily and comfortably</h3>
                  <a href="book.php" class="btn">Book Now</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(../images/bus2.jpg) no-repeat">
               <div class="content">
                  <span>Book Your Bus Ticket Now!</span>
                  <h3>Take the bus that is good for you.</h3>
                  <a href="book.php" class="btn">Book Now</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>


   <!-- home about section ends -->
   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading-title"> our services </h1>

      <div class="box-container">

         <div class="box">
            <img src="../images/wifi.png" alt="">
            <h3>Free Wifi</h3>
         </div>

         <div class="box">
            <img src="../images/charger.png" alt="">
            <h3>Charger Points</h3>
         </div>

         <div class="box">
            <img src="../images/bottle.png" alt="">
            <h3>water Bottle</h3>
         </div>

         <div class="box">
            <img src="../images/pillow.png" alt="">
            <h3>Comfortable seats and pillows</h3>
         </div>

         <div class="box">
            <img src="../images/newspaper.png" alt="">
            <h3>Daily Newspaper</h3>
         </div>

         <div class="box">
            <img src="../images/music.png" alt="">
            <h3>Music</h3>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <img src="../images/bus1.png" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam
            ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident
            voluptate?</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- home buses section starts  -->

   <section class="home-buses">

      <h1 class="heading-title"> Our Buses </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="../images/jagadamba.jpg" alt="">
            </div>
            <div class="content">
               <h3>Jagadamba Travels</h3>
               <p>Lorem ipsum dolor sit amet.</p>
               <a href="./booking.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="../images/deluxe.png" alt="">
            </div>
            <div class="content">
               <h3>Deluxe bus</h3>
               <p>Lorem ipsum dolor sit amet.</p>
               <a href="../booking.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="../images/sanjog.jpg" alt="">
            </div>
            <div class="content">
               <h3>Sanjog Travels </h3>
               <p>Lorem ipsum dolor sit amet.</p>
               <a href="../booking.php" class="btn">book now</a>
            </div>
         </div>

      </div>


   </section>

   <!-- home buses section ends -->
















   <?php include_once ("./footer.php"); ?>