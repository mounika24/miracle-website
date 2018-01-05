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

       <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
       
        <title>Digital Summit | MEANHack 2016</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="./includes/js/generalScript.js"></script>
        <?php include './context.php'; ?>
        <link rel="stylesheet" href="./includes/css/style.css">
         <link rel="stylesheet" href="./includes/css/bootstrap.min.css">
         <link rel="stylesheet" href="./includes/css/main.css">
         <link rel="stylesheet" href="./includes/css/plugins.css">
        <script src="./includes/js/countdown.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="js/interactive-svg.js"></script>
		<link rel="stylesheet" type="text/css" href="css/interactive-svg.css" />
		<script src="js/modernizr.custom.js"></script>
        <!-- time line css-->
        <style>
           
section#timeline {
  width: 100%;
  margin: 20px auto;
  position: relative;
}
section#timeline:before {
  content: '';
  display: block;
  position: absolute;
  left: 50%;
  top: 0;
  margin: 0 0 0 -1px;
  width: 2px;
  height: 97%;
  background: #232527;
}
section#timeline article {
  width: 100%;
  margin: 0 0 20px 0;
  position: relative;
}
section#timeline article:after {
  content: '';
  display: block;
  clear: both;
}
section#timeline article div.inner {
  width: 40%;
  float: left;
  margin: 5px 0 0 0;
  border-radius: 6px;
  
}
h5{
   
    line-height:1.5em !important;
}

section#timeline article div.inner span.date {
    padding-top:16px;
  display: block;
  width: 50px;
