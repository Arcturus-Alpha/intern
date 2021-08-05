<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./contact.css">
    <link rel="icon" href="resources/images/company_logo.png" type="image/gif" sizes="16x16">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/css/global/animate.css" type="text/css" />
    <link rel="stylesheet" href="resources/css/global/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/global/custom.css">

    <link rel="stylesheet" href="resources/css/global/owl.carousel.min.css" />
    <link rel="stylesheet" href="resources/css/global/global.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="resources/js/global/jquery.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106176489-2"></script>
    
    
    <script src="resources/js/gtgs.js"></script>

    <link rel="stylesheet" href="resources/css/fontawesome/css/style.css">
    <link rel="stylesheet" href="./portfolio.css">


    

    
    <style>
 .navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030; margin:0; padding:0;}
    </style>

</head>
<body>
 <nav class="navbar z-4 navbar-expand-md navbar-light sticky-top bg-nav navbar-fixed-top " style=" margin: 0; padding: 0;" >
        <a class="navbar-brand" href="./index.php"><img src="resources/images/company_logo.png" class="company-logo"
                alt="Daphnis Labs"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="collapsibleNavbar">
            
            <ul class="navbar-nav main-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php"><span class='blue'>Home</span>   <span class='angler'>></span>
                <!--<p id='un' class='sp' style="text-decoration: underline;"></p>-->
                </a>
                    <div class="line">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about_us.php">About Us <span class='angler'>></span> </a>
                    <div class="line">
                    </div>
                </li>
                <li class="nav-item dropdown-link drop heightM">
                    <a class="nav-link" href="#" onclick="addClass()" data-toggle="dropdown">Service<span class='angler'></span>
                       <!-- <i class="fa fa-angle-down" aria-hidden="true"></i>-->
                    </a>
                    <div class="line">
                    </div>
                    <ul class="dropdown-menu servicesA fade-down dropdown-menu-large" style="width: 100%">
                        <div class="row drop-contain">
                            <li class="col-6 col-md-2 offset-md-1">
                                <div class="dropd-head">
                                    <span class="dropd-head-in">
                                        Mobile Application Development
                                    </span>
                                </div>
                                <ul>
                                    <li class="android"><a href="./sections/android">Android Development</a></li>
                                    <li class="iphone"><a href="./sections/ios">iOS Development</a></li>
                                    <li class="ar"><a href="./sections/arApp">AR Development</a></li>
                                    <li class="ionic"><a href="./sections/ionic">Ionic Development</a></li>
                                    <li class="native"><a href="./sections/native">React Native Development</a></li>
                                    <li class="hybrid"><a href="./sections/hybrid">Hybrid app Development</a></li>
                                </ul>
                            </li>
                            <li class="col-6 col-md-2">
                                <div class="dropd-head">
                                    <span class="dropd-head-in">
                                        Web Development
                                    </span>
                                </div>
                                <ul>
                                    <li class="mean"><a href="./sections/meanStack">MEAN Stack Development</a></li>
                                    <li class="react"><a href="./sections/reactjs">Reactjs Development</a></li>
                                    <li class="angular"><a href="./sections/angular">AngularJs Development</a></li>
                                    <li class="ecom"><a href="./sections/ecom-w">Ecommerce Development</a></li>
                                    <li class="web"><a href="./sections/websiteDev/index.php">Responsive Web Development</a></li>
                                    <li class="php"><a href="./sections/laravel/index.php">PHP Development</a></li>
                                </ul>
                            </li>
                            <li class="col-6 col-md-2">
                                <div class="dropd-head">
                                    <span class="dropd-head-in">
                                        Game Development
                                    </span>
                                </div>
                                <ul>
                                    <li class="game"><a href="./sections/mobileD">Mobile Game Development</a></li>
                                    <li class="vrgame"><a href="./sections/vrGame">VR Game Development</a></li>
                                    <li class="argame"><a href="./sections/arGame">AR Game Development</a></li>
                                    <li class="unity"><a href="./sections/unity">Unity3D Game Development</a></li>
                                    <li class="multi"><a href="./sections/multiG">Multiplayer Game Development</a></li>
                                    <li class="casual"><a href="./sections/casual">Casual Game Development</a></li>
                                </ul>
                            </li>
                            <li class="col-6 col-md-2">
                                <div class="dropd-head">
                                    <span class="dropd-head-in">
                                        AI and Data Analytics
                                    </span>
                                </div>
                                <ul>
                                    <li class="ml"><a href="./sections/ml">Machine Learning</a></li>
                                    <li class="deepl"><a href="./sections/deep-l">Deep Learning</a></li>
                                    <li class="cv"><a href="./sections/cv">Computer Vision</a></li>
                                    <li class="pra"><a href="./sections/pred">Predictive Analytics</a></li>
                                    <li class="chtbt"><a href="./sections/chat">Chatbot Development</a></li>
                                    <li class="bigd"><a href="./sections/bd">Big Data</a></li>
                                </ul>
                            </li>
                            <li class="col-6 col-md-2">
                                <div class="dropd-head">
                                    <span class="dropd-head-in">
                                        Blockchain Development
                                    </span>
                                </div>
                                <ul>
                                    <li class="eth"><a href="./sections/Eth-dev">Ethereum Development</a></li>
                                    <li class="fab"><a href="./sections/hyper-led">Hyperledger Fabric Development</a>
                                    </li>
                                    <li class="eos"><a href="./sections/eos">EOS Development</a></li>
                                    <li class="exch"><a href="./sections/exc">Exchange Development</a></li>
                                    <li class="crypt"><a href="./sections/crypt">Cryptocurrency Development</a></li>
                                    <li class="smcont"><a href="./sections/smart-c">Smartcontract Development</a></li>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown-link drop-p heightM" onclick="addClass2()" style="z-index:500">
                    <a class="nav-link" href="portfolio.php" data-toggle="portfolio">Portfolio<span class='angler'>></span>
                        
                    </a>
                    <!-- <div class="line">
                    </div>
                    <ul class="dropdown-menu portA portfolio-d fade-down dropdown-menu-large">
                        <div class="row drop-contain">
                            <li class="col-12">
                                <ul>
                                    <li class="android "><a href="#">
                                            <p class="center-text">Android</p>
                                        </a></li>
                                    <li class="iphone"><a href="./sections/ios/">
                                            <p class="center-text">IPhone</p>
                                        </a></li>
                                    <li class="crossP"><a href="./sections/crm">Cross-Platform</a></li>
                                    <li class="vrAr"><a href="./sections/vrApp">
                                            <p class="center-text">VR/AR</p>
                                        </a></li>
                                    <li class="ecom"><a href="./sections/ecom">
                                            <p class="center-text">Ecommerce</p>
                                        </a></li>
                                    <li class="buiz"><a href="./sections/bd">
                                            <p class="center-text">Business</p>
                                        </a></li>
                                    <li class="restR"><a href="./sections/ecom">
                                            <p class="center-text">Restaurant</p>
                                        </a></li>
                                </ul>
                            </li>
                        </div>
                    </ul> -->
                </li>


                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                    <div class="line">
                    </div>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="clickMe">
                        <a class="nav-link" href="contact1.php">Contact<span class='angler'></span></a>
                    </a>
                    <div class="line">
                    </div>
                </li>
            </ul>
        </div>  
    </nav>

    
