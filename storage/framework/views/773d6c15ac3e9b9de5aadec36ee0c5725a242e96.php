
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
		<h3 class="login-register">Login / Register</h3>
	</div>
	</div>
	<div class="container" style="padding:10px 80px 0 80px;">
		<div class="row">
			<div class="col-col-sm-6 col-md-6" style="margin-top: 20px;">
			<div class="login-hdr"><i class="fa fa-user login-icon fa-sty"></i> <strong>Welcome to Margdarshak!</strong></div>
				<form name="frm1" action="<?php echo e(url('/submit_log')); ?>" method="POST" class="login-form">
					
					<div class="form-group">
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required="">
					</div>
				<button type="submit" name="submit" value="submit" class="btn btn-primary logs">LOG IN</button> &nbsp; <span><a href="#" style="color:blue;">Forgot password?</a></span>
				</form>
		</div>
		<div class="col-col-sm-6 col-md-6" style="margin-top: 20px;">
			<div class="login-hdr"><i class="fa fa-pencil-square-o fa-sty1"></i> <strong>New User Register</strong></div>
			<form action="<?php echo e(url('/store')); ?>" method="POST" class="login-form">
				<!-- search -->
				
				<div class="form-group">
				<select padding:7px;" class="form-control" id="select" placeholder="Usertype" data-search="true">
					<option value="AC">	User Type</option>
					
				</select>
				</div>
				<!-- search -->
				
					<div class="form-group">
				<input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
					</div>
					<div class="form-group">
							<div class="alert1 alert-info">
							<a href="#" class="alert-link">An OTP will be sent to your mobile.</a>
							</div>
						<input type="Mobile" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile" required="">
					<span id="mobile_status"></span>
					</div>
					<div class="form-group otp"></div>

					<div class="form-group">
						<div class="alert1 alert-info">
							<a href="#" class="alert-link">Your password will be sent in your email ID.</a>
							</div>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
					</div>
					<input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input type="hidden" class="form-control" name="status" value="Active">
				<button type="submit" name="submit" value="submit" class="btn btn-primary logs">SIGN UP</button>
				</form>
		</div>
		</div>
		</div>
</section>

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
<?php /**PATH /home/careerin/laravel/resources/views/create.blade.php ENDPATH**/ ?>