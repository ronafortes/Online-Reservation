<!DOCTYPE html>
<html>
  <head>
    <title><?= !empty($title) ? $title:""?><?= APP_NAME ?> | Photography Services</title>
    <meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
  <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
  <link href="<?= base_url() ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

  <style type="">
    .page-header-fixed .page-container {
    margin-top: 50px;
  }
  .page-sidebar{
    position: fixed;
  }
  a.dt-button:last-child, button.dt-button:last-child, div.dt-button:last-child {
    display: none;
}
  </style>
  </head>

    <?php if(E_UID){?>
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/pages/img/login/logo-light.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> <?=E_FULLNAME?> (<?=E_USERNAME?>) | <?=E_BUSINESS_NAME?> | <?=E_EMPLOYEE_TYPE?></span>
                                    <img alt="" class="img-circle" src="<?= base_url() ?>assets/layouts/layout4/img/avatar.png" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?= base_url() ?>executive/settings/account">
                                            <i class="icon-key"></i> Account </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>executive/logout">
                                            <i class="fa fa-sign-out"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a class="nav-link">
                                <i class="icon-home"></i>
                                <span class="title"></span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                 <li <?php if($page == "dashboard"){ echo 'class="nav-item start active open"'; } ?> >
                                     <a href="<?= base_url()?>executive/dashboard">
                                         <i class="icon-graph "></i>
                                         <span>Dashboard</span> 
                                     </a> 
                                 </li>
                                 <li <?php if($page == "settings"){ echo 'class="nav-item start active open"'; } ?> >
                                     <a href="<?= base_url() ?>executive/settings">
                                         <i class="fa fa-gears"></i>
                                         <span>Settings</span> 
                                     </a> 
                                 </li>
                                 <li <?php if($page == "business"){ echo 'class="nav-item start active open"'; } ?> >
                                     <a href="<?= base_url() ?>executive/business">
                                         <i class="fa fa-suitcase"></i>
                                         <span>Business List</span> 
                                     </a> 
                                 </li>
                                 <li <?php if($page == "account"){ echo 'class="nav-item start active open"'; } ?> >
                                     <a href="<?= base_url() ?>executive/account">
                                         <i class="fa fa-users"></i>
                                         <span>Account List</span> 
                                     </a> 
                                 </li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
        <?php } ?>
