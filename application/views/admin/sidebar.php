<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img style="width:60px;" class="img-fluid" src="<?php echo base_url();?>assets/admin/img/logo.png">
        </div>
        <div class="sidebar-user">
        
            <div class="sidebar-user-details">
                <div class="user-name">SVS CHAMPION KIDS SCHOOL</div>
                <div class="user-role">
                    Admin
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
           
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-pricetags"></i><span>Sliders</span></a>
                <ul class="menu-dropdown">
                    <li <?php if($this->uri->segment(3) == 'slider-list' ){?> class="active" <?php } ?>zzzzzz><a href="<?php echo base_url();?>admin/add-slider"><i class="ion ion-ios-circle-outline"></i>Add Slider</a></li>
                    <li><a href="<?php echo base_url();?>admin/slider-list"><i class="ion ion-ios-circle-outline"></i>Sliders List</a></li>
                </ul>
            </li> 
			<li>
                <a href="#" class="has-dropdown"><i class="ion ion-pricetags"></i><span>Gallery</span></a>
                <ul class="menu-dropdown">
                    <li><a href="<?php echo base_url();?>admin/add-gallery"><i class="ion ion-ios-circle-outline"></i>Add Images</a></li>
                    <li><a href="<?php echo base_url();?>admin/gallery-list"><i class="ion ion-ios-circle-outline"></i>Gallery List</a></li>
                </ul>
            </li>
            
        </ul>
    </aside>
</div>