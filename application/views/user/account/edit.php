<?php foreach ($account as $row) {?>
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
                                                    <i class="fa fa-user"></i>User Information</div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?= base_url() ?>user/account/<?=C_UID?>" method="post" class="form-horizontal" enctype="multipart/form-data">

                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">ID:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" readonly id="userID" name="userID" required value="<?=$row->employee_id?>" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Username:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" readonly id="userName" name="userName" required value="<?=$row->employee_username?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Firstname:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" id="userFirstname" name="userFirstname" required value="<?=$row->employee_firstname?>" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Lastname:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" class="form-control" id="userLastname" name="userLastname" required value="<?=$row->employee_lastname?>" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Cellphone Number:</label>
                                                            <div class="col-md-4">
					                                            <input type="text" pattern="[0-9]{11}" class="form-control" id="userNumber" name="userNumber" required value="<?=$row->employee_telephone?>" />
                                                                <small>Format: 09*********</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Email:</label>
                                                            <div class="col-md-4">
					                                            <input type="email" class="form-control" id="userEmail" name="userEmail" required value="<?=$row->employee_email?>" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Password: </label>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control" name="submit_form_password" id="submit_form_password" value="<?=$row->employee_password?>"/>
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye" id="togglePassword" onclick="myFunction()" title="Show Password" style="cursor: pointer;"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php if(isset($success)) {?>
                                                          <div id="mydivs" class="alert alert-success">
                                                            <button type="button" class="close" data-dismiss="alert">�</button>
                                                            <strong>Success!</strong> <?=$success?>
                                                          </div>
                                                    <?php } ?>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">Save</button>
                                                                <a href="<?= base_url() ?>"><button type="button" class="btn default">Back</button></a>
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

<script>
function myFunction() {
  var x = document.getElementById("submit_form_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
setTimeout(function() {
    $('#mydivs').hide('fast');
}, 3000);
</script>