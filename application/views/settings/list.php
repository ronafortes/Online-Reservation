
<?php foreach ($business as $row) {?>
            <div class="page-content-wrapper" style="position:relative; z-index:-1;">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
					<div class="col-md-12" style=" padding-right: 2%; padding-left: 2%;">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption"> <i class="fa fa-gears"></i>Business Info  </div>
                                    <div class="actions">
                                        <a href="<?= base_url() ?>settings/edit/<?=$row->business_id?>" class="btn btn-default btn-sm">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
									<div class="portlet-body form">	
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <center><h3 class="form-section" style="font-family: fantasy"><?=$row->business_name?> - <?=$row->business_id?></h3></center>
                                                        <!--/row--><hr>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Logo:</label>
                                                                    <div class="col-md-9">
                                                                        <img src="logo/<?=$row->business_logo?>" alt="Business" style="width:200px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                         
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Gcash Name:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_gcash_name?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Gcash Number:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_gcash?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Open Time:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_open_time?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Close Time:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_close_time?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Number:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_number?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Email:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_email?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Address:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_address?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business FB:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_facebook?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Description:</label>
                                                                    <div class="col-md-9">
                                                                        <p style="text-align: justify;" class="form-control-static"> <b><?=$row->business_description?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->                                                            
                                                            <div class="col-md-12">
                                                            <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Terms and Conditions:</label>
                                                                    <div class="col-md-9">
                                                                        <p style="text-align: justify;" class="form-control-static"> <b><?=$row->business_terms_condition?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Business Maps:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> <b><?=$row->business_maps?></b> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
									</div>
                                </div>
                            </div>
                            <!-- END Portlet PORTLET-->
                        </div>
                        <div class="col-md-4 ">
					</div>
				</div>
			</div>
<?php } ?>
