<style type="text/css">
	.navbar-inner{
		display: none;
	}

	.footer-inner{
		display: none;
	}
</style>
<div class="login-extra">
</div> <!-- /login-extra -->

        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url(<?= base_url() ?>assets/pages/img/login/bg1.jpg)">
                </div>
                </div>
                <div class="col-md-6 login-container bs-reset">
                	<div class="col-sm-2"></div><div class="col-sm-8"><img class="login-logo" src="<?= base_url() ?>assets/pages/img/login/logo.png" /></div>
                    <div class="login-content">
                        <h1>Super Admin Login</h1>
                        <p> For Photography Businesses and Booking Online Aims easily bookable all kinds of life event services. Let's capture love, joy, and everything in between. </p><br><br><br>
                        <form action="<?= base_url('executive') ?>" method="post">
                        <?php    
				            if(@$error == true) {
				            ?>
				            <div id="mydivs" class="alert alert-danger"> 
                                <button class="close" data-close="alert"></button>
                                <span>Your username or password are invalid.</span>
                            </div>
				            <?php } ?>
                                
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" placeholder="Username" name="username" required/> </div>
                                <div class="col-xs-6">
                                    <input class="form-control" type="password" placeholder="Password" name="password" required/> </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <button class="btn blue" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
					            <div class="col-xs-12 bs-reset">
					                <div class="login-copyright text-right">
					                  <p>Copyright &copy; Online Reservation | CI Version <?= CI_VERSION ?> - <?= date('Y') ?></p>
					                </div>
					            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script> 
        setTimeout(function() {
            $('#mydivs').hide('fast');
        }, 5000);
    </script>