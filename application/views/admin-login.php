<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>SV Fresh</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">
</head>

<body style="background-image: url(<?php echo base_url();?>assets/admin/img/login.jpg);background-size: cover;">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="text-white text-center">
                           <img style="width:100px; margin:0 auto;" src="<?php echo base_url();?>assets/admin/img/logo.png" class="form-control">
                        </div>

                        <div class="card card-primary">
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
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body" >
                                <form  method="post" >
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" value="<?php echo $this->input->post('email');?>" id="email_id" name="email" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="d-block">Password</label>
                                        <input type="password" value="<?php echo $this->input->post('pwd');?>" id="password" name="pwd" class="form-control" required>
                                    </div>

                                   <!-- <div class="form-group mb-5">
                                        <div class="float-right">
                                            <a href="forgot.php">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>-->

                                    <div class="form-group">
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
                                    </div>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrapValidator.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function() {

        $('#loginForm').bootstrapValidator({
            fields: {
                email_id: {
                   validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        regexp: {
                        regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                        message: 'Please enter a valid email address. For example johndoe@domain.com.'
                        }
                    }
                },
                password: {
                   validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                        regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message:'Password wont allow <> [] = % '
                        }
                    }
                }
            }
        });
    });
    </script>   
    
</body>

</html>