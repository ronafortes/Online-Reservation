
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

                <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-users"></i>Account List <a href="<?= base_url() ?>executive/accountadd" class="btn btn-small btn-danger"><i class="fa fa-plus"></i></a></div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th hidden> ID</th>
                                                <th> Business ID </th>
                                                <th> Username </th>
                                                <th> Fullname </th>
                                                <th> Contact </th>
                                                <th> Email </th>
                                                <th> Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($Account > 0) { ?>
				                                <?php foreach ($Account as $res) { ?>
				                                    <tr>
                                                    <td> <a href="<?= base_url() ?>executive/accountedit/<?=$res->employee_id?> " class="btn btn-small btn-primary"><i class="fa-spin fa fa-cog"> </i></a></td>
				                                    <td hidden> <?=$res->employee_id?> </td>
				                                    <td> <?=$res->employee_business?> </td>
				                                    <td> <?=$res->employee_username?> </td>
				                                    <td> <?=$res->employee_lastname?>, <?=$res->employee_firstname?> </td>
				                                    <td> <?=$res->employee_telephone?> </td>
				                                    <td> <?=$res->employee_email?> </td>
				                                    <td> <?=$res->employee_status?> </td>
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
