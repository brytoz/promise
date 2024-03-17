<?php
 require 'functions/query.php';
$firstname = UserId('firstname');
$lastname = UserId('lastname');
$amount = UserId('amount'); 
$profit = UserId('profit'); 
$address = UserId('address'); 
$username = UserId('username'); 
$refer_bonus = UserId('refer_bonus'); 
$total_withdraw = UserId('total_withdraw');  
$membership_level = UserId('membership_level');  
$total_investment = UserId('total_investments');  
$total_investments_bonus = UserId('total_investments_bonus');  
$userId = $_SESSION['user_username'];

  if (loggedin()==false) {
     header('Location: functions/logout.php'); 
  }


  
 ?>
 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="nrjeRPslUBjQXOTV2JqGxE5YPWPXEHHn3bkf2dw5" />
        <meta name="keywords" content="Assets Genius Hub" />
        <meta name="description" content="Assets Genius Hub" />
        <link rel="canonical" href="https://ap.assetsgeniushub.com/user/withdraw" />
        <link
            rel="shortcut icon"
            href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png"
            type="image/x-icon"
        />

        <link
            rel="icon"
            href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png"
            type="image/x-icon"
        />
        <link rel="stylesheet" href="css/fontawesome.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/nice-select.css" />
        <link rel="stylesheet" href="css/datatables.min.css" />
        <link rel="stylesheet" href="css/simple-notify.min.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="css/notify.css"
        />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <link rel="stylesheet" href="css/aos.css" />
        <link rel="stylesheet" href="css/styles.css?var=2.1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/antd/4.18.0/antd.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
            .site-head-tag {
                margin: 0;
                padding: 0;
            }
        </style>

        <title>Assets Genius Hub - Withdraw Now</title>
    </head>
    <body class="dark-theme">
        <script>
            var notify = {
                timeout: "5000",
            };
        </script>
        <!--Full Layout-->
        <div class="panel-layout">
            <!--Header-->
            <div class="panel-header">
                <div class="logo">
                    <a href="https://ap.assetsgeniushub.com">
                        <img
                            class="logo-unfold"
                            src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png"
                            alt="Logo"
                        />
                        <img
                            class="logo-fold"
                            src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png"
                            alt="Logo"
                        />
                    </a>
                </div>
                <div class="nav-wrap">
                    <div class="nav-left">
                        <button class="sidebar-toggle">
                            <i class="anticon anticon-arrow-left"></i>
                        </button>
                        <div class="mob-logo">
                            <a href="https://ap.assetsgeniushub.com">
                                <img
                                    src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png"
                                    alt="Site Name"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="nav-right">
                        <div class="single-nav-right">
                            <div class="single-right">
                                <div class="color-switcher">
                                    <i icon-name="moon" class="dark-icon" data-mode="dark"></i>
                                    <i icon-name="sun" class="light-icon" data-mode="light"></i>
                                </div>
                            </div>

                            <!-- <div class="single-nav-right user-notifications43">
                                <button
                                    type="button"
                                    class="item notification-dot"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i icon-name="bell-ring" class="bell-ringng"></i>
                                    <div class="number">2</div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end notification-pop">
                                    <div class="noti-head">Notifications <span>2</span></div>
                                    <div class="all-noti">
                                        <div class="single-noti">
                                            <a
                                                href="https://ap.assetsgeniushub.com/user/notification-read/34467"
                                                class=""
                                            >
                                                <div class="icon">
                                                    <i icon-name="newspaper"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="main-cont">
                                                        <span>Candice Suber</span> The manual deposit request details:
                                                        none TRXE5ZLSK0YSZ BTC 1000 Rejected
                                                    </div>
                                                    <div class="time">40 minutes ago</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="single-noti">
                                            <a
                                                href="https://ap.assetsgeniushub.com/user/notification-read/34466"
                                                class=""
                                            >
                                                <div class="icon">
                                                    <i icon-name="newspaper"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="main-cont">
                                                        <span>Candice Suber</span> The manual deposit request details:
                                                        none TRXVVUEDIY3T2 BTC 1000 Rejected
                                                    </div>
                                                    <div class="time">41 minutes ago</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="noti-footer mt-3">
                                        <a
                                            class="noti-btn-1 me-1 w-100"
                                            href="https://ap.assetsgeniushub.com/user/notification-read/0"
                                            >Mark All as Read</a
                                        >
                                        <a
                                            class="noti-btn-2 ms-1 w-100"
                                            href="https://ap.assetsgeniushub.com/user/notification/all"
                                            >See all Notifications</a
                                        >
                                    </div>
                                </div>
                            </div> -->

                            <div class="single-right">
                                <select
                                    name="language"
                                    id=""
                                    class="site-nice-select"
                                    onchange="window.location.href=this.options[this.selectedIndex].value;"
                                >
                                    <option value="https://ap.assetsgeniushub.com/language-update?name=en" selected>
                                        English
                                    </option>
                                     
                                </select>
                            </div>
                            <div class="single-right">
                                <button type="button" class="item" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="anticon anticon-user"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a
                                            href="https://ap.assetsgeniushub.com/user/settings"
                                            class="dropdown-item"
                                            type="button"
                                            ><i class="anticon anticon-setting"></i>Settings</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="https://ap.assetsgeniushub.com/user/change-password"
                                            class="dropdown-item"
                                            type="button"
                                        >
                                            <i class="anticon anticon-lock"></i>Change Password
                                        </a>
                                    </li>
                                   
                                    <li class="logout">
                                        <form
                                            method="POST"
                                            action="https://ap.assetsgeniushub.com/logout"
                                            id="logout-form"
                                        >
                                            <input
                                                type="hidden"
                                                name="_token"
                                                value="nrjeRPslUBjQXOTV2JqGxE5YPWPXEHHn3bkf2dw5"
                                            />
                                            <a
                                                href="https://ap.assetsgeniushub.com/logout"
                                                class="dropdown-item"
                                                onclick="event.preventDefault(); localStorage.clear();  $('#logout-form').submit();"
                                                ><i class="anticon anticon-logout"></i>Logout</a
                                            >
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Header-->

            <div class="desktop-screen-show">
                <div class="side-nav">
                    <div class="side-wallet-box default-wallet mb-0">
                        <div class="user-balance-card">
                            <div class="wallet-name">
                                <div class="name">Account Balance</div>
                                <div class="default">Wallet</div>
                            </div>
                            <div class="wallet-info">
                                <div class="wallet-id"><i icon-name="wallet"></i>Main Wallet</div>
                                <div class="balance">
                                    $
                                    <?php echo $amount ?>
                                </div>
                            </div>
                            <div class="wallet-info">
                                <div class="wallet-id"><i icon-name="landmark"></i>Profit Wallet</div>
                                <div class="balance">
                                    $
                                    <?php echo $profit ?>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="deposit.php" class="user-sidebar-btn"> 
                            <i class="fa-regular fa-square-plus"></i>Deposit</a>
                            <a href="investments.php" class="user-sidebar-btn red-btn"
                                ><i class="fa-solid fa-right-from-bracket"></i>Invest Now</a
                            >
                        </div>
                    </div>
                    <div class="side-nav-inside">
                        <ul class="side-nav-menu">
                            <li class="side-nav-item active">
                                <a href="dashboard.php">
                                <i class="fa-solid fa-table-cells-large"></i>
                                </i><span>Dashboard</span></a>
                            </li>

                            <li class="side-nav-item">
                                <a href="transactions.php">
                                <i class="fa-solid fa-inbox"></i>
                                <span>All Transactions</span></a>
                            </li>

                            <li class="side-nav-item">
                                <a href="deposit.php"><i class="fa-regular fa-square-plus"></i><span>Add Money</span></a>
                            </li>
                            <li class="side-nav-item">
                                <a href="deposit-log.php"
                                    ><i class="fa-solid fa-square-plus"></i><span>Add Money Log</span></a
                                >
                            </li>

                            <!-- <li class="side-nav-item ">
                                    <a href="#"><ihttps://greenpointholdings.net/register?invite     class="anticon anticon-transaction"></i><span>Wallet Exchange</span></a>
                            </li> -->

                            <!-- <li class="side-nav-item">
                                <a href="#"><i class="anticon anticon-export"></i><span>Send Money</span></a>
                            </li>
                            <li class="side-nav-item">
                                <a href="#"><i class="anticon anticon-cloud"></i><span>Send Money Log</span></a>
                            </li> -->

                            <li class="side-nav-item">
                                <a href="withdraw.php"><i class="fa-solid fa-building-columns"></i><span>Withdraw</span></a>
                            </li>
                            <li class="side-nav-item">
                                <a href="withdraw-log.php">
                                    <i class="fa-regular fa-credit-card"></i>
                                    <span>Withdraw Log</span></a>
                            </li>

                            <!-- <li class="side-nav-item ">
                                <a href="#"><i
                                        class="anticon anticon-star"></i><span>Ranking Badge</span></a>
                            </li> -->

                            <li class="side-nav-item">
                                <a href="referral.php"
                                    >
                                    <i class="fa-solid fa-user-group"></i><span>Referral</span></a
                                >
                            </li>

                            <!-- 
                            <li class="side-nav-item ">
                                <a href="https://ap.assetsgeniushub.com/user/notification/all"
                                ><i class="anticon anticon-notification"></i><span>Notifications </span></a
                                >
                            </li> -->

                            <li class="side-nav-item">
                                <!-- Authentication -->

                                <a href="functions/logout.php" class="dropdown-item">
                                    <i class="fa-solid fa-power-off"></i>
                                    
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-container">
                <div class="main-content">
                    <div class="section-gap">
                        <div class="container-fluid">
                            <!--Page Content-->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="site-card">
                                        <div class="site-card-header">
                                            <h3 class="title">Withdraw Money</h3>
                                            <div class="card-header-links">
                                                <a
                                                    href="settings.php"
                                                    class="card-header-link"
                                                    >Withdraw Account</a
                                                >
                                            </div>
                                        </div>
                                        <div class="site-card-body">
                                            <div class="progress-steps-form">
                                                <?php echo'<form action="'.withdrawFunds($username).'" method="post" >'; ?>
                                                     
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-12 mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label"
                                                                >Withdraw Account</label
                                                            >
                                                            <div class="input-group">
                                                                <select
                                                                    name="withdraw_account"
                                                                    id="withdrawAccountId"
                                                                    class="site-nice-select"
                                                                >
                                                                    <option selected disabled>Withdraw Address</option>
                                                                    <?php echo '<option value='.$address.'> '.$address.' </option>'; ?>

                                                                </select>
                                                            </div>
                                                            <div class="input-info-text processing-time"></div>
                                                        </div>
                                                        <div class="col-xl-6 col-md-12">
                                                            <label for="exampleFormControlInput1" class="form-label"
                                                                >Amount</label
                                                            >
                                                            <div class="input-group">
                                                                <input
                                                                    type="text"
                                                                    name="amount"
                                                                    oninput="this.value = validateDouble(this.value)"
                                                                    required
                                                                    class="form-control withdrawAmount"
                                                                    placeholder="Enter Amount"
                                                                />
                                                            </div>
                                                            <div class="input-info-text withdrawAmountRange"></div>
                                                        </div>
                                                    </div>
                                                    <div class="transaction-list table-responsive">
                                                        <div class="user-panel-title">
                                                            <h3>Withdraw Details</h3>
                                                        </div>
                                                        <table class="table">
                                                            <tbody class="selectDetailsTbody">
                                                                <tr class="detailsCol">
                                                                    <td><strong>Withdraw Amount</strong></td>
                                                                    <td><span class="withdrawAmount"></span> USD</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="buttons">
                                                        <button type="submit" name="submit" class="site-btn blue-btn">
                                                            Withdraw Money<i class="anticon anticon-double-right"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Page Content-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Show in 575px in Mobile Screen -->
            <div class="mobile-screen-show">
                <div class="bottom-appbar">
                    <a href="dashboard.php" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout-dashboard" icon-name="layout-dashboard" class="lucide lucide-layout-dashboard"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg> <i icon-name="layout-dashboard"></i>
                    </a>
                    <a href="deposit.php" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" icon-name="download" class="lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg><i icon-name="download"></i>
                    </a>
                    <a href="transactions.php" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="box" icon-name="box" class="lucide lucide-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line></svg> <i icon-name="box"></i>
                    </a>
                     
                    <a href="settings.php" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="settings" icon-name="settings" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg><i icon-name="settings"></i>
                    </a>
                </div>
            </div>

            <!-- Show in 575px in Mobile Screen End -->

            <!-- Automatic Popup -->

            <!-- /Automatic Popup End -->
        </div>
        <!--/Full Layout-->

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
        <script
            src="https://ap.assetsgeniushub.com/assets/global/js/datatables.min.js"
            type="text/javascript"
            charset="utf8"
        ></script>
        <script src="https://ap.assetsgeniushub.com/assets/global/js/simple-notify.min.js"></script>
        <script src="js/main.js?var=5"></script>
        <script src="js/cookie.js"></script>
        <script src="https://ap.assetsgeniushub.com/assets/global/js/custom.js?var=5"></script>
        <script src="https://ap.assetsgeniushub.com/assets/global/js/pusher.min.js"></script>
        <script>
            (function ($) {
                "use strict";

                let pusherAppKey = "";
                let pusherAppCluster = "mt1";
                let soundUrl = "https://ap.assetsgeniushub.com/notification-tune";

                var notification = new Pusher(pusherAppKey, {
                    encrypted: true,
                    cluster: pusherAppCluster,
                });
                var channel = notification.subscribe("user-notification43");
                channel.bind("notification-event", function (result) {
                    playSound();
                    latestNotification();
                    notifyToast(result);
                });

                function latestNotification() {
                    $.get("https://ap.assetsgeniushub.com/user/latest-notification", function (data) {
                        $(".user-notifications43").html(data);
                    });
                }

                function notifyToast(data) {
                    new Notify({
                        status: "info",
                        title: data.data.title,
                        text: data.data.notice,
                        effect: "slide",
                        speed: 300,
                        customClass: "",
                        customIcon:
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>',
                        showIcon: true,
                        showCloseButton: true,
                        autoclose: true,
                        autotimeout: 9000,
                        gap: 20,
                        distance: 20,
                        type: 1,
                        position: "right bottom",
                        customWrapper:
                            '<div><a href="' +
                            data.data.action_url +
                            '" class="learn-more-link">Explore<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a></div>',
                    });
                }

                function playSound() {
                    $.get(soundUrl, function (data) {
                        var audio = new Audio(data);
                        audio.play();
                        audio.muted = false;
                    });
                }
            })(jQuery);
        </script>
        <script>
            (function ($) {
                "use strict";
                // AOS initialization
                AOS.init();
            })(jQuery);
        </script>
        <script>
            (function ($) {
                "use strict";
                // To top
                $.scrollUp({
                    scrollText: '<i class="fas fa-caret-up"></i>',
                    easingType: "linear",
                    scrollSpeed: 500,
                    animation: "fade",
                });
            })(jQuery);
        </script>

        <script
            type="text/javascript"
            src="https://ap.assetsgeniushub.com/assets/vendor/mckenziearts/laravel-notify/js/notify.js"
        ></script>
        <script>
            "use strict";
            var info = [];
            $("#withdrawAccountId").on("change", function (e) {
                e.preventDefault();

                $(".selectDetailsTbody").children().not(":first", ":second").remove();
                var accountId = $(this).val();
                var amount = $(".withdrawAmount").val();

                if (!isNaN(accountId)) {
                    var url = "https://ap.assetsgeniushub.com/user/withdraw/details/:accountId/:amount";
                    url = url.replace(":accountId", accountId);
                    url = url.replace(":amount", amount);

                    $.get(url, function (data) {
                        $(data.html).insertAfter(".detailsCol");
                        info = data.info;
                        $(".withdrawAmountRange").text(info.range);
                        $(".processing-time").text(info.processing_time);
                    });
                }
            });

            $(".withdrawAmount").on("keyup", function (e) {
                "use strict";
                e.preventDefault();
                var amount = $(this).val();
                var charge = info.charge_type === "percentage" ? calPercentage(amount, info.charge) : info.charge;
                $(".withdrawAmount").text(amount);
                $(".withdrawFee").text(charge);
                $(".processing-time").text(info.processing_time);
                $(".withdrawAmountRange").text(info.range);
            });
        </script>
        <script>
            // Color Switcher
            $(".color-switcher").on("click", function () {
                "use strict";
                $("body").toggleClass("dark-theme");
                var url = "https://ap.assetsgeniushub.com/theme-mode";
                $.get(url);
            });
        </script>
    </body>
</html>
