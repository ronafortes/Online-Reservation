<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Online Reservation | Photography Business</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= base_url() ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?= base_url() ?>assets/pages/css/about.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= base_url() ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= base_url() ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                        <img src="<?= base_url() ?>assets/layouts/layout4/img/logo-light.png" style="width: 200px;" alt="logo" class="logo-default" /> </a>
                </div>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <li class="quick-sidebar-toggler" style="padding: 1px 1px 1px;">
                             <a href="<?= base_url() ?>Login"><button type="button" class="btn btn-danger">Sign In</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
                <div class="page-content">
                    <div class="row margin-bottom-40 about-header">
                        <div class="col-md-12">
                            <h1>Online Reservation for Photography Business</h1>
                            <h2>For Photography Businesses and Booking Online Aims easily bookable all kinds of life event services.<br> Let's capture love, joy, and everything in between.</h2>
                            <a href="<?= base_url() ?>Business/Signup"><button type="button" class="btn btn-danger">JOIN US TODAY!</button></a>
                        </div>
                    </div>
                    <div class="row margin-bottom-20">
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-user-follow font-red-sunglo theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Want to Join? </span>
                                </div>
                                <div class="card-desc">
                                    <span> Click the Join Us Today button to Sign up! </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-trophy font-green-haze theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Manage Your Own System </span>
                                </div>
                                <div class="card-desc">
                                    <span> A good choise to have a business website! </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-basket font-purple-wisteria theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Online Reservation </span>
                                </div>
                                <div class="card-desc">
                                    <span> Hastle free and paperless reservation </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-layers font-blue theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> A lot of function! </span>
                                </div>
                                <div class="card-desc">
                                    <span> An user friendly system and alot of function</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CARDS -->
                    <!-- BEGIN MEMBERS SUCCESS STORIES -->
                    <div class="row margin-bottom-40 stories-header" data-auto-height="true">
                        <div class="col-md-12">
                            <h1>List of Photography Businesses</h1>
                            <h2>Click the link to view their website!</h2>
                        </div>
                    </div>
                    <div class="row margin-bottom-20 stories-cont">
                    <?php if($business > 0)  { ?>
                        <?php foreach ($business as $bus) { ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="portlet light">
                                    <div class="photo">
                                        <img src="logo/<?=$bus->business_logo?> " alt="" class="img-responsive" /> </div>
                                    <div style="font-size: larger;font-weight: bolder;" class="title">
                                    <a href="<?= base_url() ?>Business/PH/<?=$bus->business_id?> "><?=$bus->business_name?></a>
                                    </div>
                                    <div class="desc" style="height: 300px;">
                                        <span style="font-size: xx-small;"><i style="font-size: large;" class="fa fa-facebook-square"></i> <a href="<?=$bus->business_facebook?>"> <?=$bus->business_facebook?></a> </span><br>
                                        <span><i class="fa fa-map"></i> <?=$bus->business_address?> </span>
                                        <hr>
                                        <span> <p style="font-size: x-small;"><?=$bus->business_description?> </p></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
                  <p>Copyright &copy; Online Reservation | CI Version <?= CI_VERSION ?> - <?= date('Y') ?></p>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= base_url() ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>