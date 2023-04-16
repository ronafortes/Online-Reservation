
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
                                                    <i class="fa fa-gears"></i>Edit Business Informations</div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?= base_url() ?>executive/Action/<?=$business->business_id?>" method="post" class="form-horizontal" enctype="multipart/form-data">

                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Name:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" readonly id="businessName" name="businessName" required value="<?=$business->business_name?>" placeholder="Business Name"/>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Owner:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" readonly id="businessOwner" name="businessOwner" required value="<?=$business->business_owner?>" placeholder="Business Owner"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Open Time:</label>
                                                            <div class="col-md-4">
					                                            <input type="time" class="form-control" readonly id="businessOpen" name="businessOpen" required value="<?=$business->business_open_time?>" placeholder="Business Open Time"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Close Time:</label>
                                                            <div class="col-md-4">
					                                            <input type="time" class="form-control" readonly  id="businessClose" name="businessClose" required value="<?=$business->business_close_time?>" placeholder="Business Close Time"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Address:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" readonly id="businessAddress" name="businessAddress" required value="<?=$business->business_address?>" placeholder="Business Address"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Maps:</label>
                                                            <div class="col-md-4">
					                                            <textarea type="text" class="form-control" readonly id="businessMaps" name="businessMaps" required placeholder="Business Maps"/><?=$business->business_maps?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Description:</label>
                                                            <div class="col-md-4">
					                                            <textarea type="text" class="form-control" readonly id="businessDescription" name="businessDescription" required placeholder="Business Description"/><?=$business->business_description?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business FB : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Business FB" readonly id="businessFB" name="businessFB" required value="<?=$business->business_facebook?>"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"> Business Email Address : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" class="form-control" placeholder="Email Address" readonly id="businessEmail" name="businessEmail" required value="<?=$business->business_email?>"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Terms and Condition:</label>
                                                            <div class="col-md-4">
					                                            <textarea type="text" class="form-control" readonly id="businessTerms" name="businessTerms" required placeholder="Business Term and Condition"/><?=$business->business_terms_condition?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Cellphone Number : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-phone"></i>
                                                                    </span>
                                                                    <input type="text" pattern="[0-9]{11}" class="form-control" placeholder="Cellphone Number" readonly id="businessNo" name="businessNo" required value="<?=$business->business_number?>"> 
                                                                </div>
                                                                <small>Format: 09*********</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Owner's Valid ID' : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <img src="<?= base_url() ?>validid/<?=$business->business_owner_id?>" alt="Business" style="width:500px;height:500px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business Permit : </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <img src="<?= base_url() ?>permit/<?=$business->business_permit?>" alt="Business" style="width:500px;height:500px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            </div>
                                                        </div>
                                                    <div class="form-group">
                                                    <label class="col-md-3 control-label"> Status:</label>
                                                    <div class="col-md-4">
                                                    <select class="form-control" id="businessStatus" name="businessStatus">
							                                <option value="4" <?php if($business->business_status == "4") echo 'selected="selected"'; ?> >Active</option>
							                                <option value="2" <?php if($business->business_status == "2") echo 'selected="selected"'; ?> >Pending</option>
							                                <option value="3" <?php if($business->business_status == "3") echo 'selected="selected"'; ?> >Inactive</option>
					                                </select>
                                                    </div>
                                                </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">Save</button>
                                                                <a href="<?= base_url() ?>executive/business"><button type="button" class="btn default">Back</button></a>
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
		
	