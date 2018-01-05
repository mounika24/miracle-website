
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
       <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
       
        <title>Digital Summit</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="./includes/js/generalScript.js"></script>
                 <link rel="stylesheet" href="./includes/css/style.css">
        <script src="./includes/js/countdown.js"></script>
        
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .glyphicon-chevron-left:before {
    content: "\e079";
}
    .carousel-indicators .active{ background: #31708f; } .content{ margin-top:20px; } 
    .adjust1{ float:left; width:100%; margin-bottom:0; } .adjust2{ margin:0; } 
    .carousel-control{ color:#31708f; width:5%; } .carousel-control:hover, .carousel-control:focus{ color:#31708f; }
    .carousel-control.left, .carousel-control.right { background-image: none; }
    .media-object{ margin:auto; } @media screen and (max-width: 768px) { .media-object{ margin-top:-20px; } }
    .carousel-indicators .active {
    background-color: #2980b9 !important;
}

    </style>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<!---rotator---->
<link rel="stylesheet" type="text/css" href="css/default-quoterotator.css" />
		<link rel="stylesheet" type="text/css" href="css/component-quoterotator.css" />
		<script src="js/modernizr.custom-quoterotator.js"></script>
		
		
        <script>


            $(document).ready(function () {
                // alert( "ready!" );
                $(".pre-footer img").hover(function () {
                    $(".pre-footer img").removeClass('animated slideInLeft');
                });
                $("#quote").fadeIn(3000);
                // hide our element on page load
                $('#element-to-animate').css('opacity', 0);

                $('#element-to-animate').waypoint(function () {
                    $('#element-to-animate').addClass('fadeInLeft');
                    $('.col-a p').addClass('animated fadeInLeft');
                    $('.col-b p').addClass('animated fadeInRight');
                }, {offset: '100%'});
                $('#services').waypoint(function () {
                    //alert("df");
                    $('#services').addClass('animated fadeInUp');
                }, {offset: '100%'});

                $('#verticals').waypoint(function () {
                    //alert("df");
                    $('#verticals').addClass('animated fadeInUp');
                }, {offset: '100%'});


                $('.pre-footer').waypoint(function () {
                    //alert("df");
                    $('.pre-footer img').addClass('animated slideInLeft');
                }, {offset: '100%'});




                $('#quote').waypoint(function () {
                    //alert("df");
                    $('#quote').addClass('animated fadeInLeft');



                }, {offset: '100%'});

                $('#client').waypoint(function () {
                    //alert("df");
                    $('#client').addClass('animated fadeInUp');



                }, {offset: '100%'});


                $('#clients_head').waypoint(function () {
                    //alert("df");
                    $('#clients_head').addClass('animated fadeInUp');



                }, {offset: '100%'});

                $('.phone').waypoint(function () {
                    //alert("df");
                    $('.phone').addClass('animated fadeInLeft');



                }, {offset: '100%'});

                $('.content').waypoint(function () {
                    //alert("df");
                    $('.content').addClass('animated fadeInRight');



                }, {offset: '100%'});

                $('.banner_img').waypoint(function () {
                    //alert("df");
                    $('.banner_img').addClass('animated zoomInUp');



                }, {offset: '100%'});
               
                $('.job_section img').waypoint(function () {
                    $('.job_section img').addClass('animated bounceIn');
                    $('.job_section p').addClass('animated fadeIn');
                    //                    $('.col-b p').addClass('animated fadeInRight');
                }, {offset: '60%'});
            });





        </script>
        <style>
            .quote_section {
                background: rgba(0, 0, 0, 0) radial-gradient(ellipse at center center , #fefefe 50%, #e0e0df 100%) repeat scroll 0 0;
                padding: 45px 0;
            }


            .job_section {

                text-align: center;
            }


            .job_section img{
                margin: 0 auto;
                width:50%;
            }

            .skills i{
                position: relative;
                bottom:4px;
            }


            .current_tab >  a{
                color:#53bce8 !important;
            }
            .carousel-indicators > li{
    
    background-color:#fff !important;
}
.carousel-indicators{
    bottom:4px !important;
}
    .h2-text{
        margin-top:-12px !important;
    }
    .dark{
        background-color:rgba(0,0,0,0.5 );
    }
        </style>
    </head>
    <!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : header.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Stylesheets -->
        <!--<link rel="stylesheet" href="assets/css/reset.css" />-->
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/styles.css" />

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/main.css">
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/animate.min.css">

        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/customstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script type="text/javascript" src="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/js/generalScript.js"></script>
      <script type="text/javascript" src="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/js/countdown.js"></script> 
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/style.css">
        <link rel="stylesheet" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/css/mainStyle.css">
<script   type="text/javascript" src="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/js/selectivity-full.min.js"></script>
 <script type="text/javascript" src="https://mss-templete-sivanmyc.c9.io/digitalsummit/includes/js/jquery.matchHeight.js"></script> 
        <style>
            .navbar-inverse{
                border-color: #fff !important;
            }
            
            .btn-cons :hover{
                border:1px solid #5FBAE9;
            }
            
            .navbar-nav .dropdown-menu > li > a{
                color:#333;
            }
            
            .nav ul li > a:hover{
                
            }
            .navbar-nav .btn {
                margin-top:-12px !important;
            }
             .navbar-nav .btn:hover{
                 color:#fff !important;
             }
             .navbar-inverse .navbar-nav > li > a{
                 font-size:14px important;
             }
        </style>
 

        <title></title>
    </head>
    <body>
        <div class="navbar navbar-inverse" >
            <div>
                <div class="navbar-header col-sm-3">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/index.php"><img src="https://mss-templete-sivanmyc.c9.io/digitalsummit/images/ds16logo.png"  height="80" alt="LOGO"></a>
                </div>
                <div class="navbar-collapse collapse col-sm-8 pull-right">
                    <ul class="nav navbar-nav pull-right">
                        <li class="current_tab" id="homeLink"><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/index.php"><strong>Home</strong></a></li>
                        

                        <li class="dropdown current_tab1" >
                            <a class="dropdown-toggle current_tab10" id="schedule_tab"><strong>Schedule</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="current_tab1"><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/schedule/agenda.php"><strong>Digital Summit</strong></a></li>
                                
                                 <li class="current_tab8"><a  href="https://mss-templete-sivanmyc.c9.io/digitalsummit/jobfair/job_fair.php"><strong>Digital Job Fair</strong></a></li>  
                                  <li class="current_tab11"><a  href="https://mss-templete-sivanmyc.c9.io/digitalsummit/schedule/culturals.php"><strong>Culturals</strong></a></li> 
                                  <li class=""><a  href="https://mss-templete-sivanmyc.c9.io/digitalsummit/meanhack.php"><strong>MEANHack</strong></a></li> 
                            </ul>
                        </li>
                         
                       <li> <a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/schedule/foreign_delegates.php" ><strong>US Customers</strong></a></li>
                        <li ><a  href="https://mss-templete-sivanmyc.c9.io/digitalsummit/schedule/Sponsors.php"><strong>Sponsors</strong></a></li>
                        <li ><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/contact.php"><strong>Contact us</strong></a></li>
                          <li><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/registration.php" ><button class="btn btn-info btn-cons register_btn" type="button" >Register</button></a></li>
                                           </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
    </body>
</html>
    <body class="home">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                 <!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>-->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                   <!-- <img src="./images/banner/banner1.png" alt="First slide"> -->
                    <img src="./images/banner/b1.png" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12">


                            <center >
                                <h1  data-animation="animated fadeInRight">
                                   <strong> Digital Summit</strong> 2016 in Visakhapatnam<br>
                                
                                </h1>

                                <h2  data-animation="animated fadeInDown">
                                    AP’s largest event focussed on Digital Technologies
                                </h2><br>
                                <a class="btn btn-info btn-cons" href="#" target="_blank">Register Today!</a>
                            </center>
                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
<!--                    <img src="./images/banner/BestPracticesAnalytics-1.png" alt="Second slide">-->
                    <img src="./images/banner/b2.png" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 center">

                        <center>
                            <h1 data-animation="animated fadeInRight">Hungama@Digital Summit 2016</h1>
                            <h2  data-animation="animated fadeInDown">Showcase your teams cultural talent to the programmers of AP
                            </h2>
                            <br>
                             <a class="btn btn-info btn-cons" href="#" target="_blank"> Audition Today! </a>
                            </center>
                            <!--                            <h3>
                                                            <span>13- 14 Feb 2017 at visakhapatnam, India</span>
                                                        </h3>-->

                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div><!-- /header-text -->
                </div>
                
                <div class="item">
<!--                    <img src="./images/banner/BestPracticesAnalytics-1.png" alt="Second slide">-->
                    <img src="./images/banner/b3.png" alt="Third slide">
                 <div class="dark">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 center">

                        <center>
                            <h2  data-animation="animated fadeInRight">MEANHack 2016 </h2>
                            <h2  data-animation="animated fadeInDown">Compete with 30 of the top teams in Andhra Pradesh <br>and take home a massive cash prize
                            </h2>
                            <br>
                             <a class="btn btn-info btn-cons" href="#" target="_blank">Enroll Today! </a>
                            </center>
                            <!--                            <h3>
                                                            <span>13- 14 Feb 2017 at visakhapatnam, India</span>
                                                        </h3>-->

                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div>
                    </div><!-- /header-text -->
                </div>
                
                
            


            </div>
            <!-- Controls -->


        </div>


        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->
<br>
<section class="container">
<div class="row">
            <div class="col-sm-12" >
                <center>
                <div class="col-sm-3">
                    <img src="images/mean-hack2.png" alt="MEANHack" class="img-responsive" width="150" height="150">
                </div>
                <div class="col-sm-3">
                     <img src="images/job-fair2.png" alt="" class="img-responsive" width="150" height="150">
                </div>
                <div class="col-sm-3">
                     <img src="images/Tech-talk2.png" alt="" class="img-responsive" width="150" height="150">
                </div>
                <div class="col-sm-3">
                     <img src="images/Culturals2.png" alt="" class="img-responsive" width="150" height="150">
                </div>
                </center>
            </div>
        </div>
        </section>
        <br>
        <div clas="row">
            <!-- TIMER -->
            <div class="timer-area">
               <br>
                <ul id="countdown">
                    <li> <span class="days">00</span>
                        <p class="timeRefDays">days</p>
                    </li>
                    <li> <span class="hours">00</span>
                        <p class="timeRefHours">hours</p>
                    </li>
                    <li> <span class="minutes">00</span>
                        <p class="timeRefMinutes">minutes</p>
                    </li>
                    <li> <span class="seconds">00</span>
                        <p class="timeRefSeconds">seconds</p>
                    </li>
                </ul>
                <h2 class="h2-text">to Digital Summit 2016 </h2> 
            </div>
            <!-- end timer-area --> 

        </div>

        <!-- /Intro-->
        
    <!----rotator--->    
    <div class="container">
				
			<div class="main">
				<div id="cbp-qtrotator" class="cbp-qtrotator">
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/cm2.png" alt="CM" />
						<blockquote>
						   <p> <i class="fa fa-quote-left"></i> &nbsp;Digital Transformation has emerged as the most transformative means to ignite sustainable growth and improve society. My vision is to digitally empower every citizen of the state, enhance their quality of life, accelerate economic competitiveness, boost local innovation and to make the state, a (which hub) hub of the country for knowledge and technology. We envision Andhra Pradesh as an icon of digital transformation for the other states to follow.</p>
						  <footer>Shri N.Chandrababu Naidu
                              <small>Chief Minister of Andhra Pradesh</small></footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/it.jpg" alt="IT" />
						<blockquote>
						  <p> <i class="fa fa-quote-left"></i> &nbsp;Digital transformation is a journey for the entire company.It is no longer just about marketing transformation, its about business transformation. We are entering a new phase where all internal stakeholders are involved.</p>
						  <br><br><br>
						  <footer>Shri Palle Raghunatha Reddy
                              <small>IT & Communications Minister of Andhra Pradesh.</small> </footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/edu.jpg" alt="img03" />
						<blockquote>
						  <p> <i class="fa fa-quote-left"></i> &nbsp;A good initiative for the growth of IT people.</p>
						  <br><br><br>
						  <footer>Shri Ganta Srinivasarao
                              <small> Human Resources Development (Primary Education, Secondary Education, Higher & Technical Education) ,Andhra Pradesh.</small> 
                           </footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/prasad.jpg" alt="img04" />
						<blockquote>
						 <p> <i class="fa fa-quote-left"></i> &nbsp;Digital transformation will not only force you to do different things, but also to do things differently. A couple of new business mantras need to be introduced and should become a part of everyone’s thinking. From today anything you do, anything you develop, anything you roll-out towards the market, should always be driven from a new set of basic rules that determine your view on the world from now on.</p>
						  <footer>Prasad Lokam
                              <small>CEO of <a href="http://www.miraclesoft.com/">Miracle Software Systems, Inc.</a></small> 
                           </footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
     
     <style>.carousel-control.left span, .carousel-control.right span {
    /* background-color: #000; !important*/
}
.carousel-control {
    color: #31708f !important;
    margin-left:-27px;
}
    
.carousel-indicators .active {
    background-color: #2980b9 !important;
}
.carousel-indicators li {
   border:0px !important;
}

</style>         
        </div>      

        <!-- Highlights - jumbotron -->
        <div class="container">
            <div class=" text-center col-sm-6 banner_img">
                <img src="./images/bannerdv1.gif">

            </div>
            <div class="col-sm-6" style="background-color: #00a79b;color:#fff;" id="quote">
        <h2 class="text-center thin" id="services" style="color:#fff;">World's Largest Conference on Digital Transformation Skills</h2>
                <p class="content_slide" >

                    <!--  Digital Summit 2016 is a two-day conference that begin on Dec 12th at the Novotel Hotel in Visakhapatnam, Digital Valley, AP, India, bringing together Digital Business Leaders, IT Innovators, Academia, Digital Systems Integrators and Public Sector Leaders to discuss and share the Digital Technology Success Stories and also provide Insights and Update on where this Journey is leading to and what the challenges are and how they can be put into actionable plans. Space is limited, so register to attend today!Digital Valley Summit 2016 is the destination for World Class Digital Transformation Skills. -->
                    Digital Summit 2016 is a two-day conference that begins on December 12th at the Novotel Hotel Visakhapatnam, Digital Valley, AP, India. Bringing together digital business leaders, IT innovators, academia, digital systems integrators, and public sector leaders to discuss and share digital technology success stories, insights, and the direction this journey is heading, what challenges are being faced, and the corresponding action plans. 
                    <br>Space is limited so register to attend today! 
                    <br>Digital Summit 2016 is the destination for world class digital transformation skills.





                </p>

            </div>

        </div>
        <div class="gap" style="line-height: 50px; height: 30px;"></div>
        <div class="clearfix">

        </div>
        <div class="timer-area">
            <div class="container">
                <div class="row" style="margin: 24px 0;">
                    
                    <div class="col-sm-6" style="background-color: #00a79b;color:#fff;" >
                        <div class="content">
                            <div class="pull-middle">
                                <h3 class="h1 page-header">Highlights</h3>
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <i class="fa fa-3x fa-globe" style="color:#F19113" aria-hidden="true"></i>

                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading">World Class Summit</h3>
                                            <p>Focusing on Cloud, DevOps, analytics, mobile, Social Security, and IoT</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <i class="fa fa-3x fa-sitemap" style="color:#0d416b" aria-hidden="true"></i>
                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading">Digital Technology Success Stories</h3>
                                            <p>From Uber to Disney, GE, and Google</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <i class="fa fa-3x fa-users" style="color:#F74F4F" aria-hidden="true"></i>
                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading">Systems Integrators and Public Sector Leaders</h3>
                                            <p>These innovative leaders are what drive these niche skills to make transformation possible</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6  text-center mt-100 mb-100">
                        <div class="phone">
                            <img class="img-responsive img-rounded" src="./images/img_provide_it.png">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="clearfix"></div>




        <div class="clearfix"></div>
        <!--mainwrapper start-->
        
            <div class="container job_section">

                <div class="col-lg-12">
                    <img class="img-responsive" src="./images/banner/jobfairslide1_2.png" alt="">
                    <div class="intro-text">
                        <h3> <strong>Join us to start great career</strong></h3>
                        <hr class="star-light">
                        <p class="skills"><i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;The Digital Summit job Fair is a great way for participants to understand the requirement of several types of jobs in  multinational companies and how to apply for these jobs. For professionals it is also a good way to know how to prepare themselves for these job opportunities."</p>
                        <p class="skills">
                        <a class="btn btn-info btn-cons" href="https://mss-templete-sivanmyc.c9.io/digitalsummit/jobfair/job_fair.php" target="_blank">Click here to Apply </a>
                    </p>
                    </div>
                </div>

            </div>
        

        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        <script src="includes/js/headroom.min.js"></script>
        <script src="includes/js/jQuery.headroom.min.js"></script>
        <script src="includes/js/template.js"></script>
        <script type="text/javascript" src="includes/js/wow.js"></script>


        <script>new WOW().init();</script>
       <script>
            $(document).ready(function () {

                $("#countdown").countdown({
                    date: "12 december 2016 12:00:00",
                    format: "on"
                },
                function () {
                    // callback function
                });
                // fade in and fade out
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#uparrow').fadeIn();
                        } else {
                            $('#uparrow').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#uparrow').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

            });
            /*  Scripts for Bootstrap Carousel animation
             
             */
            (function ($) {

                //Function to animate slider captions 
                function doAnimations(elems) {
                    //Cache the animationend event in a variable
                    var animEndEv = 'webkitAnimationEnd animationend';

                    elems.each(function () {
                        var $this = $(this),
                        $animationType = $this.data('animation');
                        $this.addClass($animationType).one(animEndEv, function () {
                            $this.removeClass($animationType);
                        });
                    });
                }

                //Variables on page load 
                var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

                //Initialize carousel 
                $myCarousel.carousel();

                //Animate captions in first slide on page load 
                doAnimations($firstAnimatingElems);

                //Pause carousel  
                $myCarousel.carousel('pause');


                //Other slides to be animated on carousel slide event 
                $myCarousel.on('slide.bs.carousel', function (e) {
                    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                    doAnimations($animatingElems);
                });

            })(jQuery);
    
        </script>
        
        <script type="text/javascript" src="">
            $(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 5000,
  });
});
        </script>
        
       
		<script src="js/jquery.cbpQTRotator.min.js"></script>
		<script src="js/jquery.cbpQTRotator.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
        <!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : footer.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->
        <style>
            .widget-body > span{

            }


            .address_block{
                width: 220px; margin: 0px 24px 0px 31px;
            }

            .widget-body h4{
                color: #3386C2;
                font-weight: bold;
                text-align: left;
            }
        </style>

        <style>
            .site-section-light {
                color: #ffffff;
            }
            .site-footer {
                background-color: #454e59;
                color: #cccccc;
                padding-bottom: 40px;
                padding-top: 11px;
            }
            .footer-heading {
                color: #eeeeee;
                font-size: 18px;
                font-weight: 600;
                margin: 29px 0 20px;
            }
            .footer-nav a {
                color: #ffffff;
                opacity: 0.5;
                
            }
            .footer-nav a:hover, .footer-nav a:focus {
                color: #ffffff;
                opacity: 1;
                text-decoration: none;
            }
            .footer-nav-links a {
                background-color: rgba(0, 0, 0, 0.5);
                border-radius: 3px;
                display: block;
                height: 32px;
                line-height: 32px;
                min-width: 20px;
                padding: 0 4px;
                text-align: center;
                margin-right:0px;
                margin-left:0px;
            }
            .footer-nav-links a:hover, .footer-nav-links a:focus {
                background-color: #0d416b;
                box-shadow: 0 2px 3px rgba(0, 0, 0, 0.15);
                color: #ffffff;
            }
            .footer-nav-links a.social-twitter:hover, .footer-nav-links a.social-twitter:focus {
                background-color: #55acee;
            }
            .footer-nav-links a.social-facebook:hover, .footer-nav-links a.social-facebook:focus {
                background-color: #3b5998;
            }
            .footer-nav-links a.social-google-plus:hover, .footer-nav-links a.social-google-plus:focus {
                background-color: #dd4b39;
            }
            .footer-nav-links a.social-dribbble:hover, .footer-nav-links a.social-dribbble:focus {
                background-color: #ea4c89;
            }
            .footer-nav-links a.social-youtube:hover, .footer-nav-links a.social-youtube:focus {
                background-color: #b31217;
            }
            .counter {
                color: #ffffff;
                text-align: center;
            }
            .counter span {
                display: block;
                font-size: 48px;
                font-weight: 300;
                text-align: center;
            }
            .logo-footer{
                padding:25px 0px;
            }
        </style>
    </head>
    <body>
        <footer id="footer" class="">

            <footer class="site-footer site-section site-section-light">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">

                        <div class="col-sm-3">
                            <h4 class="footer-heading">Get Acccess to</h4>
                            <ul class="footer-nav ul-breath list-unstyled">
                                <li><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/schedule/agenda.php">Digital Summit</a></li>
                                <li><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/jobfair/job_fair.php">Digital Job Fair</a></li>
                                <li><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit/jobfair/job_fair.php">AP Cloud</a></li>
                                <li><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit#">MEANHack</a></li>
                                <li><a href="https://mss-templete-sivanmyc.c9.io/digitalsummit#">Register for DS16</a></li>
                                <li><a href="http://www.miraclesoft.com/library">Miracle’s Digital Library</a></li>
                                <li><a href="http://www.miraclesoft.com/library">Miracle’s Webinars page</a></li>
                            
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            

 <h4 class="footer-heading">Contact&nbsp;Us</h4>
                            <address>
                        <strong>Miracle Software Systems, Inc.</strong><br>
                        Global Headquarters<br>
                        45625 Grand River Avenue<br>
                        Novi, MI - USA(48374)<br>
                        Ph: (248)-233-1100<br>
                        E : info@miraclesoft.com
                    </address>
                           
                        </div>
                        
                        <div class="col-sm-3">
                            <h4 class="footer-heading">TechTalks</h4>
                            <ul class="footer-nav ul-breath list-unstyled">
                                <li><a href="http://www.miraclesoft.com/digitalsummit/TechTalks/InnovationSummit.php">Innovation Summit</a></li>
                                <li><a href="http://www.miraclesoft.com/digitalsummit/TechTalks/microsoft-techtalks.php"> Microsoft TEchTalks</a></li>
                                <li><a href="http://www.miraclesoft.com/digitalsummit/TechTalks/IBM-innovation-summit.php">IBM Innovation Summit</a></li>
                              
                            </ul>
                        </div>
                        
                        
                        <div class="col-sm-3">
                           
                            <img class="img-responsive logo-footer" src="https://mss-templete-sivanmyc.c9.io/digitalsummit/images/logo.png"> 
                            <br><ul class="footer-nav footer-nav-links list-inline">
                                <li><a href="https://www.facebook.com/andhracloud" target="_blank" class="social-facebook" data-toggle="tooltip" title="" data-original-title="Like our Facebook page"><i class="fa fa-fw fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/andhracloud" target="_blank" class="social-twitter" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/104381127288956493644/posts/p/pub" target="_blanknk" class="social-google-plus" data-toggle="tooltip" title="" data-original-title="Like our Google+ page"><i class="fa fa-fw fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/groups/10313125" class="social-linkedin" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg" class="social-youtube" data-toggle="tooltip" title="" data-original-title="Watch our videos on YouTube"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <em><span>2016</span></em> &copy;  Miracle Software Systems, Inc

                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>


        </footer> 
    </body>
</html>

    </body>
</html>
