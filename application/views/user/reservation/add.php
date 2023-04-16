<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

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
                                        <i class="fa fa-gears"></i> Reservation</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="<?= base_url() ?>user/add/" method="post" class="form-horizontal" enctype="multipart/form-data">

                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event:</label>
                                                <div class="col-md-4">
                                                <select class="form-control" id="department_id" id="reservationEvent" name="reservationEvent">
					                            <?php foreach ($event as $ven) { ?>
							                            <option value="<?=$ven->event_id?>"><?=$ven->event_name?> - <?=$ven->event_package?> | DP : &#8369;<?=$ven->event_dp?></option>
							                    <?php } ?>
					                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Proof of Payment: </label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-upload"></i>
                                                        </span>
                                                        <input type="file" required accept="image/png, image/jpeg" class="form-control"  id="reservationDP" name="reservationDP"> 
                                                    </div>
                                                        <small style="color:red"><small>Note: Please upload your proof of payment here.</small></small>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event Location:</label>
                                                <div class="col-md-4">
					                                <input type="text" class="form-control" id="reservationLocation" name="reservationLocation" required value="" placeholder="Event Location"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event Time:</label>
                                                <div class="col-md-4">
					                                <input type="time" class="form-control" id="reservationTime" name="reservationTime" required value="" placeholder="Event Location"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="control-label col-md-3">Event Date:</label>
                                            <div class="col-md-4">
                                                    <input data-date-start-date="+7d" readonly type="text" class="form-control" id="reservationDate" required name="reservationDate">
                                                <small style="color:red"><small>Note: Reservation date must atleast 1week before.</small></small>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Email:</label>
                                                <div class="col-md-4">
					                                <input type="email" class="form-control" id="reservationEmail" name="reservationEmail" required value="" placeholder="Reservation Email"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Request or Notes:</label>
                                                <div class="col-md-4">
					                                <input type="text" class="form-control" id="reservationNote" name="reservationNote" required value="" placeholder="Request or Notes"/>
                                                <small style="color:red"><small>Note: Type "N/A" if not applicable.</small></small>
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
                                                      <?php } ?>
                                                    </details>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Save</button>
                                                    <a href="<?= base_url() ?>user/reservation"><button type="button" class="btn default">Back</button></a>
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

<script>
function changeWarningMessage() {
    document.getElementById("terms").placeholder = "You must agree to the terms and conditions before continuing";
}
</script>

<script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        var datesForDisable = [<?php if($reserveDate > 0) { foreach($reserveDate as $row){echo '"' . $row->reservation_date . '",';} } else{ echo "00-00-0000";} ?>] 
        $('#reservationDate').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            datesDisabled: datesForDisable
        });
    </script>