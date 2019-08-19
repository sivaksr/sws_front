

   <div class="custom_content clearfix">
			<div class="container" style="min-height:450px;">

				<div class="photo_gallery custom  gallery-cust">
					<ul class="gallery popup-gallery gallery-3col">
                    <?php foreach($record as $value){ ?>
						<li>
							<a href="<?php echo base_url();?>images/banners/<?php echo $value['gallery']; ?>" title="Photo 12">
								<img src="<?php echo base_url();?>images/banners/<?php echo $value['gallery']; ?>" alt=""/>
								<div class="overlay">
									<span class="zoom">
										<i class="fa fa-search"></i>
									</span>
								</div>
							</a>
						</li>
					<?php } ?>
					</ul>
				</div>

			</div>
		</div>

		

  <?php //include('footer.php'); ?>