<div class='tagline'>
     <h1>Crafted with Love. Build with Passion </h1>
     <h2>We optimize and accelerate growth for already great products</h2>

</div>

<div class='subhead'>
    <h1>Clients who we have worked with</h1>
</div>


<div class='tiles'>
    <div  class='tile'><img id='i1' src='./resources/images/logo Datotta.png'> </div>
    <div  class='tile'><img id='i2' src='./resources/images/logo-10.png'> </div>
    <div  class='tile'><img id='i3' src='./resources/images/logo-03.png'> </div>
    <div  class='tile'><img id='i4' src='./resources/images/nakshatra.png'> </div>
    <div  class='tile'><img id='i5' src='./resources/images/Loreto logo.png'> </div>
    <div  class='tile'><img id='i6' src='./resources/images/logo-08.png'> </div>
    <div  class='tile'><img id='i7' src='./resources/images/download (11).png'> </div>
    <div  class='tile'><img id='i8' src='./resources/images/Group 3514.png'> </div>
    <div  class='tile'><img id='i9' src='./resources/images/logo-04.png'> </div>
    <div  class='tile'><img id='i10' src='./resources/images/Hyrefeed logo-01.png'> </div>
    <div  class='tile'><img id='i11' src='./resources/images/bgbnsdgn.png'> </div>
    <div  class='tile'><img id='i12' src='./resources/images/download (14).png'> </div>
    <div  class='tile'><img id='i13' src='./resources/images/download (13).png'> </div>
    <div  class='tile'><img id='i14' src='./resources/images/Group 3515.png'> </div>
    <div  class='tile'><img id='i15' src='./resources/images/logo-02.png'> </div>
    <div  class='tile'><img id='i16' src='./resources/images/download (12).png'> </div>
    <div  class='tile'><img id='i17' src='./resources/images/IndiBull Logo 1k (1).png'> </div>



