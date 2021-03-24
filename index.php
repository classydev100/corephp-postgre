<?php
    include_once ('template/header.php');
?>
<!-- Container start -->
<div class="container">
    <form action="index.html">
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <img src="assets/img/logo_footer.svg" alt="cielo" />
                        </a>
                        <h5>Please enter your user information.</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password" />
                        </div>
                        <div class="mb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember_pwd">
                                <label class="custom-control-label" for="remember_pwd">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Container end -->
<?php
    include_once ('template/footer.php');
?>

