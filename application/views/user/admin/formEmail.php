<?php 
  $id = $this->session->userdata('id');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>husnudzon food</title>
<!--css-->
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!DOCTYPE HTML>
<html>
<head>
<title>husnudzon food</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					 
					
				</div>
			</div>
			
		</div>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="<?php echo base_url('reseller') ?>">kembali</a> / <span>Mail</span></h3>
			</div>
		</div>
		<!--banner-->
			<!--content-->
		<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Reply Email</h2>
								<div class="mail-bottom">
									<form action="<?php echo base_url('admin/sendMail/')?><?php echo $id ?>" method="post">
										<input name="username" type="text" readonly value="admin" >
										<input name="email" type="email" readonly value="admin">
										<input id="telephon" readonly type="text" placeholder="=>kirim balasan">
										<textarea id="pesan" name="pesan" placeholder="pesan"></textarea>
										<input type="submit" name="input">
									</form>
								</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
		<?php 
    		$this->load->view('public/footer')
   		?>
</body>
</html>