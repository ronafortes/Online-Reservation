<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<?php foreach ($gallery as $gal) { ?>
<?php if($gal->gallery_status == "PENDING"){$st = " ";}else{{$st = "disabled";}}?>
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
                                        <i class="fa fa-image"></i>Edit Gallery Image</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="<?= base_url() ?>gallery/edit/<?=$gal->gallery_id?>" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Image: </label>
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-upload"></i>
                                                            </span>
                                                            <input type="file" accept="image/png, image/jpeg" class="form-control"  id="galleryImage" name="galleryImage"> 
                                                        </div>
                                                          <img src="<?= base_url() ?>gallerys/<?=$gal->gallery_image ? $gal->gallery_image : "noimage.png"?>" style="width:500px;height:600px;">
                                                          <input hidden style="display:none" name="galleryOldImage" id="galleryOldImage" value="<?=$gal->gallery_image?>"><?=$gal->gallery_image ? "Current Image: ".$gal->gallery_image : "No Image"?><br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-3 control-label">Description:</label>
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" id="galleryDescription" name="galleryDescription" required placeholder="Description" rows="4"><?=$gal->gallery_description?></textarea>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status:</label>
                                                    <div class="col-md-4">
                                                    <select class="form-control" id="galleryStatus" name="galleryStatus">
							                                <option value="Active" <?php if($gal->gallery_status=="Active") echo 'selected="selected"'; ?> >Active</option>
							                                <option value="Inactive" <?php if($gal->gallery_status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
					                                </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Save</button>
                                                    <a href="<?= base_url() ?>gallery"><button type="button" class="btn default">Back</button></a>
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
