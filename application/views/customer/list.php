
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

                <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-users"></i> Customer List </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th> Fullname</th>
                                                <th> Username </th>
                                                <th> Contact Number </th>
                                                <th> Email </th>
                                                <th> Created Date </th>
                                                <th> Status </th>
                                                <th> Edit </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($customer > 0) { ?>
				                                <?php foreach ($customer as $cus) { ?>
				                                          <tr>
				                                            <td> <?=$cus->employee_lastname?>, <?=$cus->employee_firstname?> </td>
				                                            <td> <?=$cus->employee_username?></td>
				                                            <td> <?=$cus->employee_telephone?> </td>
				                                            <td> <?=$cus->employee_email?> </td>
				                                            <td> <?=$cus->employee_date?> </td>
				                                            <td> <?=$cus->employee_status?> </td>
                                                            <td> <a href="<?= base_url() ?>customer/edit/<?=$cus->employee_id?> " class="btn btn-small btn-primary"><i class="fa fa-edit"> </i></a></td>
				                                          </tr>
				                                <?php } ?>
				                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
