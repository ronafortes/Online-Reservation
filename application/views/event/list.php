
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

                <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Event Promo / Packages <a href="<?= base_url() ?>event/add" class="btn btn-small btn-danger"><i class="fa fa-plus"></i></a></div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th hidden> ID</th>
                                                <th> Event </th>
                                                <th> Package Name </th>
                                                <th> Event Price </th>
                                                <th> Required DP </th>
                                                <th> Event Image </th>
                                                <th> Event Description </th>
                                                <th> Event Status </th>
                                                <th> Edit </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($event > 0) { ?>
				                                <?php foreach ($event as $eve) { ?>
				                                          <tr>
				                                            <td hidden> <?=$eve->event_id?> </td>
				                                            <td> <?=$eve->event_name?> </td>
				                                            <td> <?=$eve->event_package?> </td>
				                                            <td> &#8369; <?=$eve->event_price?> </td>
				                                            <td> &#8369; <?=$eve->event_dp?> </td>
				                                            <td style="text-align-last: center;"><img src="<?= base_url() ?>events/<?=$eve->event_image ? $eve->event_image : "noimage.png"?>" style="width:60px;height:60px;"></td>
				                                            <td> <?=$eve->event_description?> </td>
				                                            <td> <?=$eve->event_status?> </td>
                                                            <td> <a href="<?= base_url() ?>event/edit/<?=$eve->event_id?> " class="btn btn-small btn-primary"><i class="fa fa-edit"> </i></a></td>
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
