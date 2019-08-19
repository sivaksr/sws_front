
<!DOCTYPE html>
<html lang="en">	
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SVS CHAMPION KIDS SCHOOL</title>
    <link rel="icon" href="img/logo.gif" >

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/fullcalendar.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/default.css" id="option_color">

</head>
<?php 
if(isset($_POST['submit']) && $_POST['submit']=!''){ 
    //echo'<pre>';print_r($_POST);exit;
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="school";
		//create connection
		$conn=new mysqli($servername, $username,$password,$dbname);
		//check connection
		if($conn->connect_error){
		die("connection failed:" .$conn->connect_error);	
		}
		
       $sql="INSERT INTO contactus(name,email,message,created_at)
VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."','".date('Y-m-d H:i:s')."')";
			if($conn->query($sql)===true){
        $to = "svschampionkids@gmail.com";
        $subject = "Contact Request";
        $messages = 'Name:'.$_POST['name'].'<br> Email:'.$_POST['email'].'<br>  Message :'.$_POST['message'].'<br> Date:'.date('Y-m-d H:i:s');
		$headers = "From:'".$_POST['email']."' \r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html\r\n";
			if(mail($to, $subject, $messages, $headers)){
			echo 'Your Message has been successfully sent.';
			header("Location:contact-us.php?success=1");
			} else{
			echo 'Technical problem will be occured. please try again.';	
			header("Location:contact-us.php?error=2");
			}
		}
		

}
?>
 
        
<body class="body-wrapper">

  <div class="main_wrapper">

    <header class="header-wrapper">
      <div class="topbar clearfix">
        <div class="container">
          <ul class="topbar-left">
            <li class="phoneNo">SVS CHAMPION KIDS SCHOOL</li>
            <li class="phoneNo"><i class="fa fa-phone"></i>8099025828, 9398091596</li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="#">  info@svschampion.com</a>
            </li>
          </ul>
          <ul class="topbar-right">
            <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="header_inner">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo clearfix pos-ab-logo" href="index.php"><img src="img/logo.png" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                      <li class=" ">
                        <a href="index.php" >Home</a>
                       
                      </li> 
					
					  <li class=" ">
                        <a href="gallery.php" >Gallery</a>
                       
                      </li> 
					  <li class=" ">
                        <a href="careers.php" >Careers</a>
                       
                      </li> 
					  <li class=" active">
                        <a href="contact-us.php"> Contact Us </a>
                       
                      </li> 
					 
                    </ul>
                  </div><!-- navbar-collapse -->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>

     
   <div class="custom_content custom">
			<div class="container large">
				<div class="row">
					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
						<br>
						<br>
						<br>
						 <?php
				 
						 
						 
	   if(isset($_GET['success']) && $_GET['success']==1){ ?>
 	   <div class="alert alert-success">
        Your Message has been successfully sent.
        </div>
	   <?php }else if(isset($_GET['error']) && $_GET['error']==2){ ?>
	   <div class="alert alert-danger">
        Technical problem will be occured. please try again.
         </div>
	   <?php } ?>
							<h3>Contact Form</h3>
							<p>Please fill out our form, and we'll get in touch shortly.</p>
							<div class="contact_form">
								<form method="post" action="" >
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Name <span class="error">*</span></label>
												<input type="text" class="form-control" name="name" required>
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Email <span class="error">*</span></label>
												<input type="email" class="form-control" name="email" required>
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-11">
											<div class="form-group">
												<label>Message <span class="error">*</span></label>
												<textarea  name="message" class="form-control" cols="10" rows="9" required></textarea>
											</div>
										</div>
									</div>
									<!--end row-->
									<input type="submit" value="submit" name="submit" class="commonBtn" >
								</form>
							</div>
						</div><!--end single content left-->
					</div>

					<div class="col-xs-12 col-sm-4 custom_left">
						<div class="sidebar">
							<div class="list_block sidebar_item">
								
								<ul class="contact_info">
									<li><h4>SVS CHAMPION KIDS SCHOOL</h4></li>	
									<li><i class="fa fa-home"></i><b>Branch-1:</b> Plot No 197, Near Sheshadri Nagar community hall, Venkat Rao Nagar colony, Kukatpally, Hyderabad, Telangana 500072</li>
									<li><i class="fa fa-home"></i><b>Branch-2:</b> SVS CHAMPION KIDS SCHOOL, ramalayam  road,near vishal towers,beside royal Enfield  service center ,kukatpally  , Hyderabad 500072</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:info@example.com">info@svschampion.com</a></li>
									<li><i class="fa fa-phone"></i>8099025828, 9398091596</li>
									<li><i class="fa fa-globe"></i> <a href="#">www.svschampionkids.com</a></li>
								</ul>
							</div>
							<div class="list_block">
								<h3>School TIMINGS</h3>
					<table class="table table-bordered">
						<tr>
							<th>Monday</th>
							<td> 10AM to 3PM</td>
						</tr>
							<tr>
							<th>Tuesday</th>
							<td> 10AM to 3PM</td>
						</tr>
							<tr>
							<th>Wednesday</th>
							<td> 10AM to 3PM</td>
						</tr>
							<tr>
							<th>Thursday</th>
							<td> 10AM to 3PM</td>
						</tr>
						
							<tr>
							<th>Friday</th>
							<td> 10AM to 3PM</td>
						</tr>
							<tr>
							<th>Saturday</th>
							<td> 10AM to 3PM</td>
						</tr>	
						<tr>
						<th>Sunday</th>
							<td> Closed</td>
						</tr>
					</table>
							</div><!--end sidebar item-->
						</div><!--end sidebar-->
					</div>
				</div><!--end row-->
			</div>
		</div><!--end custom content-->

		<div class="contact_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.3537018767956!2d78.41445961416659!3d17.490621188016778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91b85cb056ad%3A0x5e6d3f980d254e07!2sSVS+Champion+Kids+School!5e0!3m2!1sen!2sin!4v1562326754318!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div><!--end contact map-->

<?php include('footer.php'); ?>

