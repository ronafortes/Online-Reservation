
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

                <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-users"></i> Business List </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th hidden> ID</th>
                                                <th> Business Name </th>
                                                <th> Location </th>
                                                <th> Owner </th>
                                                <th> Email </th>
                                                <th> Contact </th>
                                                <th> Status </th>
                                                <th> Application Date </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($Business > 0) { ?>
				                                <?php foreach ($Business as $res) { ?>
				                                    <tr>
                                                    <td> <a href="<?= base_url() ?>executive/action/<?=$res->business_id?> " class="btn btn-small btn-primary"><i class="fa-spin fa fa-cog"> </i></a></td>
				                                    <td hidden> <?=$res->business_id?> </td>
				                                    <td> <?=$res->business_name?> </td>
				                                    <td> <?=$res->business_address?> </td>
				                                    <td> <?=$res->business_owner?> </td>
				                                    <td> <?=$res->business_email?> </td>
				                                    <td> <?=$res->business_number?> </td>
				                                    <td> <?php if($res->business_status == 4){echo "Active";}?><?php if($res->business_status == 2){echo "Pending";}?><?php if($res->business_status == 3){echo "Inactive";}?></td>
				                                    <td> <?=$res->created_date?> </td>
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
