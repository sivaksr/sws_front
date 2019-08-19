<?php //include("header.php"); ?>
<?php //include("sidebar.php"); ?>

<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Slider</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
							<h4>Slider List <span ><a style="position:absolute;right:10px;" href="<?php echo base_url();?>admin/add-slider" class="btn btn-primary btn-sm ">Add Slider</a></span></h4>
                        </div>
                        <div class="card-body">
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
                            <div class="table-responsive">
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Slider Text</th>
                                            <th>Banner  Images</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $i=1; foreach($record as $key => $row){ 
                                    ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row['banner_title'];?></td>
                                            <td><img style="width:60px;" src="<?php echo base_url();?>images/banners/<?php echo $row['banner']; ?>"></td>
                                            <td>
											<div><a  onclick="return confirm('Are you sure want to Chanage the Status?');" href="<?php echo base_url();?>admin/status/<?php echo $row['id']?>/<?php echo $row['status'];?>" ><span <?php if($row['status']== 1){ echo " class='badge badge-success'"; } elseif($row['status']== 0){ echo "class='badge badge-danger'"; } ?>><?php if($row['status']== 1){ echo "Active"; } elseif($row['status']== 0){ echo "Deactive"; } ?></span></a></div>

                                                <!--<div class="badge badge-success">Active</div>-->
                                            </td>
											
                                            <td>
											
                                                <a  href="<?php echo base_url();?>admin/edit-slider/<?php echo $row['id'];?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" data-original-title="Edit"><i class="ion ion-edit"></i></a>
                                                <a onclick="return confirm('Are you sure you want to Remove?');" href="<?php echo base_url();?>Addslider/delete/<?php echo $row['id'];?>" class="btn btn-danger btn-action" data-toggle="tooltip" data-original-title="Delete"><i class="ion ion-trash-b"></i></a>
                                            </td>
                                        </tr>
										
									<?php $i++; } ?>
										
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php //include("footer.php"); ?>