height: 50px;
padding: -2px 0;
position: absolute;
top: 0;
left: 50%;
margin: 0 0 0 -25px;
  border-radius: 100%;
  font-size: 12px;
  font-weight: 900;
 
  background: #25303B;
  color: #fff;
 
  box-shadow: 0 0 0 7px #25303B;
}
section#timeline article div.inner span.date span {
  display: block;
  text-align: center;
}
section#timeline article div.inner span.date span.day {
  font-size: 10px;
}
section#timeline article div.inner span.date span.month {
  font-size: 12px;
}
section#timeline article div.inner span.date span.year {
  font-size: 10px;
}
section#timeline article div.inner h2 {
  padding: 15px;
  margin: 0;
  color: #fff;
  font-size: 15px;
  line-height:1.5em;
  letter-spacing: 0.5px;
  border-radius: 6px 6px 0 0;
  position: relative;
}
section#timeline article div.inner h2:after {
     content: '';
  position: absolute;
  top: 20px;
  right: -5px;
  	width: 10px; 
	  height: 10px;
  -webkit-transform: rotate(-45deg);
}
section#timeline article div.inner p {
  padding: 15px;
  margin: 0;
  font-size: 14px;
  background: #fff;
  color: #656565;
  border-radius: 0 0 6px 6px;
}
section#timeline article:nth-child(2n+2) div.inner {
  float: right;
}
section#timeline article:nth-child(2n+2) div.inner h2:after {
  left: -5px;
}
section#timeline article:nth-child(1) div.inner h2 {
  background: #e74c3c;
}
section#timeline article:nth-child(1) div.inner h2:after {
  background: #e74c3c;
}
section#timeline article:nth-child(2) div.inner h2 {
  background: #2ecc71;
}
section#timeline article:nth-child(2) div.inner h2:after {
  background: #2ecc71;
}
section#timeline article:nth-child(3) div.inner h2 {
  background: #e67e22;
}
section#timeline article:nth-child(3) div.inner h2:after {
  background: #e67e22;
}
section#timeline article:nth-child(4) div.inner h2 {
  background: #1abc9c;
}
section#timeline article:nth-child(4) div.inner h2:after {
  background: #1abc9c;
}
section#timeline article:nth-child(5) div.inner h2 {
  background: #9b59b6;
}
section#timeline article:nth-child(5) div.inner h2:after {
  background: #9b59b6;
}
section#timeline article:nth-child(6) div.inner h2 {
  background: #e74c3c;
}
section#timeline article:nth-child(6) div.inner h2:after {
  background: #e74c3c;
}
section#timeline article:nth-child(7) div.inner h2 {
  background: #2ecc71;
}
section#timeline article:nth-child(7) div.inner h2:after {
  background: #2ecc71;
}
section#timeline article:nth-child(8) div.inner h2 {
  background: #e67e22;
}
section#timeline article:nth-child(8) div.inner h2:after {
  background: #e67e22;
}
section#timeline article:nth-child(9) div.inner h2 {
  background: #1abc9c;
}
section#timeline article:nth-child(9) div.inner h2:after {
  background: #1abc9c;
}
section#timeline article:nth-child(10) div.inner h2 {
  background: #9b59b6;
}
section#timeline article:nth-child(10) div.inner h2:after {
  background: #9b59b6;
}
section#timeline article:nth-child(11) div.inner h2 {
  background: #e74c3c;
}
section#timeline article:nth-child(11) div.inner h2:after {
  background: #e74c3c;
}
section#timeline article:nth-child(12) div.inner h2 {
  background: #2ecc71;
}
section#timeline article:nth-child(12) div.inner h2:after {
  background: #2ecc71;
}
section#timeline article:nth-child(13) div.inner h2 {
  background: #e67e22;
}
section#timeline article:nth-child(13) div.inner h2:after {
  background: #e67e22;
}
        </style>
      
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
    <style type="text/css">
     @media only screen and (min-width: 768px) and (max-width: 880px) {
         .widget-image{
             height:535px !important;
         }
         .widget-image> img{
             min-width:810px !important;
         }
     }
     @media only screen and (min-width: 880px) and (max-width: 975px) {
         .widget-image{
             height:545px !important;
         }
         .widget-image> img{
             min-width:810px !important;
         }
     }
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
.widget {
    background-color: #ffffff;
    margin-bottom: 10px;
    position: relative;
    border-radius: 2px;
}
.widget-image:first-child {
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;
}
.widget-image {
    overflow: hidden;
    position: relative;
    height: 500px;
}
.widget-image> img {
    min-width: 830px;
}
img {
    vertical-align: middle;
}
.widget-image-content-red {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(231,76,60, .80);
}
.widget-image-content-blue {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(0,167,155, .85);
}
.btn-default{
    background-color:#fff !important;
    color:#232527 !important;
    box-shadow:none !important;
}
.btn-default:hover{
    background-color:#232527 !important;
    color:#fff !important;
    
}
.widget-image-content-purple {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(155,89,182, .80);
}
.text-light-op, .text-light-op:hover, a.text-light-op, a.text-light-op:hover, a.text-light-op:focus {
    color: rgba(255, 255, 255, .8);
}
.text-light-op {
    padding: 6px !important;
    line-height:1.5em important;
   
}
.text-light, .text-light:hover, a.text-light, a.text-light:hover, a.text-light:focus {
    color: #ffffff;
}
.widget-heading {
    margin: 10px 0;
}
body{
    font-family:'Open Sans', sans-serif !important;
    line-height:1.5em !important;
}
h4{
    color:#00aae7;
    font-size:22px !important;
}
ul{
    margin-left:18px;
}
.nomargintop{
    margin-top:-15px !important;
}
    </style>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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
