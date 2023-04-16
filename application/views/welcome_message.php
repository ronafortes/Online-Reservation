
            <div class="page-content-wrapper" style="position:relative; z-index:-1;">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="<?=$rescountall?>">0</span>
                                            <small class="font-green-sharp"></small>
                                        </h3>
                                        <small>All Reservation</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="<?=$rescount?>"></span>
                                        </h3>
                                        <small>Pending Reservation</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> grow </div>
                                        <div class="status-number"> 45% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="<?=$cuscount?>"></span>
                                        </h3>
                                        <small>Customer Account</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 57% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption caption-md">
                                        <i class="icon-bar-chart font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Customer Reservation</span>
                                        <span class="caption-helper"><?=$rescount?> pending</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                    
                                    
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />


                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th hidden> ID</th>
                                                <th> Reservee </th>
                                                <th> Event - Package </th>
                                                <th> Location </th>
                                                <th> Date of Reservation </th>
                                                <th> Time </th>
                                                <th> Email </th>
                                                <th> Note </th>
                                                <th> DP</th>
                                                <th> Status </th>
                                                <th> Remark </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($reservation > 0) { ?>
				                                <?php foreach ($reservation as $res) { ?>
				                                    <?php if ($res->reservation_status == "REJECTED") { $label = "danger"; } elseif ($res->reservation_status == "APPROVED") {$label = "success";} else {$label = "warning";}?>
				                                          <tr>
                                                            <td> <a href="<?= base_url() ?>reservation/action/<?=$res->reservation_id?> " class="btn btn-small btn-primary"><i class="fa-spin fa fa-cog"> </i></a></td>
				                                            <td hidden> <?=$res->reservation_id?> </td>
				                                            <td> <?=$res->employee_firstname?> <?=$res->employee_lastname?> </td>
				                                            <td> <?=$res->event_name?> - <?=$res->event_package?> </td>
				                                            <td> <?=$res->reservation_location?> </td>
				                                            <td> <?=$res->reservation_date?> </td>
				                                            <td> <?=$res->reservation_time?> </td>
				                                            <td> <?=$res->reservation_email?> </td>
				                                            <td> <?=$res->reservation_note?> </td>
				                                            <td style="text-align-last: center;"><img src="<?= base_url() ?>downpayment/<?=$res->reservation_dp ? $res->reservation_dp : "noimage.png"?>" style="width:60px;height:60px;"></td>
				                                            <td> <span class="label label-sm label-<?php echo $label?> "> <?=$res->reservation_status?> </span></td>
				                                            <td> <?=$res->reservation_remarks?> </td>
				                                          </tr>
				                                <?php } ?>
				                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

        <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
