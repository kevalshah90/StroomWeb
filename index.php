<? session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- <head> and <body><header> section is common across all pages -->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Stroom UI </title>
      <!-- Animate With CSS -->
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <!-- Font Awesome KIT -->
      <link href="fontawesome-kit-5/css/all.css" rel="stylesheet">
      <link href="fontawesome-kit-5/css/fontawesome.css" rel="stylesheet">
      <link href="fontawesome-kit-5/css/brands.css" rel="stylesheet">
      <link href="fontawesome-kit-5/css/solid.css" rel="stylesheet">
      <script defer src="fontawesome-kit-5/js/all.js"></script>
      <script defer src="fontawesome-kit-5/js/brands.js"></script>
      <script defer src="fontawesome-kit-5/js/solid.js"></script>
      <script defer src="fontawesome-kit-5/js/fontawesome.js"></script>
      <!-- Slick CSS -->
      <link href="css/slick.css" rel="stylesheet">
      <link href="css/slick-theme.css" rel="stylesheet">
      <!-- Bootstrap Grids -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom Stylings -->
      <link href="css/custom.css" rel="stylesheet">
      <!-- Jquery Library -->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
   </head>
   <body>
      <!-- Header Section Starts Here -->
      <header>
         <div class="container">
            <div class="header-row">
               <div class="logo">
            <a href="index.php"> <img src="images/logo.jpg"> </a>
               </div>
               <div class="navbar-handler">
                  <button class="navbar-trigger"> <img src="images/hamburger.png"> </button>
               </div>
               <div class="navbar-custom">
                  <div class="menu-item">
                     <a> Technology <i class="fa fa-angle-down"> </i> </a>
                    <ul class="sub-menu">
                        <li> <a href="product.php"> Product </a> </li>
                        <li> <a class="scroll-link" href="product.php#data-science-sec"> Data Science </a> </li>
                        <li> <a href=""> Client Login </a> </li>
                     </ul>
                  </div>
                  <div class="menu-item">
                     <a> Resources <i class="fa fa-angle-down"> </i> </a>
                     <ul class="sub-menu">
                        <li> <a href="technical-white-papers.php"> Technical White papers  </a> </li>
                     </ul>
                  </div>
                  <div class="menu-item">
                     <a> Team <i class="fa fa-angle-down"> </i> </a>
                     <ul class="sub-menu">
                        <li> <a href="the-team.php"> About us </a> </li>
                        <li> <a target="_blank" href="https://www.linkedin.com/company/stroom-tech/"> Careers </a> </li>
                        <li> <a class="scroll-link" href="index.php#competitive-advantage-sec"> Contact us </a> </li>
                     </ul>
                  </div>
               </div>
               <div class="header-btn">
                  <a href="" class="custom-btn2"> Get a Demo </a>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Section Ends Here -->
      <!-- Banner Section Starts Here -->
      <section class="banner-sec">
         <div class="container">
            <div class="block-element m-b-50">
               <div class="banner-text">
                  <h3>Identify mispriced value-added <br/>
                     properties and accelerate your </br> acquisitions
                     <span class="col-blue1"> due diligence. </span>
                  </h3>
                  <p>
                     Our platform leverages expertise in Engineering, Data Science
                     and Near Real-time Economics to turn real estate data
                     into decisions.
                  </p>
               </div>
            </div>
            <div class="block-element">
               <div class="banner-form">
                  <form method="post" action="src/demo.php">
                     <input type="email" class="field-style1" placeholder="Email"  name="demo-email">
                     <input type="submit" class="submit-btn1" value="Get a Demo" name="demo-submit">
                  </form>
                   <?php

                 if(isset($_SESSION["success_msg_demo"])) {

                 if($_SESSION["success_msg_demo"]==1){
                     echo '<div class="alert alert-success" style=" margin-top: 10px; max-width: 500px; "> <strong>Success!</strong> Message has been sent successfully. </div>';
                     unset($_SESSION["success_msg_demo"]);

                 }

                 }



                  ?>

               </div>
            </div>
         </div>
      </section>
      <!-- Banner Section Ends Here -->
      <!-- New Way Section Starts Here -->
      <section class="pad-top-80 pad-bot-80 bg-sec2">
         <div class="container">
            <div class="block-element m-b-60 text-center">
               <div class="sec-head1">
                  <h3 class="col-black"> The <span class="col-blue1">future of underwriting </span> <br/>
                      real estate deals
                  </h3>
               </div>
            </div>
            <div class="block-element">
               <div class="row">
                  <div class="col-md-5 col-lg-5 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-2 order-2">
                     <div class="block-element">
                        <div class="way-box">
                           <h4 class="col-blue1"> Generate off-market deal ﬂow. </h4>
                           <p class="col-black"> Support for identifying Core, Value-Add and
                              Opportunistic investments.
                           </p>
                        </div>
                        <div class="way-box">
                           <h4 class="col-blue1"> Economic and Location Insights </h4>
                           <p class="col-black"> Explore economic relationships and obtain granular
                              location insights.
                           </p>
                        </div>
                        <div class="way-box no-margin">
                           <h4 class="col-blue1"> Deal Underwriting </h4>
                           <p class="col-black"> All the information you need to efficiently underwrite acquisition deals. </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-7 col-lg-7 col-sm-12 col-12 order-lg-2 order-md-2 order-sm-1 order-1">
                     <div class="custom-image3">
                        <img src="images/video-placeholder.jpg">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- New Way Section Ends Here -->
      <!-- Acquire with Confidence Section Starts Here -->
      <section class="pad-top-20 pad-bot-20">
         <div class="container">
            <div class="row center-row1">
               <div class="col-md-5 col-lg-5 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-2 order-2">
                  <div class="textual-sec2">
                     <h3 class="col-blue1 m-b-30"> Acquire with
                        conﬁdence
                     </h3>
                     <p class="col-black"> In addition to leveraging alternative data sources to identify potentially value-added neighborhoods, Stroom uses data science to spot anomalies in operational data, indicating a potential opportunistic acquisition.
                     </p>
                  </div>
               </div>
               <div class="col-md-7 col-lg-7 col-sm-12 col-12 order-lg-2 order-md-2 order-1 order-sm-1">
                  <div class="showcase-box">
                     <img src="images/showcase-1.jpg">
                     <img src="images/showcase-2.jpg">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Acquire with Confidence Section Ends Here -->
      <!-- Start Using Our Product Section Starts Here -->
     <!--  <section class="pad-top-100 pad-bot-80 bg-sec1">
         <div class="container">
            <div class="custom-block1">
               <div class="block-element">
                  <div class="custom-image2">
                     <img src="images/circle-1.png">
                  </div>
               </div>
               <div class="block-element">
                  <div class="row center-row1">
                     <div class="col-md-7 col-lg-7 col-sm-12 col-12">
                        <div class="custom-image1">
                           <img src="images/product-rating.jpg">
                        </div>
                     </div>
                     <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                        <div class="textual-sec">
                           <h3 class="col-white m-b-30"> Start using our product </h3>
                           <p class="col-white m-b-30"> With a combination of technology and in-market
                              know-how, we're delivering <b> powerful efficiencies
                              for investors and exceptional experiences for
                              residents </b> who want the convenience and freedom
                              of a high-quality rental home.
                           </p>
                           <a href="" class="custom-btn1"> Demo <i class="fa fa-caret-right"> </i> </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- Start Using Our Product Section Ends Here -->

      <!-- Video Demo Section Starts Here -->
      <section class="pad-top-60 pad-bot-20">
        <div class="container">

        <div class="block-element text-center m-b-50">
          <div class="sec-head1">
                  <h3 class="col-black"> Video  <span class="col-blue1"> Demo </span>
                  </h3>
               </div>
        </div>

        <div class="block-element">
         <div class="demo-video-block">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4e58HDXvLf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
        </div>


        </div>
      </section>
      <!-- Video Demo Section Ends Here -->


      <!-- Rental Technology Section Starts Here -->
      <section class="pad-top-80 pad-bot-40">
         <div class="container">
            <div class="block-element m-b-60 text-center">
               <div class="sec-head1">
                  <h3 class="col-black">  Acquisitions due diligence technology designed to increase your <span class="col-blue1"> competitive advantage </span>
                  </h3>
               </div>
            </div>


            <div class="row">

            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
            <div class="plain-box">
            <h3 class="col-blue1"> Identify </h3>
            <p> Work with our specialized brokers to
                           develop your buy box by market, and
                           select your target asset and market
                           criteria. Our algorithm instantly
                           returns a ranked list of properties that
                           ﬁt your strategy.
                        </p>
            </div>
            </div>


            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
            <div class="plain-box">
            <h3 class="col-blue1"> Save & Compare </h3>
            <p> Balancing workﬂow automation with highly personalized resident service at scale, our teams and tech operate in sync to create a responsive, efﬁcient experience from marketing and leasing through ongoing maintenance and turns. </p>
            </div>
            </div>




            <div class="col-md-4 col-lg-4 col-sm-12 col-12">
            <div class="plain-box">
            <h3 class="col-blue1"> Analyze </h3>
            <p> Use multiple interactive data sets, extensive comps, highly-tuned AVMs, and automated underwriting tools to evaluate listings with the help of our dedicated teams. </p>
            </div>
            </div>

            </div>


         <!--    <div class="block-element">
               <div class="row">
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="tech-box">
                        <i class="fa fa-search"> </i>
                        <h4 class="col-blue1"> Identify </h4>
                        <p> Work with our specialized brokers to
                           develop your buy box by market, and
                           select your target asset and market
                           criteria. Our algorithm instantly
                           returns a ranked list of properties that
                           ﬁt your strategy.
                        </p>
                     </div>
                     <div class="line-box1">
                        <h4> <span> . </span> 01 </h4>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="tech-box">
                        <i class="fa fa-search"> </i>
                        <h4 class="col-blue1"> Analyze </h4>
                        <p> Use multiple interactive data sets,
                           extensive comps, highly-tuned AVMs,
                           and automated underwriting tools to
                           evaluate listings with the help of our
                           dedicated teams.
                        </p>
                     </div>
                     <div class="line-box1">
                        <h4> <span> . </span> 02 </h4>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="tech-box">
                        <i class="fa fa-search"> </i>
                        <h4 class="col-blue1"> Transact </h4>
                        <p> Initiate offers in minutes directly
                           through our platform. Our experi-
                           enced in-market agents do the rest,
                           deftly managing transactions
                           end-to-end based on pre-established
                           criteria.
                        </p>
                     </div>
                     <div class="line-box1">
                        <h4> <span> . </span> 03 </h4>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="tech-box">
                        <i class="fa fa-search"> </i>
                        <h4 class="col-blue1"> Renovate </h4>
                        <p> Backed by automated renovation
                           estimates and target AVMs, our
                           renovation teams scope properties
                           and work with trusted in-market pros
                           to bring quality and thoughtful
                           standardization to every home.
                        </p>
                     </div>
                     <div class="line-box1">
                        <h4> <span> . </span> 04 </h4>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="tech-box">
                        <i class="fa fa-search"> </i>
                        <h4 class="col-blue1"> Manage </h4>
                        <p> Balancing workﬂow automation with
                           highly personalized resident service at
                           scale, our teams and tech operate in
                           sync to create a responsive, efﬁcient
                           experience from marketing and
                           leasing through ongoing maintenance
                           and turns.
                        </p>
                     </div>
                     <div class="line-box1">
                        <h4> <span> . </span> 05 </h4>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                     <div class="tech-box">
                        <i class="fa fa-search"> </i>
                        <h4 class="col-blue1"> Transact </h4>
                        <p> Applying structured data from thou
                           sands of homes and a growing roster
                           of markets, we analyze single-family
                           rental portfolio performance, reporting
                           on key metrics and recommending
                           opportunities to ﬁne-tune holdings in
                           accord with our clients.
                        </p>
                     </div>
                     <div class="line-box1">
                        <h4> <span> . </span> 06 </h4>
                     </div>
                  </div>
               </div>
            </div> -->


         </div>
      </section>
      <!-- Rental Technology Section Ends Here -->
      <!-- Our Happy Clients Section Starts Here -->
      <section class="pad-top-20">
         <div class="container">
            <div class="custom-block2">
               <div class="row center-row1">
                  <div class="col-md-7 col-lg-7 col-sm-12 col-12">
                     <div class="textual-sec3">
                        <h3 class="col-black m-b-30"> Some of our <span class="col-blue1"> Happy
                           Clients </span>
                        </h3>
                        <p class="col-black"> Lorem ipsum dolor sit amet, consectetuer adipiscing
                           elit, sed diam nonummy nibh euismod tincidunt ut
                           laoreet dolore magna aliquam erat volutpat. Ut wisi
                           enim ad minim veniam, quis nostrud exerci tation
                           ullamcorper suscipit lobortis nisl ut aliquip ex ea
                           commodo consequat.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                     <div class="review-slider">
                        <div class="review-box">
                           <div class="review-desc">
                              <h4 class="col-black"> Company Name </h4>
                              <p class="col-black"> Lorem ipsum dolor sit amet, consec
                                 tetuer adipiscing elit, sed diam nonummy
                                 nibh euismod tincidunt ut laoreet dolore
                                 magna aliquam erat volutpat. Ut wisi
                                 enim ad minim veniam, quis nostrud
                                 exerci tation ullamcorper suscipit
                              </p>
                           </div>
                           <div class="review-profile">
                              <div class="review-name">
                                 <img src="images/avatar-1.jpg">
                                 <h4> John Doe </h4>
                                 <p> Managing Director </p>
                              </div>
                              <div class="review-rating">
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-off"> </i>
                              </div>
                           </div>
                        </div>
                        <div class="review-box">
                           <div class="review-desc">
                              <h4 class="col-black"> Company Name 2 </h4>
                              <p class="col-black"> Lorem ipsum dolor sit amet, consec
                                 tetuer adipiscing elit, sed diam nonummy
                                 nibh euismod tincidunt ut laoreet dolore
                                 magna aliquam erat volutpat. Ut wisi
                                 enim ad minim veniam, quis nostrud
                                 exerci tation ullamcorper suscipit
                              </p>
                           </div>
                           <div class="review-profile">
                              <div class="review-name">
                                 <img src="images/avatar-1.jpg">
                                 <h4> John Doe </h4>
                                 <p> Managing Director </p>
                              </div>
                              <div class="review-rating">
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-off"> </i>
                              </div>
                           </div>
                        </div>
                        <div class="review-box">
                           <div class="review-desc">
                              <h4 class="col-black"> Company Name 3</h4>
                              <p class="col-black"> Lorem ipsum dolor sit amet, consec
                                 tetuer adipiscing elit, sed diam nonummy
                                 nibh euismod tincidunt ut laoreet dolore
                                 magna aliquam erat volutpat. Ut wisi
                                 enim ad minim veniam, quis nostrud
                                 exerci tation ullamcorper suscipit
                              </p>
                           </div>
                           <div class="review-profile">
                              <div class="review-name">
                                 <img src="images/avatar-1.jpg">
                                 <h4> John Doe </h4>
                                 <p> Managing Director </p>
                              </div>
                              <div class="review-rating">
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-onn"> </i>
                                 <i class="fa fa-star star-off"> </i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Our Happy Clients Section Ends Here -->
      <!-- Start Accelarating Your Growth Section Starts Here -->
      <section id="competitive-advantage-sec" class="growth-sec">
         <div class="container">
            <div class="block-element m-b-60">
               <div class="sec-head2 text-center">
                  <h3 class="col-white"> Gain your competitive advantage today  </h3>
               </div>
            </div>
            <div class="block-element">
               <div class="form-block">
                  <form method="post" action="src/contact.php">
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <div class="form-field2">
                              <input type="text" placeholder="Name" class="field-style2" name="name">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <div class="form-field2">
                              <input type="email" placeholder="Email" class="field-style2" name="email">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <div class="form-field2">
                              <input type="text" placeholder="Company Name" class="field-style2" name="company-name">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <div class="form-field2">
                              <input type="number" placeholder="Phone" class="field-style2" name="number">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <div class="form-field2">
                              <input type="text" placeholder="Job Title" class="field-style2" name="job-title">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <div class="form-field2">
                              <input type="submit" class="submit-btn2" value="Submit" name="submit">
                           </div>
                        </div>
                     </div>
                  </form>

                    <?php

                 if(isset($_SESSION["success_msg_contact"])) {

                 if($_SESSION["success_msg_contact"]==1){
                     echo '<div class="alert alert-success"> <strong>Success!</strong> Message has been sent successfully. </div>';
                     unset($_SESSION["success_msg_contact"]);

                 }

                 }



                  ?>



               </div>
            </div>
         </div>
      </section>
      <!-- Start Accelarating Your Growth Section Ends Here -->
      <!-- Footer Section Starts Here -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-lg-3 col-sm-12 col-12">
                  <div class="footer-logo">
                     <a href="index.php"> <img src="images/footer-logo.jpg"> </a>
                     <p> <a href="mailto:info@stroomcre.com"> info@stroomcre.com </a> </p>
                  </div>
                  <div class="social-follow">
                     <h3> FOLLOW US ON </h3>
                     <ul>
                        <li> <a target="_blank" href="https://www.linkedin.com/company/stroom-tech/"> <i class="fab fa-linkedin-in"> </i> </a> </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9 col-lg-9 col-sm-12 col-12">
                  <div class="footer-row">
                     <div class="footer-block">
                        <h3 class="footer-head"> Technology </h3>
                        <ul>
                        <li> <a href="product.php"> Product </a> </li>
                        <li> <a class="scroll-link" href="product.php#data-science-sec"> Data Science </a> </li>
                        <li> <a href=""> Client Login </a> </li>
                        </ul>
                     </div>
                     <div class="footer-block">
                        <h3 class="footer-head"> Resources </h3>
                        <ul>
                           <li> <a href="technical-white-papers.php"> Technical White papers  </a> </li>
                        </ul>
                     </div>
                     <div class="footer-block">
                        <h3 class="footer-head"> Team </h3>
                        <ul>
                          <li> <a href="the-team.php"> About us </a> </li>
                        <li> <a target="_blank" href="https://www.linkedin.com/company/stroom-tech/"> Careers </a> </li>
                        <li> <a class="scroll-link" href="index.php#competitive-advantage-sec"> Contact us </a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section Ends Here -->
      <!-- Copyrights Section Starts Here -->
      <section class="copyrights-sec">
         <div class="container">

             <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-12 footer-bottom-left order-lg-1 order-md-1 order-sm-1 order-2">
            <span> © Copyright 2022 <span class="col-blue1"> STROOM </span> </span>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-6 col-12 footer-bottom-right order-lg-2 order-md-2 order-sm-2 order-1">
            <a class="legal-link1" href="privacy-policy.php"> Privacy Policy </a>
            <a class="legal-link1" href="terms-and-conditions.php"> Terms & Conditions </a>
            </div>

             </div>



         </div>
      </section>
      <!-- Copyrights Section Ends Here -->
      <!-- Bootstrap Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"> </script>
      <script src="js/functions.js"> </script>
      <!-- Slick Slider -->
      <script src="js/slick-slider.js"> </script>
      <script src="js/slick-functions.js"> </script>
      <script type="text/javascript">
         $('.review-slider').slick({
         dots: false,
         infinite: true,
         speed: 300,
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: true,
         focusOnSelect: false,
         pauseOnHover:false,
         autoplaySpeed: 2000,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               infinite: true,
               dots: true
             }
           },

           {
             breakpoint: 768,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               infinite: true,
               dots: true
             }
           },

           {
             breakpoint: 700,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               infinite: true,
               dots: true
             }
           },

           {
             breakpoint: 600,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           }
           // You can unslick at a given breakpoint now by adding:
           // settings: "unslick"
           // instead of a settings object
         ]
         });




      </script>
   </body>
</html>
