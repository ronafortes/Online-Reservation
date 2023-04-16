<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<?php foreach ($event as $eve) { ?>
<?php if($eve->event_status == "PENDING"){$st = " ";}else{{$st = "disabled";}}?>
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
                                        <i class="fa fa-gears"></i>Edit Event Promo / Packages</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="<?= base_url() ?>Event/edit/<?=$eve->event_id?>" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                                <div class="form-group">
                                                        <label class="col-md-3 control-label">Event:</label>
                                                        <div class="col-md-4">
					                                        <input type="text" class="form-control" id="eventName" name="eventName" required value="<?=$eve->event_name?>" placeholder="Event"/>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-3 control-label">Promo/Package Name:</label>
                                                        <div class="col-md-4">
					                                        <input type="text" class="form-control" id="eventPackage" name="eventPackage" required value="<?=$eve->event_package?>" placeholder="Promo Name"/>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-3 control-label">Price:</label>
                                                        <div class="col-md-4">
					                                        <input type="number" class="form-control" id="eventPrice" name="eventPrice" required value="<?=$eve->event_price?>" placeholder="Price"/>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Required Downpayment:</label>
                                                    <div class="col-md-4">
					                                    <input type="number" class="form-control" id="eventDP" name="eventDP" required value="" placeholder="Required Downpayment"/>
                                                    </div>
                                            </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Promo Picture: </label>
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-upload"></i>
                                                            </span>
                                                            <input type="file" accept="image/png, image/jpeg" class="form-control"  id="eventImage" name="eventImage"> 
                                                        </div>
                                                          <input hidden style="display:none" name="eventOldImage" id="eventOldImage" value="<?=$eve->event_image?>"><?=$eve->event_image ? "Current Logo: ".$eve->event_image : "No Current Logo"?><br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-3 control-label">Event Description:</label>
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" id="eventDescription" name="eventDescription" required placeholder="Description" rows="4"><?=$eve->event_description?></textarea>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status:</label>
                                                    <div class="col-md-4">
                                                    <select class="form-control" id="eventStatus" name="eventStatus">
							                                <option value="Active" <?php if($eve->event_status=="Active") echo 'selected="selected"'; ?> >Active</option>
							                                <option value="Inactive" <?php if($eve->event_status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
					                                </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Save</button>
                                                    <a href="<?= base_url() ?>event"><button type="button" class="btn default">Back</button></a>
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
