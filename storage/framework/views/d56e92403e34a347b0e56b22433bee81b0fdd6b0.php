<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Mardarshak</title>
		<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <link href="<?php echo e(url('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')); ?>" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo e(url('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('//code.jquery.com/jquery-1.11.1.min.js')); ?>"></script>
        <style type="text/css">
            .header_area .navbar .nav .nav-item.submenu ul {
    position: absolute;
    top: 120%;
    left: 0px;
    min-width: 160px !important;
    text-align: left;
    opacity: 0;
    transition: all 300ms ease-in;
    visibility: hidden;
    display: block;
    border: none;
    padding: 0px;
    border-radius: 0px;

}  
    .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
    line-height: 45px;
    color: #222222;
    padding: 0px 25px;
    transition: all 150ms linear;
    display: block;
    margin-right: 0px;
}
.footer-area{
   background: url(<?php echo e(asset('images/footer.png')); ?>) repeat-x;
    padding: 10px 0 0px;
    color: #fff;
    font-size: 12px;
    background-size: 25px 100%;
}
h4{
 color:#222222 !important;
}

/*--team--*/
@media (min-width: 768px) {

    /* show 3 items */
    .carousel-inner .active,
    .carousel-inner .active + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
        display: block;
    }
    
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    
    .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    /* farthest right hidden item must be abso position for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}

 /* Bootstrap Lightbox using Modal */

#profile-grid { overflow: auto; white-space: normal; } 
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
/*--team--*/

/*--school--*/
.know-ourteam {
    background: #fff;
    padding: 50px 0;
}
.school {
    width: 100%;
    background: #fff;
    margin-left: 0;
}
.hoverbox li {
    background: #eee;
    border-color: #ddd #bbb #aaa #ccc;
    border-style: solid;
    border-width: 1px;
    color: inherit;
    display: inline;
    float: left;
    margin: 3px;
    padding: 5px;
    position: relative;
}
        </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-right">
						<ul class="list header_social">
                            <li><a href="#"> Donate</a></li>
							<li><a href="<?php echo e(url('/create')); ?>"><i class="fa fa-user"></i> Login </a></li>
						</ul>
					</div>
					<div class="float-left">
						<a class="dn_btn" href="tel:+4400123654896"><i class="fa fa-phone-square"></i> +91 9650 72 22 40; 1800 2122 401 (Toll Free)</a>
						<a class="dn_btn" href="mailto:support@colorlib.com">mail@certc.in</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="<?php echo e(asset('img/margdarshak-logo.png')); ?>" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="about-us.php">Career <i class="fa fa-arrow-down"></i></a>
                                   <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="courses.php">Exploration</a>
                                        <li class="nav-item"><a class="nav-link" href="course-details.php">Assessment</a></li>
                                    </ul> 
                                </li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="courses.php">Study Organiser</a>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Research <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="elements.php">Case Studies</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements.php">Catlog</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Training <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.php">Prospectus</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Council <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="elements.php">About</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements.php">Contact</a></li>
                                         <li class="nav-item"><a class="nav-link" href="elements.php">CAP-Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements.php">CERTC-Standards</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements.php">Member</a></li>
                                    </ul>
                                </li> 
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h3>We Ensure better education <br />for a better world</h3>
						<p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
						<a class="main_btn" href="#">Get Started</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Finance Area =================-->
        <section class="finance_area">
        	<div class="container">
        		<div class="finance_inner row">
        			<div class="col-lg-6 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="lnr lnr-rocket"></i>
        						</div>
        						<div class="media-body">
        							<h5>Be a Career Advisor Transform Lives</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="lnr lnr-earth"></i>
        						</div>
        						<div class="media-body">
        							<h5>Open a Career Development Centre </h5>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- =====new section1============ -->
        <section class="container-fluid mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <h3>Why Career Planning?</h3>
                        <p style="font-size: 16px;">To understand this question let's read these strange but true career facts.</p>
                        <div class="d-flex flex-column mb-3">
                        <div class="p-2">
                             <div class="progress" style="height: 21px; font-size: 16px; border-radius: 25px;">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated text-right" style="width:97%">97%
                                </div>
                             </div>
                              <span style="font-size: 16px;">People first finish their journey (education) and then think about destination (career).</span>
                        </div>
                        <div class="p-2">
                            <div class="progress" style="height: 21px; font-size: 16px; border-radius: 25px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated text-right" style="width:94%">94%
                                </div>
                             </div>
                              <span style="font-size: 16px;"> Adults are either in the wrong career or under-employed.</span>
                        </div>
                        <div class="p-2">
                           <div class="progress" style="height: 21px; font-size: 16px; border-radius: 25px;">
                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated text-right" style="width:92%">92%
                                </div>
                             </div>
                              <span style="font-size: 16px;"> School students, when asked about their career choice have "let's see what happens" attitude and most of them are either having unrealistic career ambitions or they follow the crowd.</span>  
                        </div>
                         <div class="p-2">
                           <div class="progress" style="height: 21px; font-size: 16px; border-radius: 25px;">
                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated text-right" style="width:88%">88%
                                </div>
                             </div>
                              <span style="font-size: 16px;">Jobseekers refuse to do training which are linked with jobs. “If I am getting a job then why to go for training?” They prefer to remain unemployed or enrol for training programmes without job offers.</span>  
                        </div>
                         <div class="p-2">
                           <div class="progress" style="height: 21px; font-size: 16px; border-radius: 25px;">
                                <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated text-right" style="width:82%">82%
                                </div>
                             </div>
                              <span style="font-size: 16px;">Post graduates are not able to utilise their investment in education as they fail to understand that degrees lacking employability skills are like a mobile phone without a SIM card.</span>  
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h3 style="text-align: center;">Career Development – A BIG NO !</h3>
                        <img src="<?php echo e(asset('img/parents.png')); ?>" class="img-fluid">
                        <p style="font-size: 16px;">
                            Parents refuse to give 40 minutes for career planning of their children, making them to suffer and struggle for 40 years in their working lives.
                        </p>
                        <p style="font-size: 16px;">
                            Authentic and impartial guidance at the career building stage has the ability to radically transform the lives of individuals and communities.
                        </p>
                        <p style="font-size: 16px;">
                            Career development needs self awareness, knowledge of occupational trends, authentic education training pathways and an accurate decision-making model.
                        </p>
                        <p style="font-size: 16px;">
                            Remember even a best player requires a coach!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====/new section1============ -->
        <!--================End Finance Area =================-->
        
            <!-- team -->
                    <div class="container-fluid p-5">
                   <div class="main_title">
                    <h2>Meet Our Faculty</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                </div>
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  active">
                <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
             <div class="carousel-item col-md-3  ">
                <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="<?php echo e(asset('img/team/team-1.jpg')); ?>" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>Ethel Davis</h4>
                                <p>Managing Director (Sales)</p>
                            </div>
                        </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
            <!-- /team -->

        <!--================Courses Area =================-->
        <section class="courses_area p_120" style="background-color: #4dbf1c;">
        	<div class="container">
        		<div class="main_title">
        			<h2 style="color:#fff;">Career Education Tools</h2>
        			<p style="color:#fff;">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        		</div>
                <div class="row" style="text-align: center;">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img src="<?php echo e(asset('img/margdarshak-talent.png')); ?>" class="team_img">
                        <div class="one">
                            <p style="color:#fff;">
                                hello doly
                            </p>
                        </div>
                    </div>
                     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img src="<?php echo e(asset('img/margdarshak-education.png')); ?>" class="team_img">
                        <div class="one">
                            <p style="color:#fff;">
                                hello doly
                            </p>
                        </div>
                    </div>
                     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img src="<?php echo e(asset('img/margdarshak-career.png')); ?>" class="team_img">
                        <div class="one">
                            <p style="color:#fff;">
                                hello doly
                            </p>
                        </div>
                    </div>
                     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                       <img src="<?php echo e(asset('img/margdarshak-study.png')); ?>" class="team_img">
                        <div class="one">
                            <p style="color:#fff;">
                                hello doly
                            </p>
                        </div>
                    </div>
                     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img src="<?php echo e(asset('img/margdarshak-apptitude.png')); ?>" class="team_img">
                        <div class="one">
                            <p style="color:#fff;">
                                hello doly
                            </p>
                        </div>
                    </div>
                     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img src="<?php echo e(asset('img/margdarshak-index.png')); ?>" class="team_img">
                        <div class="one">
                            <p style="color:#fff;">
                                hello doly
                            </p>
                        </div>
                    </div>
                </div>
        		
        	</div>
        </section>
        <!--================End Courses Area =================-->
    
        
      
        <!--================Pagkages Area =================-->
      <!--   <section class="packages_area p_120">
        	<div class="container">
                <div class="main_title">
                    <h2>Loren Ipsome Dolor</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                </div>
        		<div class="row packages_inner">
        			<div class="col-lg-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="lnr lnr-diamond"></i>
                                <h3>Exclusive</h3>
                                <p>For the individuals</p>
                            </div>
                        </div>
                    </div>
        			<div class="col-lg-4">
        				<div class="packages_item">
        					<div class="pack_head">
        						<i class="lnr lnr-graduation-hat"></i>
        						<h3>Premium</h3>
        						<p>For the individuals</p>
        					</div>

        					
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="packages_item">
        					<div class="pack_head">
        						<i class="lnr lnr-diamond"></i>
        						<h3>Exclusive</h3>
        						<p>For the individuals</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section> -->
        <!--================End Pagkages Area =================-->
        
        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>CAP-Contest</h2>
        			<p>Win Scholarships and Prizes. Inspire your path to success!</p>
        		</div>
        		<div class="row latest_blog_inner">
        			<div class="col-lg-3 col-md-6">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo e(asset('img/latest-blog/l-blog-1.jpg')); ?>" alt="">
        					<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
        					<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
        					<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo e(asset('img/latest-blog/l-blog-2.jpg')); ?>" alt="">
        					<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
        					<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
        					<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo e(asset('img/latest-blog/l-blog-3.jpg')); ?>" alt="">
        					<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
        					<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
        					<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo e(asset('img/latest-blog/l-blog-4.jpg')); ?>" alt="">
        					<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
        					<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
        					<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->
        <!--================school=================================-->
            <section class="container-fluid">
                        <div class="row know-ourteam">
  <div class="container">
    <h2 class="text-center">Careerlinked School</h2>
    <div class="row">
   
 
   <!-------school----->
   <div class="school">
 
   <div class="careerlinked">
	<ul class="hoverbox">

<li>
<a href="#"><img src="<?php echo e(asset('img/school1.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school2.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school3.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school4.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school5.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school6.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school7.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school8.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school9.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school10.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school11.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school12.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school13.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school14.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school15.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school16.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school14.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school18.jpg')); ?>" alt="description"></a>
</li>
<li>
<a href="#"><img src="<?php echo e(asset('img/school19.jpg')); ?>" alt="description"></a>
</li>
</ul>
</div>
</div>


	<!------end---school-->
   
   </div>
   


  </div>
            </section>

        <!--================school=================================-->
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120" style="padding:40px;">
        	<div class="container">
        		<div class="impress_inner text-center">
					<h2>Become an instructor</h2>
					<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck</p>
					<a class="main_btn2" href="#">Apply for the post</a>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->
        
        <!--================ start footer Area  =================-->	
        <!--================ End footer Area  =================-->
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
<script type="text/javascript">
$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#carouselExample').carousel({ 
                interval: 2000
        });

  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
</script>

    </body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\resources\views/welcome.blade.php ENDPATH**/ ?>