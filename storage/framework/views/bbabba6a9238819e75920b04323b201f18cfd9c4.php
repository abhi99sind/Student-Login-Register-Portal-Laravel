
<!DOCTYPE html>
<html>
<head>

	 <meta charset="utf-8">
        <title>Task</title>
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
<section class="container-fluid">
	<div class="row">
	<div style="width:100%; text-align: center;">
		<h3 class="login-register">Login / Register Panel</h3>
	</div>
	</div>
	<div class="container" style="padding:10px 80px 0 80px;">
		<div class="row">
			<div class="col-col-sm-6 col-md-6" style="margin-top: 20px;">
			<div class="login-hdr"><i class="fa fa-user login-icon fa-sty"></i> <strong>Login</strong></div>
				<form action="<?php echo e(url('/submit_log')); ?>" method="POST" class="login-form">
                    <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="form-group">
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required="">
                    </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary logs">LOG IN</button> &nbsp;
                <span><a href="<?php echo e(url('/Votp')); ?>" style="color:blue;">Forgot password?</a></span>
				</form>
		</div>
		<div class="col-col-sm-6 col-md-6" style="margin-top: 20px;">
			<div class="login-hdr"><i class="fa fa-pencil-square-o fa-sty1"></i> <strong>New User Register</strong></div>
			<form action="<?php echo e(url('/store')); ?>" method="POST" class="login-form">
				<!-- search -->


				<!-- search -->

					<div class="form-group">
				<input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
					</div>


					<div class="form-group">
						<div class="alert1 alert-info">
							<a href="#" class="alert-link">Your password will be sent in your email ID.</a>
							</div>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
                        <span id="email_status"></span>
                    </div>
					<input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input type="hidden" class="form-control" name="status" value="Active">
				<button type="submit" name="submit" value="submit" class="btn btn-primary logs">SIGN UP</button>
				</form>
		</div>
		</div>
		</div>
</section>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/create.blade.php ENDPATH**/ ?>