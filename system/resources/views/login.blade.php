<!doctype html>
<html lang="en">
  <head>
  	<title>Tarofurniture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- For favicon png -->
  <link rel="shortcut icon" type="image/icon" href="{{ url('public') }}/assets/logo/favicon.png"/>
	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ url('public/temp_login') }}/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">TAROFURNITURE</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Masukkan Akun Anda</h3>
		      	@include('template.utils.notif')
		      	<form action="{{url('login')}}" method="post" class="signin-form">
		      		@csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <!-- <div class="form-group">
	              <select name="login_as" class="form-control">
	              	<option value="1">Pembeli</option>
	              	<option value="2">Penjual</option>
	              </select>
	            </div> -->
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Ingat saya
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Lupa Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ url('public/temp_login') }}/js/jquery.min.js"></script>
  <script src="{{ url('public/temp_login') }}/js/popper.js"></script>
  <script src="{{ url('public/temp_login') }}/js/bootstrap.min.js"></script>
  <script src="{{ url('public/temp_login') }}/js/main.js"></script>

	</body>
</html>

