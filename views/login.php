<?php
    include_once ('header.php');
?>
<!-- Container start -->
<div class="container">
    <form action="/login" method="post">
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <img src="../assets/img/logo_footer.svg" alt="cielo" />
                        </a>
                        <h5>Please enter your user information.</h5>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Enter username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']?>" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']?>" />
                        </div>
<!--                        <div class="mb-2">-->
<!--                            <div class="custom-control custom-checkbox">-->
<!--                                <input type="checkbox" class="custom-control-input" id="remember_pwd" name="remember">-->
<!--                                <label class="custom-control-label" for="remember_pwd">Remember me</label>-->
<!--                            </div>-->
<!--                        </div>-->
                        <button type="submit" class="btn btn-primary sign-in">Sign In</button>
                        <p style="color: red"><?php if(isset($msg)) echo $msg;?></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Container end -->
<?php
    include_once ('footer.php');
?>

