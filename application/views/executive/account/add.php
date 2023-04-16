
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
                                        <i class="fa fa-image"></i>Add Admin User</div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="<?= base_url() ?>executive/accountadd" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Business Name:</label>
                                                <div class="col-md-4">
                                                <select class="form-control" id="business" id="business" name="business">
					                            <?php foreach ($Business as $bus) { ?>
							                            <option value="<?=$bus->business_id?>"><?=$bus->business_name?></option>
							                    <?php } ?>
					                            </select>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">First Name:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="Fisrt Name"/>
                                                    </div>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Lastname:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Last Name"/>
                                                    </div>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Username:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="userName" name="userName" required placeholder="User Name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Password:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" minlength="8" id="userPassword" name="userPassword" required placeholder="Password"/>
                                                    <small style="color:red"><small>Note: Password must atleast 8 letters.</small></small>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Email:</label>
                                                    <div class="col-md-4">
					                                    <input type="text" class="form-control" id="userEmail" name="userEmail" required placeholder="Email"/>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Save</button>
                                                    <a href="<?= base_url() ?>executive/account"><button type="button" class="btn default">Back</button></a>
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
		
	