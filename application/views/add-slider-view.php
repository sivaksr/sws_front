<?php //include("header.php"); ?>
<?php //include("sidebar.php"); ?>

<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Sliders </div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Slider <span ><a style="position:absolute;right:10px;" href="<?php echo base_url();?>admin/slider-list" class="btn btn-primary btn-sm ">Sliders List</a></span></h4>
                        </div>
                        <div class="card-body">
						
                            <div class="row mx-auto">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form method="post" id="add_category" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Slider Text</label>
                                            <input id="name" type="text" class="form-control" name="slide_test" required>
                                        </div>
                                        <div class="form-group">
                                            <label> Upload Banner <span style="color:red">(1600px width and  height 575px)</span></label>
                                            <input id="image" type="file" class="form-control" name="image" required>
                                        </div>
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">
                                            Add
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php //include("footer.php"); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#add_category').bootstrapValidator({
        
        fields: {
             name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Question wont allow <> [] = % '
					}
				}
            },
            image: {
                validators: {
					notEmpty: {
						message: 'Image is required'
					},
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
            }
        })
     
});

</script>
