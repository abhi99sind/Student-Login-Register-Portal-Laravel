
<!DOCTYPE html>
<html>
<head>
<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	 <meta charset="utf-8">
        <title>Mardarshak Careerlinked Education</title>
	<style type="text/css">
		.login-register{
	background: linear-gradient(to left,#0e583e,#db7230);
    color: #fff;
    padding: 15px;
    margin-bottom: 0px;
    margin-top: 0px;

		}
.login-hdr{
	padding: 6px 5px 6px 31px;
    border-top: 2px solid #e8e8e8;
     border-right: 2px solid #e8e8e8;
      border-left: 2px solid #e8e8e8;
       border-bottom: none;
    background-color: #0e583e;
    color: #fff;
    font-size: 24px;
}
.login-form{
	padding:15px 30px 10px 30px; 
	border-top:none;
	border-right: 2px solid #e8e8e8;
	border-left: 2px solid #e8e8e8;
	border-bottom: 2px solid #e8e8e8;
}
.fa-sty{
	background-color: #db7230;
    padding: 11px;
    /* height: 43px; */
    line-height: 17px;
    border-radius: 50%;
}
.fa-sty1{
	background-color: #db7230;
    padding: 10px;
    /* height: 43px; */
    line-height: 23px;
    border-radius: 50%;
}
.logs {
    color: #fff;
    background-color: #0e583e;
    border-color: #0e583e;
}
.logs:hover {
    color: #fff;
    background-color: #0e583e;
    border-color: #0e583e;
}

.alert1 {
    /* width: 100%; */
    padding: 3px;
    margin-bottom: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
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
							<li><a href="create"><i class="fa fa-user"></i> Login </a></li>
						</ul>
					</div>
					<div class="float-left">
						<a class="dn_btn" href="tel:+4400123654896"><i class="fa fa-phone-square"></i> +91 9650 72 22 40; 1800 2122 401 (Toll Free)</a>
						<a class="dn_btn" href="mailto:support@colorlib.com"><i class="fa fa-envelope-o"></i> mail@certc.in</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo e(url('/index')); ?>"><img src="<?php echo e(asset('img/margdarshak-logo.png')); ?>" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="about-us.php">Career <i class="fa fa-angle-down"></i></a>
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
<section class="container-fluid">
	<div class="row">
	<div style="width:100%; text-align: center;">
		<h3 class="login-register">Welcome to Mardarshak</h3>
	</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<blockquote class="blockquote text-center">
  <p class="mb-0">You have successfully Signed Up.</p><br>
  <p class="mb-0">Your password has been sent to your Registered Email.</p><br>
  <footer class="blockquote-footer"><cite title="Source Title">By Our Admin</cite></footer>
</blockquote>
</section>
<br>
<br>
<br>
<br>
<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="<?php echo e(url('//code.jquery.com/jquery-1.11.1.min.js')); ?>"></script>
 <script>
$(document).ready(function(){
	$('#mobile').blur(function(){
		var contact = $(this).val();
		var field = '<input type="number" class="form-control" id="otp" placeholder="Enter OTP" name="otp" required="">';
		if(phone_validate(contact))
		{
			$('#mobile_status').html('ok');
			$('.otp').html(field);
		}
		else{
			$('#mobile_status').html('Invalid Number');
		}
		function phone_validate(phno){
			var regexPattern = new RegExp(/^[0-9-+]+$/);
			if(phno.length!=10)
			{
				alert("Please Enter a 10 digit valid phone number");
				return false;
			}
			return true;
		}
	});
});
 </script>
</body>
</html>
<?php /**PATH /home/careerin/laravel/resources/views/registerSuccess.blade.php ENDPATH**/ ?>