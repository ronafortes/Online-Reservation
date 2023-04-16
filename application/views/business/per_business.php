<?php if($business > 0)  { ?>
<?php foreach ($business as $bus) {?>
    <!-- END HEAD -->

    <style>
    .page-header.navbar .page-top {
    height: 5px;
    float: left;
    padding-left: 15%;
    padding-top: 34px;
    }

    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    .active {
    background-color: #fdfdfd;}

    label {
    font-size: xx-large;
    font-style: oblique;
    font-weight: 600;
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">

                                            <div class="slideshow-container">
                                            <?php if($image > 0)  { ?>
                                            <?php foreach ($image as $row) {?>
                                            <div class="mySlides fade">
                                              <div class="numbertext"></div>
                                              <img src="<?= base_url() ?>gallerys/<?=$row->gallery_image?>" style="width:100%;height:300px;">
                                              <div class="text"><?=$row->gallery_description?></div>
                                            </div>
                                            <?php }?>
                                            <?php }?>
                                            </div>
                                            <br>

                                            <div style="text-align:center">
                                            <?php if($image > 0)  { ?>
                                            <?php foreach ($image as $row) {?>
                                              <span class="dot"></span> 
                                            <?php }?>
                                            <?php }?>
                                            </div>

                                        <div class="col-md-12" style="text-align: -webkit-center;"><label class="page-header-text"><?=$bus->business_name?></label></div></br></br>
                                        <label class="page-header-sm-text" style="font-weight:normal; font-style: normal; font-size: large;padding: 2%;"> <?=$bus->business_description?></label>
                                        <br>
                                        <div class="col-md-12" style="text-align: -webkit-center;"><label class="page-header-text">Come and Visit Us!</label></div></br></br>
                                        <div class="col-md-12" style="text-align-last: center;"><?=$bus->business_maps?></div>
                                        </div>
                                    <div class="tab-pane" id="tab_1">
                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Form Sample </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="#" class="form-horizontal">
                                                    <div class="form-body">
                                                        <h3 class="form-section">Person Info</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First Name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="Chee Kin">
                                                                        <span class="help-block"> This is inline help </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group has-error">
                                                                    <label class="control-label col-md-3">Last Name</label>
                                                                    <div class="col-md-9">
                                                                        <select name="foo" class="form-control">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="1">Option 2</option>
                                                                            <option value="1">Option 3</option>
                                                                        </select>
                                                                        <span class="help-block"> This field has error. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control">
                                                                            <option value="">Male</option>
                                                                            <option value="">Female</option>
                                                                        </select>
                                                                        <span class="help-block"> Select your gender. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Date of Birth</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Category</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                            <option value="Category 1">Category 1</option>
                                                                            <option value="Category 2">Category 2</option>
                                                                            <option value="Category 3">Category 5</option>
                                                                            <option value="Category 4">Category 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Membership</label>
                                                                    <div class="col-md-9">
                                                                        <div class="radio-list">
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <h3 class="form-section">Address</h3>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address 1</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address 2</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">State</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Post Code</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Country</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control">
                                                                            <option>Country 1</option>
                                                                            <option>Country 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">Submit</button>
                                                                        <button type="button" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Form Sample </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="#" class="form-horizontal">
                                                    <div class="form-body">
                                                        <h3 class="form-section">Person Info</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First Name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="Chee Kin">
                                                                        <span class="help-block"> This is inline help </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group has-error">
                                                                    <label class="control-label col-md-3">Last Name</label>
                                                                    <div class="col-md-9">
                                                                        <select name="foo" class="form-control">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="1">Option 2</option>
                                                                            <option value="1">Option 3</option>
                                                                        </select>
                                                                        <span class="help-block"> This field has error. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control">
                                                                            <option value="">Male</option>
                                                                            <option value="">Female</option>
                                                                        </select>
                                                                        <span class="help-block"> Select your gender. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Date of Birth</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Category</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                            <option value="Category 1">Category 1</option>
                                                                            <option value="Category 2">Category 2</option>
                                                                            <option value="Category 3">Category 5</option>
                                                                            <option value="Category 4">Category 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Membership</label>
                                                                    <div class="col-md-9">
                                                                        <div class="radio-list">
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <h3 class="form-section">Address</h3>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address 1</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address 2</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">State</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Post Code</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"> </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Country</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control">
                                                                            <option>Country 1</option>
                                                                            <option>Country 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">Submit</button>
                                                                        <button type="button" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Form Sample </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
                                                        <h3 class="form-section">Person Info</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First Name:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Bob </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Last Name:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Nilson </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Male </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Date of Birth:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> 20.01.1984 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Category:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Category1 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Membership:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Free </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <h3 class="form-section">Address</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> #24 Sun Park Avenue, Rolton Str </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> New York </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">State:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> New York </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Post Code:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> 457890 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Country:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> USA </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">
                                                                            <i class="fa fa-pencil"></i> Edit</button>
                                                                        <button type="button" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            <!-- END CONTENT -->
        </div>
<?php }?>
<?php }?>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>