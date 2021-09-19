<!DOCTYPE html>
<html lang="en">

<head>

     <title>InternBoxx</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/line-icons.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->

     <link rel="stylesheet" href="css/templatemo-style.css">
     <style>
          .slider .item {
               background-position: inherit;
               background-repeat: no-repeat;
               background-attachment: local;
               background-size: cover;
               height: 200px;
          }



          form {
               max-width: 300px;
               margin: 10px auto;
               padding: 10px 20px;
               background: #f4f7f8;
               border-radius: 8px;
          }

          h1 {
               margin: 0 0 30px 0;
               text-align: center;
          }

          input[type="text"],
          input[type="password"],
          input[type="date"],
          input[type="datetime"],
          input[type="email"],
          input[type="number"],
          input[type="search"],
          input[type="tel"],
          input[type="time"],
          input[type="url"],
          textarea,
          select {
               background: rgba(255, 255, 255, 0.1);
               border: none;
               font-size: 16px;
               height: auto;
               margin: 0;
               outline: 0;
               padding: 15px;
               width: 100%;
               background-color: #e8eeef;
               color: #8a97a0;
               box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
               margin-bottom: 30px;
          }

          input[type="radio"],
          input[type="checkbox"] {
               margin: 0 4px 8px 0;
          }

          select {
               padding: 6px;
               height: 32px;
               border-radius: 2px;
          }

          button {
               padding: 19px 39px 18px 39px;
               color: #FFF;
               background-color: #45B5EA;
               font-size: 18px;
               text-align: center;
               font-style: normal;
               border-radius: 5px;
               width: 100%;
               border: 1px solid #3ac162;
               border-width: 1px 1px 3px;
               box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
               margin-bottom: 10px;
          }

          fieldset {
               margin-bottom: 30px;
               border: none;
          }

          legend {
               font-size: 1.4em;
               margin-bottom: 10px;
          }

          label {
               display: block;
               margin-bottom: 8px;
          }

          label.light {
               font-weight: 300;
               display: inline;
          }



          @media screen and (min-width: 480px) {

               form {
                    max-width: 480px;
               }

          }
     </style>

</head>

<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">InternBoxx</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="index.php" class="smoothScroll">About</a></li>
                         <li><a href="index.php" class="smoothScroll">What you get</a></li>
                         <li><a href="index.php" class="smoothScroll">Contact Us</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <a href="register.php" class="section-btn">Internships</a>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

               <div class="owl-carousel owl-theme">


                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">



                                   </div>
                              </div>
                         </div>
                    </div>


               </div>
          </div>

          </div>
     </section>


     <!-- Registration form -->
     <h2 class="text-center">TELL US A BIT ABOUT YOURSELF</h2><br>
     <form action="connect.php" method="post">
          <fieldset>
               <label for="degree">What degree did you study/are you currently studying?</label>
               <input type="text" id="degree" name="degree">

               <label for="interest">Areas of Interest e.g Project Management, Research, Web Development, etc</label>
               <input type="text" id="interest" name="interest">
               <label>Preferred type of Internship</label>
               <input type="radio" id="fulltime" value="fulltime" name="type"><label for="fulltime" class="light">Fulltime</label><br>
               <input type="radio" id="parttime" value="parttime" name="type"><label for="parttime" class="light">Parttime</label>
               <label>Preferred nature of Internship</label>
               <input type="radio" id="under_13" value="remote" name="nature"><label for="remote" class="light">Remote</label><br>
               <input type="radio" id="over_13" value="inperson" name="nature"><label for="inperson" class="light">In-person</label><br>


          </fieldset>
          <button type="submit">Submit</button>
     </form>

     <!-- FOOTER -->
     <footer class="footer-distributed">

          <div class="footer-right">

               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>


          </div>

          <div class="footer-left">

               <p class="footer-links">


                    <a href="index.php">Home</a>

                    <a href="index.php">About Us</a>

                    <a href="index.php">What you get</a>

                    <a href="index.php">Contact Us</a>

                    <a href="register.php">Internships</a>
               </p>

               <p>Internboxx &copy; 2021</p>
          </div>

     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>