.carousel-control.left span, .carousel-control.right span {
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
.parallax{
    background-image:url('images/hackathon-bg.jpeg');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
}
.overlay{
    background-color:rgba(0,0,0,0.5);
}
h3 {
    font-size: 23px !important;
    color: #3498db !important;
    font:bold;
}
.greyText {
    color: #898686 !important;
}
        </style>
        
    </head>
    <?php include './header.php'; ?>
    <body class="home">
        
        <section class="parallax">
            <div class="overlay">
            <div class="container">
                
            <div class="row" style="margin-top:40px; margin-bottom:45px;">
            
          <div class="col-sm-6 text-left">
             
            <h1 style="color:#fff"><strong>MEANHack 2016</strong></h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff">MEANHack 2016</font></li>
            </ul>
          </div>
        
        </div>

            </div></div>
        </section>
        <br>
        <section class="container">
        <div class="row">
           
            <div class="col-sm-12">
               <p class="methodText">
                    Among <strong>42 teams, 24 hours, 15 mentors, 3 ideas- Digital Summit 2016</strong> brought out the best innovators among the crowd and crowned as the best digital Innovation team. <strong>MEANHack ‘16</strong>, a unique <strong>24 hour Hack-a-thon</strong>, where 30 teams competed against each other to become a Star. The event focused around Cloud and MEAN Stack technologies, where students discovered and designed a unique working prototype among the 3 ideas that Miracle announced. And the ideas were focussed on Mobility, Internet of Things, Cloud Computing and Cognitive. Finally all the participants geared up with positive energy that made some of them to be the winners.
                </p><br> 
            </div>
        </div>
        
        </div>
        <br>
        <div class="row">
          
            <div class="col-sm-6">
                
                <h4 style="color:#0d416b"><strong>Venue, Date and Environment</strong></h4>
                <p class="methodText">
        <strong>MEANHack ’16</strong> was held at <strong>Miracle Heights, Rushikonda</strong> which is <strong>Miracle’s APAC HQ</strong>. Situated on a beautiful hill, with a beautiful view of the Bay of Bengal, that treated everyone with a free-style and innovation-encouraging environment. Everyone choose their area in the location to work that suited best for their team! Lunch, snacks, dinner and more were provided by Miracle and engaged them with some fun and games as well to the work. While dress code is up to their, that was comfortable and unobtrusive to others in the area. We also provided a harassment free area for all the attendees and any negligence to this code of conduct were treated with punishment.           
                </p>
               
                <p class="methodText">
                    The top 3 teams with the best implementation of the ideas were awarded and recognized with <strong>Miracle</strong> sponsoring over 25 thousand rupees which were to be won in cash prizes.
                </p>
                 <h4 style="color:#0d416b"><strong>Event Rules and Details</strong></h4> 
                <p class="methodText">
                  
                    <ul>
                        <li>Each team consisted of a minimum of 3 members and a maximum of 4 members – All students were of 3rd year (or) 4th year B.Tech</li>
                        <li>All team members brought their own laptops – WIFI, Power and seating was provided by Miracle</li>
                        <li>Final 30 teams were selected by Miracle – Not all teams that registered are selected to participate</li>
                        <li>Any detection of plagiarism, misconduct, (or) unlawful behavior resulted in the disqualification of the team from the event</li>
                        <li>All the teams participated in the full event – leaving in the middle rendered the college and the students ineligible for any future Miracle/AP Cloud programs</li>
                    </ul>
                   
                </p>
                <h4 style="color:#0d416b"><strong>Scoring and Judging </strong></h4>
                <p class="methodText">
                    The scoring process not only included the final demonstration but also the overall performance and attitude throughout the event. The following elements were used to judge the performance and points,
                   
                    <ul>
                    <li>Code Quality and UI/UX of application</li>
                    <li>Innovation behind the functional idea</li>
                    <li>Percentage of completion towards the problem case</li>
                    <li>Aptness in solving the problem at hand</li>
                    <li>Demo mechanism and presentation speech quality</li>
                    <li>Time/Task/Team Management</li>
                    <li>Overall behavior/attitude of the team</li>
                    </ul>
                    
                </p>
              <h4 style="color:#0d416b"><strong>Selection Process Timeline </strong></h4>
                <p class="methodText">
            
                   
                    <ul>
                    <li>Registrations  were opened from November 18th, 2016</li>
                    <li>What is MEANHack? Video was released on November 22nd, 2016</li>
                    <li>Registrations were closed on November 30th, 2016</li>
                    <li>Final 30 Teams were announced on December 1st, 2016</li>
                    <li>Training Material were provided to Teams on December 2nd, 2016</li>
                    <li>Webinar for Team Questions/Information was conducted on December 6th, 2016</li>
                    <li>Finally team meet and MEANHack ‘16 was held on December 16th, 2016</li>
                    </ul>
                    
                </p>
             
            </div>
            <div class="col-sm-6">
                <h4 style="color:#0d416b"><strong>Event Schedule</strong></h4>
                <section id="timeline">
  <article>
    <div class="inner">
      <span class="date">
       
        <span class="month">8 AM</span>
        
      </span>
      <h2 ><strong>Student Team Reporting and  Kit Pickup</strong> </h2>
    
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
        <span class="month">9 AM</span>
        
      </span>
      <h2 style="background-color:#"><strong>Opening Keynote and Task Assignment</strong></h2>
     
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">10 AM</span>
      </span>
      <h2> <strong>Idea Discussion</strong></h2>
      
    </div>
  </article>
 <article>
    <div class="inner">
      <span class="date">
         <span class="month">11 AM</span>
      </span>
      <h2><strong>Coding Starts</strong></h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">1 PM </span>
      </span>
      <h2><strong> Working Lunch</strong></h2>
      
    </div>
  </article>
   <article>
    <div class="inner">
      <span class="date">
         <span class="month">4 PM</span>
      </span>
      <h2> <strong>ReviewRound #1</strong></h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">8 PM</span>
      </span>
      <h2> <strong>ReviewRound #2</strong></h2>
      
    </div>
  </article>
   <article>
    <div class="inner">
      <span class="date">
         <span class="month"> 9 PM  </span>
      </span>
      <h2> <strong>Working Dinner</strong></h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">12 AM</span>
      </span>
      <h2><strong> Review Round #3</strong> </h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">2 AM </span>
      </span>
      <h2><strong> Review Round #4</strong></h2>
      
    </div>
  </article>
    <article>
    <div class="inner">
      <span class="date">
         <span class="month">6 AM </span>
      </span>
      <h2> <strong>Final Review</strong></h2>
      
    </div>
  </article>
    <article>
    <div class="inner">
      <span class="date">
         <span class="month">7 AM </span>
      </span>
      <h2> <strong>Demo Rounds</strong></h2>
      
    </div>
  </article>
    <article>
    <div class="inner">
      <span class="date">
         <span class="month">10 AM </span>
      </span>
      <h2> <strong>Winner Announcements</strong></h2>
      
    </div>
  </article>
</section>
            </div>
           
            
            </div>
            <br>
      <div class="row">
          <div class="col-sm-12">
              <h4 style="color:#0d416b"><strong>Selecting your track</strong></h4>
              <p> While the actual implementation idea presented to the students on the day of the event, the technology track was selected by students. <strong>FIrst-come-first-serve</strong> is the main motto of the technology tracks that they have selected. Each track had an unique Miracle problem that they gave on December 16th, during the event.</p>
          </div>
      </div>
                 <div class="row">
       
                <div class="col-sm-4">
                        <br>
                           <center><img src="images/hackathon/BigData_Analytics.png" alt="avatar" height="150" width="150"> </center>
                           <center> <h4 style="color:#0d416b"><strong>Enterprise Mobility</strong></h4> </center>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"><hr style="margin-top:0; margin-bottom:0;border-color:#000;"></div>
                                <div class="col-sm-4"></div>
                            </div>
                           <center><h5>The participants joined the event and built a mobile application that helped Miracle employees interacted that facilitated team better through technology. And this track involved technologies such as <strong>Ionic, Angular, Sockets, Node JS, Cloudant</strong> and more.</h5></center>
                           
                </div>
                <div class="col-sm-4">
                            <br>
                           <center><img src="images/hackathon/BusinessIntelligence.png" alt="avatar"  height="150" width="150"> </center>
                          <center> <h4 style="color:#0d416b"><strong>Cognitive Computing</strong></h4> </center>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"><hr style="margin-top:0; margin-bottom:0; border-color:#000;"></div>
                                <div class="col-sm-4"></div>
                            </div>
                            <center><h5><strong>Chatbot</strong> was built by the students which changed the way that Miraclites interacted with the Innovation Labs team for tasks. This track involved technologies such as <strong>Watson, Node JS, Sockets, APIs, Cloudant, IBM Bluemix</strong> and more.</h5></center>
                           <br>
                           
                </div>
                <div class="col-sm-4">
                     <br> 
                           <center><img src="images/hackathon/CognitiveIoT.png" alt="avatar" height="150" width="150"> </center>
                          <center> <h4 style="color:#0d416b"><strong>Connected Solutions</strong></h4> </center>
                           <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"><hr style="margin-top:0; margin-bottom:0; border-color:#000;"></div>
                                <div class="col-sm-4"></div>
                            </div>
                           <center><h5>Students at <strong>MEANHack’16</strong> designed a solution that helped Miracle’s Bus Schedule optimization with the help of RFID technology and a very cool dashboard. This track involved technologies such as <strong>Angular, Sockets, Node JS, RFID, IBM Bluemix</strong> and more.</h5></center>
            </div>
            </div>
           <div class="row">
               <div class="col-sm-12">
                   <hr class="nomargintop">
               </div>
           </div>
            <em class="nomargintop">For any questions regarding registrations and results feel free to reach out to <a  href="mailto:innovation@miraclesoft.com"><b>innovation@miraclesoft.com</b></a></em> 
            <br>
        
        </section>
       
            
    </body>
    <br>
    <?php include './footer.php'; ?>
</html>
