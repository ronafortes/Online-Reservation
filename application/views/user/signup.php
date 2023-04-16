<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker4.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <!-- BEGIN PAGE BASE CONTENT -->
            <div class="col-md-12">
            </br></br></br>
                <div class="tabbable-line boxless tabbable-reversed">
                        <div class="tab-pane active">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-image"></i>Sign Up</div>
                                </div>
                                <div class="portlet-body form">
                                    <?php $url = $_SERVER['REQUEST_URI']; $path = parse_url($url, PHP_URL_PATH); $id = basename($path);?>
                                    <form action="<?= base_url() ?>user/signup/<?php echo $id ?>" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="First Name"/>
                                                    </div>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Last Name"/>
                                                    </div>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="userName" name="userName" required placeholder="User Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="userPassword" minlength="8" name="userPassword" required placeholder="Password"/>
                                                        <small style="color:red"><small>Note: Password must atleast 8 letters.</small></small>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="userEmail" name="userEmail" required placeholder="Email"/>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-5 col-md-9">
                                                    <button type="submit" class="btn green">Save</button>
                                                    <a href="<?= base_url() ?>user"><button type="button" class="btn default">Back</button></a>
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
<script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
