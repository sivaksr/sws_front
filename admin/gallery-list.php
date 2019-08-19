<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Gallery</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
							<h4>Gallery List <span ><a style="position:absolute;right:10px;" href="add-gallery.php" class="btn btn-primary btn-sm ">Add Gallery</a></span></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Gallery  Images</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                         
                                            <td><img style="width:60px;" src="img/banner0.png"></td>
                                          
                                            <td>
                                               
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" data-original-title="Delete"><i class="ion ion-trash-b"></i></a>
                                            </td>
                                        </tr>
										 <tr>
                                            <td>2</td>

                                            <td><img style="width:60px;" src="img/banner0.png"></td>
                                         
                                            <td>
                                               
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" data-original-title="Delete"><i class="ion ion-trash-b"></i></a>
                                            </td>
                                        </tr>
                                        
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

<?php include("footer.php"); ?>