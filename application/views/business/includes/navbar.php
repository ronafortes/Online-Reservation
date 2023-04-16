<style>
/* Add a black background color to the top navigation */
.topnav {
  padding-left: 25%;
  overflow: hidden;
  padding-top: 15px;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #6d0000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #af1313;
  color: white;
}

</style>

        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a><img src="<?= base_url() ?>assets/layouts/layout4/img/logo-light.png" style="width: 200px;" alt="logo" class="logo-default" /> </a>
                 </div>
                 <a style= "float: right; padding-top: 2%; padding-right: 2%;" href="<?= base_url() ?>user"><button type="button" class="btn btn-danger">Login</button></a>
                 <a style= "float: right; padding-top: 2%; padding-right: 2%;" href="<?= base_url() ?>user/Signup/<?=$business_id?>"><button type="button" class="btn btn-danger">SignUp</button></a>
                <!-- END PAGE TOP -->
                <div class="topnav">
                  <a <?php if($page == "home"){ echo 'class="active"'; } ?> href="../PH/<?=$business_id?>">Home</a>
                  <a <?php if($page == "package"){ echo 'class="active"'; } ?> href="../package/<?=$business_id?>">Packages</a>
                  <a <?php if($page == "gallery"){ echo 'class="active"'; } ?> href="../gallery/<?=$business_id?>">Gallery</a>
                </div>
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

