<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<?php foreach ($reservation as $res) { ?>
<?php if($res->reservation_status == "PENDING"){$st = " ";}else{{$st = "disabled";}}?>
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
                                        <i class="fa fa-gears"></i>Reservation Action</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="<?= base_url() ?>Reservation/action/<?=$res->reservation_id?>" method="post"  class="form-horizontal" enctype="multipart/form-data">

                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event</label>
                                                <div class="col-md-4">
					                                <input type="text" class="form-control" id="reservationEvent" name="reservationEvent" style="display:none;" required value="<?=$res->reservation_event?>" />
					                                <input type="text" class="form-control" value="<?=$res->event_name?> - <?=$res->event_package?>" readonly />
                                                </div>
                                            </div>                                      
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event Location:</label>
                                                <div class="col-md-4">
					                                <input type="text" class="form-control" id="reservationLocation" name="reservationLocation" required value="<?=$res->reservation_location?>" readonly/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event Date:</label>
                                                <div class="col-md-4">
					                                <input type="text" class="form-control" id="reservationDate" name="reservationDate" required value="<?=$res->reservation_date?>" readonly />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event Time:</label>
                                                <div class="col-md-4">
					                                <input type="time" class="form-control" id="reservationTime" name="reservationTime" required value="<?=$res->reservation_time?>" readonly/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Proof of Payment: </label>
                                                <div class="col-md-4">
                                                    <img src="<?= base_url() ?>downpayment/<?=$res->reservation_dp ? $res->reservation_dp : "noreceipt.jpg"?>" alt="Payment" style="width:400px;height:600px;">
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Email of Reservee:</label>
                                                <div class="col-md-4">
                                                    <input type="email" class="form-control" id="to" name="to" value="<?=$res->reservation_email?>" placeholder="Receiver Email" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Request or Notes:</label>
                                                <div class="col-md-4">
					                                <input type="text" class="form-control" id="reservationNote" name="reservationNote" required value="<?=$res->reservation_note?>" readonly/>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status:</label>
                                                <div class="col-md-4">
                                                <?php if($res->reservation_status == "PENDING"){?>
                                                <select <?php echo $st?> class="form-control" id="department_id" id="reservationStatus" name="reservationStatus">
							                            <option value="REJECTED">REJECT</option>
							                            <option value="APPROVED">APPROVE</option>
					                            </select>
                                                <?php } else {?>
					                                <input type="text" <?php echo $st?> class="form-control" value="<?=$res->reservation_status?>"/>
                                                <?php }?>
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ramarks:</label>
                                                <div class="col-md-4">
					                                <input type="text" <?php echo $st?> class="form-control" id="reservationRemarks" name="reservationRemarks" required value="<?=$res->reservation_remarks?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green" <?php echo $st?>>Save</button>
                                                    <a href="<?= base_url() ?>reservation"><button type="button" class="btn default">Back</button></a>
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
