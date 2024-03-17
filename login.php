<?php 
require('functions/query.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="tb7qy5NtbrwPcgJpbvOseShIZDZjgQZrsgxAUrp5">
    <meta name="keywords" content="Assets Genius Hub">
    <meta name="description" content="Assets Genius Hub">
    <link rel="canonical" href="https://ap.assetsgeniushub.com/login"/>
    <link rel="shortcut icon" href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png" type="image/x-icon"/>

    <link rel="icon" href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/nice-select.css"/>
    <link rel="stylesheet" href="css/datatables.min.css"/>
    <link rel="stylesheet" href="css/simple-notify.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/notify.css"/>      
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/aos.css"/>
    <link rel="stylesheet" href="css/styles.css?var=2.1"/>

    <style>
        .site-head-tag {
            margin: 0;
            padding: 0;
        }
    </style>

    <title>Assets Genius Hub -     Login
</title>


</head>
<body>
<script>
    var notify = {
        timeout: "5000",
    }
</script>


    <!-- Login Section -->
    <section class="section-style site-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">
                    <div class="auth-content">
                        <div class="logo">
                            <a href="https://ap.assetsgeniushub.com"><img src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png" alt=""/></a>
                        </div>
                        <div class="title">
                            <h2> 👋 Welcome Back!</h2>
                            <p>Sign in to continue with your User Panel</p>
                        </div>
                        

                        <div class="site-auth-form">
                                <?php                  
    echo '<form action="'.login($conn).'"  method="POST"  >'; ?>
                                <input type="hidden" name="_token" value="tb7qy5NtbrwPcgJpbvOseShIZDZjgQZrsgxAUrp5">                                <div class="single-field">
                                    <label class="box-label" for="email">Email Or Username</label>
                                    <input
                                        class="box-input"
                                        type="text"
                                        name="username"
                                        placeholder="Enter your email address or username"
                                        required
                                    />
                                </div>
                                <div class="single-field">
                                    <label class="box-label" for="password">Password</label>
                                    <div class="password">
                                        <input
                                            class="box-input"
                                            type="password"
                                            name="password"
                                            placeholder="Enter your password"
                                            required
                                        />
                                    </div>
                                </div>

                                
                                <!-- <div style="height: 46px;line-height: 46px; width:100%;text-align: center;background-color: #3b3f4c;color: #FFFFFF!important;font-size: 26px;font-weight: bold;letter-spacing: 20px;font-family: 'Henny Penny', cursive;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;display: flex;justify-content: center;     margin-bottom: 9px;" class="captcha">
        <span style="    float:left;     -webkit-transform: rotate(3deg);"><?php echo $token1;?></span> </div>
        <input type="hidden" name="ocaptcha" id="locaptcha" value="<?php echo $token1;?>"  required> 
								<div class="form-group">
										<input class="form-control" type="text" name="captcha" id="lcaptcha" placeholder="Enter code" minlength="6" required>
										<div id="lcaptchaError" class="text-center text-danger font-weight-bold"></div>
									</div> -->

                                <div class="single-field">
                                    <input
                                        class="form-check-input check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="flexCheckDefault"
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>

                                                                            <span class="forget-pass-text"><a
                                                href="#">Forget Password</a></span>
                                                                    </div>
                                <button type="submit" 
                                    name="login_submit"
                                 class="site-btn grad-btn w-100">
                                    Account Login
                                </button>
                            </form>
                            <div class="singnup-text">
                                <p>
                                    Don&#039;t have an account?
                                    <a href="register.php">Signup for free</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery-migrate.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scrollUp.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery.nice-select.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/lucide.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/simple-notify.min.js"></script>
<script src="js/main.js?var=5"></script>
<script src="js/cookie.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/custom.js?var=5"></script>
    <script>
        (function ($) {
            'use strict';
            // AOS initialization
            AOS.init();
        })(jQuery);
    </script>
    <script>
        (function ($) {
            'use strict';
            // To top
            $.scrollUp({
                scrollText: '<i class="fas fa-caret-up"></i>',
                easingType: 'linear',
                scrollSpeed: 500,
                animation: 'fade'
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://ap.assetsgeniushub.com/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
    





</body>
</html>

