
<div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
   <div class="slides carousel-inner">
    <?php $i=1; foreach($record as $value){ ?>
      <div class="item <?php if($i == 1){ ?>active <?php } ?>">
         <img width="50" height="50"src="<?php echo base_url();?>images/banners/<?php echo $value['banner']; ?>" alt="banner1" />
         <div class="banner_caption">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="caption_inner animated fadeInUp">
                        <h1><?php echo $value['banner_title']; ?></h1>
                        
                     </div>
                     <!--end caption_inner-->
                  </div>
               </div>
               <!--end row-->
            </div>
            <!--end container-->
         </div>
         <!--end banner_caption-->
      </div>
	<?php $i++; } ?>
      
   </div>
   <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
   <img src="<?php echo base_url();?>assets/home/img/prev-slid.png">
   </a>
   <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
   <img src="<?php echo base_url();?>assets/home/img/next-slid.png">
   </a>
</div>
<!--end banner-->
<div class="mainContent clearfix">
   <div class="container">
      <div class="row clearfix">
         <div class="col-sm-8 col-xs-12">
            <div class="videoNine clearfix">
            <div class="videoArea clearfix">
                  <h3>Welcome To SVS CHAMPION KIDS SCHOOL</h3>
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 videoLeft">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/home/img/logo.png" >
                     </div>
                     <!-- videoLeft -->
                     <div class="col-lg-6 col-md-6 col-xs-12 videoRight">
                        <p>SVS Champion Kids School approach place trust and focus on the child rather than the marks attained by a student. The school is not just a behave of activity nor a centre of more formal learning but a living and organic Community.</p>
						<p>SVS Champion Kids School A buying desire to provide suitable environment to educate and train the kids to take up career and life as a useful citizen of society made me to start the SVS Champion Kids School.</p>
						<p>Dear Parents, we developed the Character, Leadership, Secular, Outwork spirit of Adventure and ideas of selfless service amongst the children, who entered into the portal of this institution.</p>
                        <a href="<?php echo base_url();?>contact-us" class="btn  btn-primary btn-rounded">Get In Touch</a>
                     </div>
                     <!-- videoRight -->
                  </div>
                  <!-- row contact-us
               </div>
               <!-- videoArea -->
            </div>
            <!--videoNine-->
         </div>
         </div>
         <!-- col-sm-8 col-xs-12 -->
         <div class="col-sm-4 col-xs-12">
            <div class="formTitle">
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
            
               </div>
            </div>
            <!-- formArea -->
            <!-- end list_block -->
         </div>
         <!-- col-sm-4 col-xs-12 -->
      </div>
      <!-- row clearfix -->
   </div>
   <!-- container -->
</div>
<!-- mainContent -->
<div class="count clearfix wow fadeIn paralax" data-wow-delay="100ms" style="background-image: url(<?php echo base_url();?>assets/home/img/paralax03.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-xs-6 col-sm-4">
            <div class="text-center">
               <div class="icon"><i class="fa fa-group"></i></div>
               <div class="counter">
                  <span class="timer">200</span>
               </div>
               <div class="seperator-small"></div>
               <p>Students</p>
            </div>
         </div>
         <!-- col-sm-3 -->
         <div class="col-xs-6 col-sm-4">
            <div class="text-center">
               <div class="icon"><i class="fa fa-male"></i></div>
               <div class="counter">
                  <span class="timer">20</span>
               </div>
               <div class="seperator-small"></div>
               <p>Teachers</p>
            </div>
         </div>
         <!-- col-sm-3 -->
         <div class="col-xs-6 col-sm-4">
            <div class="text-center">
               <div class="icon"><i class="fa fa-map-marker"></i></div>
               <div class="counter">
                  <span class="timer">2</span>
               </div>
               <div class="seperator-small"></div>
               <p>Branches</p>
            </div>
         </div>
         <!-- col-sm-3 -->
         <!-- col-sm-3 -->
      </div>
      <!-- row -->
      <!-- row -->
   </div>
   <!-- container -->
</div>
<!-- count -->
<div class="container" id="test">
   <div class="row">
      <div class="col-xs-12 col-sm-8 custom_right">
         <div class="single_content_left">
            <br>
            <br>
            <br>
            <h3>Contact Form</h3>
            <div class="contact_form" >
			    <?php if($this->session->flashdata('msg_succ') != ''){?>  
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
                    </div>
                <?php } ?>
                <?php if($this->session->flashdata('msg_error') != ''){?>
                    <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('msg_error')?$this->session->flashdata('msg_error'):'';?>
                    </div>
                <?php } ?>
			
               <form method="post" >
                  <div class="row">
                     <div class="col-xs-12 col-sm-7">
                        <div class="form-group">
                           <label>Name <span class="error">*</span></label>
                           <input type="text" value="<?php echo $this->input->post('name');?>" class="form-control"  name="name">
						   <span><?php echo form_error('name'); ?></span>
                        </div>
                     </div>
                  </div>
                  <!--end row-->
                  <div class="row">
                     <div class="col-xs-12 col-sm-7">
                        <div class="form-group">
                           <label>Email <span class="error">*</span></label>
                           <input type="text" value="<?php echo $this->input->post('email');?>" class="form-control" name="email">
						   <span><?php echo form_error('email'); ?></span>
                        </div>
                     </div>
                  </div>
                  <!--end row-->
                  <div class="row">
                     <div class="col-xs-12 col-sm-11">
                        <div class="form-group">
                           <label>Message <span class="error">*</span></label>
                           <textarea class="form-control" value="<?php echo $this->input->post('message');?>" name="message" cols="10" rows="9"></textarea>
						   <span><?php echo form_error('message'); ?></span>
                        </div>
                     </div>
                  </div>
                  <!--end row-->
                  <input type="submit" name="submit" id="something" value="Send Message" class="commonBtn">
               </form>
            </div>
         </div>
         <!--end single content left-->
      </div>
      <div class="col-xs-12 col-sm-4 custom_left">
         <div class="sidebar">
            <div class="py-4">
             <ul class="contact_info">
									<li><h4>SVS CHAMPION KIDS SCHOOL</h4></li>	
									<li><i class="fa fa-home"></i><b>Branch-1:</b> Plot No 197, Near Sheshadri Nagar community hall, Venkat Rao Nagar colony, Kukatpally, Hyderabad, Telangana 500072</li>
									<li><i class="fa fa-home"></i><b>Branch-2:</b> SVS CHAMPION KIDS SCHOOL, ramalayam  road,near vishal towers,beside royal Enfield  service center ,kukatpally  , Hyderabad 500072</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:info@example.com">info@svschampion.com</a></li>
									<li><i class="fa fa-phone"></i>8099025828, 9398091596</li>
									<li><i class="fa fa-globe"></i> <a href="#">www.svschampionkids.com</a></li>
								</ul>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div>
               <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.3537018767956!2d78.41445961416659!3d17.490621188016778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91b85cb056ad%3A0x5e6d3f980d254e07!2sSVS+Champion+Kids+School!5e0!3m2!1sen!2sin!4v1562326754318!5m2!1sen!2sin" width="100%" height="300" style="border:4px solid #ddd" allowfullscreen></iframe>
            </div>
         </div>
         <!--end sidebar-->
      </div>
   </div>
</div>
 <script>
 $('#something').click(function() {
  $('#test').focus();
});
</script>
<div class="clearfix">
&nbsp;</div>
<?php //include('footer.php'); ?>

