
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

                <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-image"></i> Business Gallery <a href="<?= base_url() ?>gallery/add" class="btn btn-small btn-danger"><i class="fa fa-plus"></i></a></div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th hidden> ID</th>
                                                <th>Image </th>
                                                <th>Description </th>
                                                <th>Status </th>
                                                <th> Edit </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($gallery > 0) { ?>
				                                <?php foreach ($gallery as $gal) { ?>
				                                          <tr>
				                                            <td hidden> <?=$gal->gallery_id?> </td>
				                                            <td style="text-align-last: center;"><img src="<?= base_url() ?>gallerys/<?=$gal->gallery_image ? $gal->gallery_image : "noimage.png"?>" style="width:250px;height:400px;"></td>
				                                            <td> <?=$gal->gallery_description?> </td>
				                                            <td> <?=$gal->gallery_status?> </td>
                                                            <td> <a href="<?= base_url() ?>gallery/edit/<?=$gal->gallery_id?> " class="btn btn-small btn-primary"><i class="fa fa-edit"> </i></a></td>
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
