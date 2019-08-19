


     
   <div class="custom_content custom">
			<div class="container large">
				<div class="row">
					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
						<br>
						<br>
						<br>
				
							<h3>Contact Form</h3>
							
							<p>Please fill out our form, and we'll get in touch shortly.</p>
							<div class="contact_form">
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
								<form method="post" action="" >
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Name <span class="error">*</span></label>
												<input type="text" class="form-control" value="<?php echo $this->input->post('name');?>" name="name">
											<span><?php echo form_error('name'); ?></span>
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Email <span class="error">*</span></label>
												<input type="email" value="<?php echo $this->input->post('email');?>" class="form-control" name="email" >
												<span><?php echo form_error('email'); ?></span>
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-11">
											<div class="form-group">
												<label>Message <span class="error">*</span></label>
												<textarea  name="message" value="<?php echo $this->input->post('message');?>" class="form-control" cols="10" rows="9" ></textarea>
												<span><?php echo form_error('message'); ?></span>
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

<?php //include('footer.php'); ?>

