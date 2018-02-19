

<!DOCTYPE HTML>
<html>
<head>
<title>husnudzon food</title>
<!--css-->
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="assets/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="assets/js/main.js"></script>
<!--search jQuery-->
<script src="assets/js/responsiveslides.min.js"></script>
<!-- cart -->
</head>
<body>
	<!--header-->
		
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Edit Profil</h3>
					<form action="<?php echo base_url('admin/editProfil') ?>" method="post">
						email
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" readonly value="<?php echo $this->session->userdata('email') ?>" name="email">
							<div class="clearfix"></div>
						</div>
						username
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" name="username" value="<?php echo $this->session->userdata('nama') ?>">
							<div class="clearfix"></div>
						</div>
						Password lama
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="password" placeholder="password lama" placeholder="password lama" >
							<div class="clearfix"></div>
						</div>
						Password baru
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" placeholder="password baru" name="newPassword">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
						<input type="submit" formaction="<?php echo base_url('admin') ?>" value="Cancel">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
		
</body>
</html>