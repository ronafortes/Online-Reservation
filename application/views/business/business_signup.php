
    <!-- END HEAD -->

    <style>
    .page-header.navbar .page-top {
    height: 5px;
    float: left;
    padding-left: 15%;
    padding-top: 34px;
    }
    </style>
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a href="index.html"><img src="<?= base_url() ?>assets/layouts/layout4/img/logo-light.png" style="width: 200px;" alt="logo" class="logo-default" /> </a>
                 </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="portlet box blue-hoki">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-pencil-square-o"></i> Signup for Business Website </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?= base_url() ?>business/Signup" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Business Name:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" id="businessName" name="businessName" required value="" placeholder="Business Name"/>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Business Description:</label>
                                                            <div class="col-md-4">
					                                            <textarea type="text" class="form-control" id="businessDescription" name="businessDescription" required placeholder="Business Description"/></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Business Address:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" id="businessAddress" name="businessAddress" required value="" placeholder="Business Address"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Business Permit : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-upload"></i>
                                                                    </span>
                                                                    <input type="file"  accept="image/png, image/jpeg" class="form-control"  id="businessPermit" name="businessPermit"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Business Terms and Condition :</label>
                                                            <div class="col-md-4">
					                                            <textarea type="text" class="form-control" id="businessTerms" name="businessTerms" required placeholder="Business Terms and Condition"/></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>                                                       
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Owner's Name:</label>
                                                            <div class="col-md-2">
					                                            <input type="text" class="form-control" id="businessFirstName" name="businessFirstName" required value="" placeholder="First Name"/>
                                                            </div>                                                            
                                                            <div class="col-md-2">
					                                            <input type="text" class="form-control" id="businessLastName" name="businessLastName" required value="" placeholder="Last Name"/>
                                                            </div>   
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Valid ID : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-upload"></i>
                                                                    </span>
                                                                    <input type="file"  accept="image/png, image/jpeg" class="form-control"  id="businessID" name="businessID"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Email Address : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" class="form-control" placeholder="Email Address" id="businessEmail" name="businessEmail" required value=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Cellphone Number : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-phone"></i>
                                                                    </span>
                                                                    <input type="text" pattern="[0-9]{11}" class="form-control" placeholder="Cellphone Number" id="businessNo" name="businessNo" required value=""> 
                                                                </div>
                                                                <small>Format: 09*********</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-4">
					                                            <details>
                                                                  <summary>
                                                                   <input type="checkbox" name="terms" required onchange="changeWarningMessage()">
                                                                  I agree to the <span style="color:blue; cursor: pointer;">terms and conditions</span> <i class="fa fa-sort-down"></i> </summary>
                                                                  <?php foreach ($businessterms as $ven) { ?>
                                                                  <p><br><?=$ven->business_terms_condition?></p>
                                                                  <p class="form-control-static">Note: Your Business website application is going to be approved by our admin. Wait for an Email from <span style="color:blue;">onlinereservationph@gmail.com</span> for the status and instruction to finally set up your website! Thank you! </p>
                                                                  <?php } ?>
                                                                </details>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions top">
                                                        <div class="row">
                                                            <div class="col-md-offset-5 col-md-4">
                                                                <button type="submit" class="btn green">Submit</button>
                                                                <a href="<?= base_url() ?>"><button type="button" class="btn default">Cancel</button></a>
                                                            </div>
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
        </div>