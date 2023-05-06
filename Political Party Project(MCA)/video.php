<!DOCTYPE html>
<html lang="zxx">
<?php
 define ("base_url","https://localhost/prasadPatil/html/ltr/");
$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection, 'mns_db');
$results_per_page = 9;
$sql='SELECT * FROM tablevideo';
$result = mysqli_query($connection, $sql);
$number_of_results = mysqli_num_rows($result);
//echo '<br>';
$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$offset=($results_per_page*$page)-$results_per_page;
//echo '<br>';
//echo $page;
//echo '<br>';
$sql='SELECT * FROM `image` limit '.$results_per_page.' OFFSET '.$offset; 
$result = mysqli_query($connection, $sql);
//print_r($result);


    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/icofont.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/modal-video.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <title>महाराष्ट्र नवनिर्माण सेना</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>

      
      .ct-socials {
  position: fixed;
  top: 30%;
  right: 0;
  list-style: none;
  padding-left: 0;
  z-index: 10;
  margin: 0;
  -webkit-transition: left 0.25s ease-in-out;
  transition: left 0.25s ease-in-out;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}
.ct-socials li {
  padding: 0px 0;
}
.ct-socials li a {
 
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  width: 44px;
  height: 54px;
  -webkit-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
  float: right;
  padding-right: 5px;
}
.ct-socials li a:hover {
width: 54px;
padding-right: 0;
text-decoration: none;

}

  tr { background-color: #ffffff}
  .normal { background-color: #ffffff }
.highlight {background: linear-gradient(180deg, #FFC371, #FF5F6D) }

      
.gallery-title
{
    font-size: 36px;
    color: orange;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid orange;
    border-radius: 5px;
    text-align: center;
    color: orange;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid orange;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: orange;

}
.btn-default:active .filter-button:active
{
    background-color: orange;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

.btn {
      background-color: #f37125;
      border: none;
      color:brown ;
      padding: 12px 16px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
    }
    
    /* Darker background on mouse-over */
    .btn:hover {
      background-color:  #f37125;
    }
    .centre {
            text-align: center;
            padding-top: 30px;
    }

</style>

</head>

<body>
    <ul class="ct-socials">
        <li style="background-color:rgb(8, 130, 187);font-size:25px;">
           <a href="tel:9371725115" target="_self"><i class="fa fa-phone"></i></a>
       </li>
        <li style="background-color:#1fa831;font-size:25px;">
           <a href="https://wa.me/9371725115" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </li>
        <li style="background-color:rgb(255, 0, 242);font-size:25px;">
           <a href="https://www.instagram.com/mns_adhikrut/" target="_blank"><i class="fa fa-instagram"></i></a>
        </li>
        <li style="background-color:rgb(0, 17, 255);font-size:25px;">
            <a href="https://www.facebook.com/mnsadhikrutpage/" target="_blank"><i class="fa fa-facebook"></i></a>
         </li>
         <li style="background-color:rgba(255, 0, 0, 0.747);font-size:25px;">
            <a href="https://www.youtube.com/channel/UCJfXQH7HX977F0qUZMIxLeA" target="_blank"><i class="fa fa-youtube"></i></a>
         </li>
     </ul>
    

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sub-loader"></div>
            </div>
        </div>
    </div>


    <div class="header-area two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="left">
                        <span>पहा :</span>
                        <a href="https://youtu.be/JpXCXXmsxYs" target="blank" >
                            राज ठाकरे सौंदर्य विषयक दृष्टी-प्रगतीची गुरुकिल्ली
                            <i class="icofont-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right">
                        <ul class="social-icon">
                            <li>
                                <a href="https://www.facebook.com/mnsadhikrutpage/" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/mnsadhikrut" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mns_adhikrut/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/9371725115" target="_blank">
                                    <i class="icofont-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="nav-flag-dropdown">
                            <select>
                                <option>मराठी</option>    
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


   
    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="./index.html" class="logo">
                <script type="text/javascript" style="display:none">
                    
                    window.__mirage2 = { petok: "f56efcf9aa1714616d980bff20e93dd2c53cc563-1650631953-1800" };

                </script>
                <script type="text/javascript"
                    src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                <img data-cfsrc="assets/images/logo.png" alt="Logo"
                    style="display:none;visibility:hidden;top:-30px; "><noscript><img src="assets/images/logo.png"
                        alt="Logo"></noscript>
            </a>
        </div>

        <div class="main-nav two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img data-cfsrc="assets/images/logo.png" alt="Logo"
                            style="display:none;visibility:hidden;"><noscript><img src="assets/images/logo.png"
                                alt="Logo"></noscript>
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">मुखपृष्ठ</a>
                            </li>
                            <li class="nav-item">
                                <a href="./about.html" class="nav-link">आमच्या बद्दल</a>
                                <!-- <ul class="dropdown-menu">  
                                    <li class="nav-item">
                                        <a href="donation.html" class="nav-link">मनसे संस्थापक व सदस्य</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="volunteer.html" class="nav-link">मनसे इतिहास व वाटचाल</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">गॅलरी<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">  
                                    <li class="nav-item">
                                        <a href="photo.html" class="nav-link">फोटो</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="video.html" class="nav-link">विडियो</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="print-media.html" class="nav-link">प्रिंट मीडिया</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="social-media.html" class="nav-link">सोशल मीडिया</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-media.html" class="nav-link">न्यूज मीडिया</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">इतर<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">वापरकर्ता<i
                                                class="icofont-simple-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="sign-in.html" class="nav-link">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li>
                                     <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Missions <i
                                                class="icofont-simple-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="missions.html" class="nav-link">Missions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="mission-details.html" class="nav-link">Mission Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">कार्य<i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">  
                                    <li class="nav-item">
                                        <a href="morcha.html" class="nav-link">मोर्चे</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="social service.html" class="nav-link">सामाजिक कार्य</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="events.html" class="nav-link">कार्यक्रम</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">संपर्क</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">वापरकर्ता</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="sign-in.html" class="nav-link">साईन इन</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sign-up.html" class="nav-link">नवीन खाते करा</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="left" href="volunteer.html">सामील व्हा!</a>
                            <a class="right common-btn two" href="donation.html">देणगी</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
   
    <div class="page-title-area title-img-one">
        <div class="title-shape">
            <img data-cfsrc="assets/images/page-title/title-shape.jpg" alt="Title"><noscript><img src="assets/images/page-title/title-shape.jpg" alt="Title"></noscript>
            <!-- <img data-cfsrc="assets/images/banner/banner-shape2.png" alt="Title" style="display:none;visibility:hidden;"><noscript><img src="assets/images/banner/banner-shape2.png" alt="Title"></noscript> -->
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>विडियो</h2>
                        <ul>
                            <li>
                                <a href="index-2.html">मुख्यपृष्ठ</a>
                            </li>
                            <li>
                                <span>विडियो</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="centre">
    <button class="btn"><i class=""></i>  <a href="photo.html">फोटो</a></button>
    <button class="btn"><i class=""></i> <a href="print-media.html">प्रिंट मीडिया</a></button>
    <button class="btn"><i class=""></i> <a href="social-media.html">सोशल मीडिया</a></button>
    <button class="btn"><i class=""></i> <a href="news-media.html">न्यूज मीडिया</a></button>
    </div>
    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title"></h1>
        </div>

        <!--<div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
        </div>-->
        <br/>


             <?php
                                           //include './photolistbackend.php.';
                                           while($row = mysqli_fetch_array($result))
                                           {
                                             echo'<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6" >';
                    
                    echo '<video width="320" height="240" autoplay="autoplay" controls muted>';
					//echo '<source src="'.base_url.'/upload/videos/'.$row['id'].'/'.$row['videos'].'" alt="video" type="video/mp4">';
			     echo '<source src='.base_url."/upload/videos/".$row['videos'].' alt="video" type="video/mp4">';

					echo '<source src='.base_url."/upload/videos/".$row['videos'].' alt="video" type="video/ogg">';
                   // echo'<source src='.base_url()."/images/upload/project/".$row['videoName'].' style="height:200px; width:200px;" type="video/mp4">';
					echo '</video>';
          
						echo'</div>';
                                           }
                                           ?>
                                  
                               
                            </div>
							 
                        </div>

               

              
               <?php
			   for ($page=1;$page<=$number_of_pages;$page++) {
               echo '<a href="video.php?page=' . $page . '">' . $page . '</a> ';
}
			   ?>
           <!-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/HYL8IXNP_Us" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/SuO7gquxyOE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/QUBeH-yoZTY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/5emMl-pF1qE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/HOd8v6NpLS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tiJyAC4iNBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/photo/img7.jpg"  width="100%" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/photo/img8.jpg" width="100%" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/photo/img9.jpg" width="100%" class="img-responsive">
            </div>-->

           <!-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/photo/img1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>-->
        </div>
    </div>
</section>


<footer class="footer-area two" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>संपर्क माहिती</h3>
                        <!--<p>Grursus mal suada faci Lorem to the ipsum dolarorit</p>-->
                        <ul>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <a href="#">१७७४, ए वॉर्ड, शहिद अभिजीत सूर्यवंशी पथ, साकोली कोर्नर, ताराबई रोड, शिवाजी पेठ, कोल्हापूर.</a>
                            </li>
                            <li>
                                <i class="icofont-ui-call"></i>
                                <a href="tel:+९३७१७२५११५ ">९३७१७२५११५ </a>
                            </li>
                            <li>
                                <i class="icofont-paper-plane"></i>
                                <a href="mailto:manaseprasadpatil@gmail.com">manaseprasadpatil@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-link">
                        <h3>महत्वाची लिंक</h3>
                        <ul>
                            <li>
                                <a href="about.html">
                                    <i class="icofont-simple-right"></i>आमच्या बद्दल
                                </a>
                            </li>
                            <li>
                                <a href="events.html">
                                    <i class="icofont-simple-right"></i>
                                    कार्यक्रम
                                </a>
                            </li>
                            <li>
                                <a href="./photo.html">
                                    <i class="icofont-simple-right"></i>
                                    फोटो
                                </a>
                                
                            </li>
                            <li>
                                <a href="./news-media.html">
                                    <i class="icofont-simple-right"></i>
                                    न्यूज मीडिया
                                </a>
                                
                            </li>
                            <li>
                                <a href="./social-media.html">
                                    <i class="icofont-simple-right"></i>
                                    सोशल मीडिया
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img data-cfsrc="assets/images/logo.png" alt="Logo"
                                style="display:none;visibility:hidden;"><noscript><img src="assets/images/logo.png"
                                    alt="Logo"></noscript>
                        </a>
                        <p>जगाला हेवा वाटेल, असा महाराष्ट्र घडवूया..!</p>
                        <ul class="social-icon">
                            <li>
                                <a href="https://www.facebook.com/mnsadhikrutpage/" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/mnsadhikrut" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mns_adhikrut/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/9371725115" target="_blank">
                                    <i class="icofont-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area two">
        <div class="container">
            <p>Copyright @
                <script data-cfasync="false"
                    src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>document.write(new Date().getFullYear())</script> Maharashtra Navnirman Sena Kolhapur. Designed By <a
                    href="https://www.wolfox.in/" target="_blank">Wolfox Pvt.Ltd. </a>
            </p>
        </div>
    </div>
</footer>


    <div class="go-top two">
        <i class="icofont-polygonal"></i>
        <i class="icofont-polygonal"></i>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/jquery.meanmenu.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery-modal-video.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/custom.js"></script>
    <script>
    $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
    </script>
     <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '96fe41cc-550c-43de-8d7e-a1429d369347', f: true }); done = true; } }; })();</script>
</body>

</html>