<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<?php foreach ($customer as $cus) { ?>
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <!-- BEGIN PAGE BASE CONTENT -->
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                        <div class="tab-pane active">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-image"></i>Edit Customer</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="<?= base_url() ?>customer/edit/<?=$cus->employee_id?>" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">UserName:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" readonly id="userName" name="userName" required value="<?=$cus->employee_username?>" placeholder="Business Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">FullName:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" readonly id="userName" name="userName" required value="<?=$cus->employee_lastname?>, <?=$cus->employee_firstname?>" placeholder="Business Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Email:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" readonly id="userName" name="userName" required value="<?=$cus->employee_email?>" placeholder="Business Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status:</label>
                                                    <div class="col-md-4">
                                                    <select class="form-control" id="customerStatus" name="customerStatus">
							                                <option value="Active" <?php if($cus->employee_status=="Active") echo 'selected="selected"'; ?> >Active</option>
							                                <option value="Inactive" <?php if($cus->employee_status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
					                                </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Save</button>
                                                    <a href="<?= base_url() ?>customer"><button type="button" class="btn default">Back</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </div>
</div>
<?php } ?>

<script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