</div>

<div class='subtagline'>
<h1>What are you waiting for Contact now and experience Supremacy</h1>
<a href='./contact.php'> <button class='tagbtn'>Get in Touch</button></a>
</div>






<div class="footer-sec position-relative">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <div class="row mx-0">
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="widget">
                <img src="resources/images/company_logo.png" class="mb-4" alt="Daphnis Labs">
                <div class="social-links align-c">
                  <a href="https://www.facebook.com/DaphnisLabs/" class="align-c social-links-inner">
                    <img src="./resources/images/footer/fb.png" alt="facebook Daphnis Labs">
                  </a>
                  <a href="https://www.instagram.com/daphnis_labs/" class="align-c social-links-inner">
                    <img src="./resources/images/footer/instagram.png" alt="facebook Daphnis Labs">
                  </a>
                  <a href="https://twitter.com/DaphnisLabs" class="align-c social-links-inner">
                    <img src="./resources/images/footer/twitter.png" alt="facebook Daphnis Labs">
                  </a>
                  <a href="https://www.linkedin.com/company/daphnis-labs/mycompany/" class="align-c social-links-inner">
                    <img src="./resources/images/footer/linkedin.png" alt="facebook Daphnis Labs">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-2">
              <div class="widget">
                <h4>Company</h4>

                <ul class="menu-link list-unstyled">
                  <li><a href="./about_us.php">About Us </a> </li>
                  <li><a href="#">Careers</a></li>
                  <!-- <li><a href="#">Privacy Policy</a> </li> -->
                  <li><a href="#">Sitemap</a></li>
                  <!-- <li><a href="#">Contact Us</a> </li> -->


                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-2">
              <div class="widget">
                <h4>Services</h4>

                <ul class="menu-link list-unstyled">
                  <li><a href="sections/android/index.php">Hire Android App Developer</a></li>
                  <li><a href="sections/arApp/index.php">Hire AR App Developer</a></li>
                  <li><a href="sections/arGame/index.php">Hire AR Game App Developer</a></li>
                  <li><a href="sections/blockchain/index.php">Hire Blockchain Developer</a></li>
                  <li><a href="sections/ecom/index.php">Hire E-commerce App Developer</a></li>
                  <li><a href="sections/gameD/index.php">Hire Game Developer</a></li>
                  <li><a href="./sections/ionic/index.php">Hire Ionic App Developer</a></li>
                  <li><a href="./sections/ios/index.php">Hire IOS App Developer</a></li>
                  <li><a href="./sections/mobileD/index.php">Hire Mobile Game App Developer</a></li>
                  <li><a href="./sections/restApp/index.php">Hire Resturant App Developer</a></li>
                  <li><a href="./sections/vrApp/index.php">Hire VR App Developer</a></li>
                  <li><a href="./sections/vrGame/index.php">Hire VR Game App Developer</a></li>
                  <li><a href="./sections/websiteDev/index.php">Hire Website Developer</a></li>
                  <li><a href="./sections/meanStack/index.php">Hire MEAN Stack Developer</a></li>
                  <li><a href="./sections/Eth-dev/index.php">Hire Etherium Developer</a></li>
                  <li><a href="./sections/ml/index.php">Hire Machine Learning Developer</a></li>
                  <li><a href="./sections/hyper-led/index.php">Hire Hyperledger Developer</a></li>
                  <li><a href="./sections/deep-l/index.php">Hire Deep-Learninig Developer</a></li>
                  <li><a href="./sections/eos/index.php">Hire EOS Developer</a></li>
                  <li><a href="./sections/reactjs/index.php">Hire React Js Developer</a></li>
                  <li><a href="./sections/angular/index.php">Hire Angular Js Developer</a></li>
                  <li><a href="./sections/unity/index.php">Hire Unity Developer</a></li>
                  <li><a href="./sections/native/index.php">Hire React Native Developer</a></li>
                  
                </ul>
              </div>
            </div>


            <div class="col-md-6 col-lg-4 col-xl-2">
              <div class="widget">
                <h6 class='servicesubheading'>More Services</h6>

                <ul class="menu-link list-unstyled">
                
                  <li><a href="./sections/crypt/index.php">Hire Cryptocurrency Developer</a></li>
                  <li><a href="./sections/cv/index.php">Hire Computer Vision Developer</a></li>
                  <li><a href="./sections/exc/index.php">Hire Exchange Developer</a></li>
                  <li><a href="./sections/pred/index.php">Hire Predictive Analysis Developer</a></li>
                  <li><a href="sections/multiG/index.php">Hire Multiplayer Game Developer</a></li>
                  <li><a href="./sections/chat/index.php">Hire Chatbot Developer</a></li>
                  <li><a href="./sections/hybrid/index.php">Hire Hybrid App Developer</a></li>
                  <li><a href="./sections/ecom-w/index.php">Hire E-commerce Website Developer</a></li>
                  <li><a href="./sections/casual/index.php">Hire Casual Game Developer</a></li>
                  <li><a href="./sections/bd/index.php">Hire Big Data Developer</a></li>
                  <li><a href="./sections/smart-c/index.php">Hire Smart Contract Developer</a></li>
                  <li><a href="./sections/3d/index.php">Hire 3D Game Developer</a></li>
                  <li><a href="./sections/vue/index.php">Hire Vue Js Developer</a></li>
                  <li><a href="./sections/wear/index.php">Hire Smart Wearable Developer</a></li>
                  <li><a href="./sections/tensor/index.php">Hire Tensorflow Developer</a></li>
                  <li><a href="./sections/py/index.php">Hire Python Developer</a></li>
                  <li><a href="./sections/pwa/index.php">Hire PWA Developer</a></li>
                  <li><a href="./sections/node/index.php">Hire Node Js Developer</a></li>
                  <li><a href="./sections/laravel/index.php">Hire Laravel Developer</a></li>
                  <li><a href="./sections/edu/index.php">Hire Educational App Developer</a></li>
                  <li><a href="./sections/crm/index.php">Hire CRM Developer</a></li>
                  <li><a href="./sections/arch/index.php">Hire AR Architecture Developer</a></li>
                  <li><a href="./sections/social/index.php">Hire Social App Developer</a></li>
                </ul>
              </div>
            </div>



            <div class="col-md-6 col-lg-4 col-xl-2">
              <div class="widget">
                <h4>Portfolio</h4>

                <ul class="menu-link list-unstyled">
                  <li><a href="#">Web
                    </a> </li>
                  <li><a href="#">Mobile Your Email</a></li>
                  <li><a href="#">Gaming</a> </li>
                  <li><a href="#">Marketing</a></li>
                  <li><a href="#">UI/UX</a> </li>
                </ul>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="widget" id='contactus'>
                <h4>Contact Us</h4>
                <div class="input-group mb-4" >
                  <p><text class="head-txt">Email: </text><a href="mailto:Hello@DaphnisLabs.com">
                  Hello@DaphnisLabs.com
                  </a> <br>
                  <text class="head-txt">India:</text><a href="tel: +919560479579"> 
                  +91-95604-79579
                  <div style="color: #b5b5b5; font-size: 16px;">+919953052489 &nbsp;</div>
                   
                   <div style="color: #b5b5b5; font-size: 16px;">+918650406612</div>
                  </a></p>
                </div>
                <div class="ratedG">
                  <div class="ratedG-inner">
                 <div>
                 <span class="fa fa-star rating-fill"></span>
                    <span class="fa fa-star rating-fill"></span>
                    <span class="fa fa-star rating-fill"></span>
                    <span class="fa fa-star rating-fill"></span>
                    <span class="fa fa-star rating-half"></span>
                 </div> 
                    <img src="./resources/images/footer/review.png" alt="Reviewed">
                    <img class="google-img" src="./resources/images/footer/google.png" alt="Google">
                  </div>
                  <div class="iso-cert">
                    <img src="./resources/images/footer/iso.png" alt="ISO certification">
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <a href="#Top">
                    <img src="./resources/images/end.png" class="goToTop" alt="go to top button">
                  </a>
        </div>
        <div class="col-md-12">
          <p class="d-block text-center copyright-sec">© Copyright 2013-2021 Daphnis Labs | All Rights Reserved</p>
        </div>
      </div>

    </div>
  </div>





  <script src="resources/js/global/popper.min.js"></script>
  <script src="resources/js/global/bootstrap.min.js"></script>
  <script src="resources/js/global/owl.carousel.min.js"></script>
  <script src="resources/js/global/wow.min.js"></script>
  <script>
    new WOW().init();

    $(document).ready(function() {
      $(".clickMe").click(function(){
          $(".contactUsSide").fadeIn();
        });


      $('.owl-client').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
            nav: true
          },
          500: {
            items: 3,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
          },
          1200: {
            items: 5,
            nav: true
          }
        }
      });


      $('.owl-tech').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
            0: {
                items: 2,
                nav: true
            },
            500: {
                items: 4,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
            },
            1200: {
                items: 7,
                nav: true
            }
            }
        });
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          500: {
            items: 2,
            nav: true
          },
          1000: {
            items: 2,
            nav: true
          },
          1200: {
            items: 3,
            nav: true
          }
        }
      });

      $('.owl-blogs').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          800:{
            items: 2,
            nav: true
          },
          1000: {
            items: 2,
            nav: true
          },
          1200: {
            items: 3,
            nav: true
          }
        }
      });


      changeHww();
    });

      
    function hww(numb) {
      document.querySelector('.clr').src = document.querySelector('.clr').src.replace('-c.png','.png');
      document.querySelector('.hww-'+numb).src = './resources/images/hww/'+numb+'-c.png';
      document.querySelector('.clr').classList.remove('clr');
      document.querySelector('.hww-'+numb).classList.add('clr');
    }
    $(".navbar-nav .nav-link").on("click", function() {
      console.log('work');
       $(".navbar-nav").find(".active").removeClass("active");
       $(this).addClass("active");
    });
    var i=1;
    function changeHww() {
        if(i<6) {
            if(i === 5) {
            i=1;
            }
            else {
            i++;
            }
            switch(i) { 
            case 1:
                $('#myTab a[href="#Strategy"]').tab('show');
                break;
            case 2: 
                $('#myTab a[href="#UI/UX"]').tab('show');
                break;
            case 3:
                $('#myTab a[href="#Dev"]').tab('show');
                break;
            case 4:
                $('#myTab a[href="#data"]').tab('show');
                break;
            case 5: 
                $('#myTab a[href="#g-dev"]').tab('show');
                break;
            }
            hww(i);
            setTimeout(() => {
            changeHww();
            }, 10000);
        }
    }

    function stopAuto() {
        i=6;
    }

    function addClass() {
        document.querySelector('.dropdown-menu').classList.toggle('dropdown-m');
        document.querySelector('.drop').classList.toggle('heightM');
      }
      function addClass2() {
        console.log('clicked');
        document.querySelector('.portfolio-d').classList.toggle('dropdown-m');
        document.querySelector('.drop-p').classList.toggle('heightM');
      }

      var Messenger = function(el, msgTexts,colors, initial){
        'use strict';
        var m = this;
        
        m.init = function(){
          m.codeletters = initial;
          m.message = 0;
          m.current_length = 0;
          m.fadeBuffer = false;
          m.messages = msgTexts;
          m.colors = colors;
          $(el).css("color",m.colors[m.message]);
          setTimeout(m.animateIn, 100);
        };
        
        // m.generateRandomString = function(length){
        //   var random_text = '';
        //   while(random_text.length < length){
        //     random_text += m.codeletters.charAt(Math.floor(Math.random()*m.codeletters.length));
        //   } 
          
        //   return random_text;
        // };
        
        m.animateIn = function(){
          
          if(m.current_length < m.messages[m.message].length){
            m.current_length = m.current_length + 1;
            // if(m.current_length > m.messages[m.message].length) {
            //   m.current_length = m.messages[m.message].length;
            // }
            
            var message = m.messages[m.message].slice(0, m.current_length);
            $(el).html(message);
            
            // $(el).style.color=newColor;
            setTimeout(m.animateIn, 1000/m.messages[m.message].length);
          } else { 
            setTimeout(m.cycleText, 2000);
          }
        };
        
        m.animateFadeBuffer = function(){
          console.log("animatedFadeBufdfer")
          if(m.fadeBuffer === false){
            m.fadeBuffer = [];
            for(var i = 0; i < m.messages[m.message].length; i++){
              m.fadeBuffer.push({c: (Math.floor(Math.random()*12))+1, l: m.messages[m.message].charAt(i)});
              // newColor = colors[(Math.floor(Math.random()*3))+1)];
            }
          }
          
          var do_cycles = false;
          var message = ''; 
          
          for(var i = 0; i < m.fadeBuffer.length; i++){
            var fader = m.fadeBuffer[i];
            if(fader.c > 0){
              do_cycles = true;
              fader.c--;
              message += m.codeletters.charAt(Math.floor(Math.random()*m.codeletters.length));
            } else {
              message += fader.l;
            }
          }
          
          $(el).html(message);
          
          if(do_cycles === true){
            setTimeout(m.animateFadeBuffer, 200);
          } else {
            setTimeout(m.cycleText, 4000);
          }
        };
        
        m.cycleText = function(){
          console.log("cycle text");
          
          if(m.current_length > 0){
            m.current_length = m.current_length - 1;
            // if(m.current_length > m.messages[m.message].length) {
            //   m.current_length = m.messages[m.message].length;
            // }
            var message = m.messages[m.message].slice(0, m.current_length);
            $(el).html(message);
            
            setTimeout(m.cycleText, 1000/m.messages[m.message].length);
          } else { 
            m.message = m.message + 1;
          
          if(m.message >= m.messages.length){
            m.message = 0;
          }
          $(el).css("color",m.colors[m.message]);
          m.current_length = 0;
          m.fadeBuffer = false;
          setTimeout(m.animateIn, 200);
          }
          
          
        };
        
        m.init();
      }

      console.clear();
      var messenger1 = new Messenger($('#software'), ["Software", "Businesses", "Livelihood"],["#30B4BB","#96D700","#F28100"], "");
      var messenger2 = new Messenger($('#perception'), ["Perception", "Ideas", "Dreams"],["#30B4BB","#96D700","#F28100"], "");
      

  </script>


  <script src="./resources/js/global/newScript.js"></script>










</body>
</html>