<?php
 require 'functions/query.php';
$firstname = UserId('firstname');
$lastname = UserId('lastname');
$amount = UserId('amount'); 
$profit = UserId('profit'); 
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
        
    
        <meta name="keywords" content="Assets Genius Hub" />
        <meta name="description" content="Assets Genius Hub" />
        <link rel="canonical" href="https://ap.assetsgeniushub.com/user/dashboard" />
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

        <title>Assets Genius Hub - Dashboard</title>
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
                    <a href="#">
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
                            <a href="#">
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
                                    <i icon-name="bell-ring" class=""></i>
                                    <div class="number">0</div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end notification-pop">
                                    <div class="noti-head">Notifications --- <span>0</span></div>
                                    <div class="all-noti">
                                        <p>Notification Not Found</p>
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
                                    <option value="#" selected>
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
                                        <a href="settings.php" class="dropdown-item" type="button"
                                            ><i class="anticon anticon-setting"></i>Settings</a
                                        >
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item" type="button">
                                            <i class="anticon anticon-lock"></i>Change Password
                                        </a>
                                    </li>

                                    <li class="logout">
                                        <a href="functions/logout.php" class="dropdown-item"
                                            >
                                            <i class="fa-solid fa-power-off"></i>
                                            Logout</a
                                        >
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

                            <div class="desktop-screen-show">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="user-ranking">
                                            <h4>
                                                Level
                                                <?php  echo $membership_level;?>
                                            </h4>
                                            <p>Asset Member</p>
                                            <div
                                                class="rank"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="By signing up to the account"
                                            >
                                                <img
                                                    src="https://ap.assetsgeniushub.com/assets/global/images/sCQgIyl0OKzFiO73nmWF.svg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                        <div class="site-card">
                                            <div class="site-card-header">
                                                <h3 class="title">Referral URL</h3>
                                            </div>
                                            <div class="site-card-body">
                                                <div class="referral-link">
                                                    <div class="referral-link-form">
                                                        <input
                                                            type="text"
                                                            value="<?php echo 'https://greenpointholdings.net/register?invite='.$username.''; ?>"
                                                            id="refLink"
                                                        />
                                                        <button type="submit" onclick="copyRef()">
                                                            <i class="anticon anticon-copy"></i>
                                                            <span id="copy">Copy</span>
                                                        </button>
                                                    </div>
                                                    <p class="referral-joined">
                                                        <?php referalCount($username); ?>
                                                        peoples are joined by using this URL
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row user-cards">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon"><i class="fa-solid fa-inbox"></i></div>
                                            <div class="content">
                                                <h4><span class="count">0</span></h4>
                                                <p>All Transactions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon"><i class="fa-regular fa-square-plus"></i></div>
                                            <div class="content">
                                                <h4>
                                                    <b>$</b><span class="count"><?php echo $amount; ?></span>
                                                </h4>
                                                <p>Total Deposit</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon"><i class="fa-solid fa-check" style="color:#032836"></i></div>
                                            <div class="content">
                                                <h4>
                                                    <b>$</b> <span class="count"><?php echo $total_investment; ?></span>
                                                </h4>
                                                <p>Total Investment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon">
                                    <i class="fa-regular fa-credit-card"></i>
                                                
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    <b>$</b> <span class="count"><?php echo $profit; ?></span>
                                                </h4>
                                                <p>Total Profit</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single"> 
                                            <div class="icon"><i class="fa-solid fa-building-columns " style="color:#032836"></i></div>
                                            <div class="content">
                                                <h4>
                                                    <b>$</b><span class="count"> <?php echo $total_withdraw; ?></span>
                                                </h4>
                                                <p>Total Withdraw</p>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon"><i class="fa-solid fa-yen-sign"></i></div>
                                            <div class="content">
                                                <h4><b>$</b><span class="count">0</span></h4>
                                                <p>Deposit Bonus</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon"><i class="fa-solid fa-square-plus"></i></div>
                                            <div class="content">
                                                <h4>
                                                    <b>$</b
                                                    ><span class="count"><?php echo $total_investments_bonus ;?></span>
                                                </h4>
                                                <p>Investment Bonus</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="single">
                                            <div class="icon"><i class="fa-solid fa-inbox"></i></div>
                                            <div class="content">
                                                <h4 class="count"><?php referalCount($username) ;?></h4>
                                                <p>Total Referral</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="site-card">
                                            <div class="site-card-header">
                                                <h3 class="title">Recent Transactions</h3>
                                            </div>
                                            <div class="site-card-body table-responsive">
                                                <div class="site-datatable">
                                                    <table class="display data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Description</th>
                                                                <th>Transactions ID</th>
                                                                <th>Type</th>
                                                                <th>Amount</th>
                                                                <th>Fee</th>
                                                                <th>Status</th>
                                                                <th>Gateway</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php viewUserTransactionsDesktop($username) ;?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile-screen-show">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="user-ranking-mobile">
                                            <div class="icon">
                                                <img
                                                    src="https://ap.assetsgeniushub.com/assets/global/materials/user.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="name">
                                                <h4 class="">
                                                    Hi,
                                                    <?php  echo $firstname ," ", $lastname;?>
                                                </h4>
                                                <p>
                                                    Asset Member -
                                                    <span
                                                        >Level
                                                        <?php  echo $membership_level;?></span
                                                    >
                                                </p>
                                            </div>
                                            <div class="rank-badge">
                                                <img
                                                    src="https://ap.assetsgeniushub.com/assets/global/images/sCQgIyl0OKzFiO73nmWF.svg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <div class="user-wallets-mobile">
                                            <img
                                                src="materials/wallet-shadow.png"
                                                alt=""
                                                class="wallet-shadow"
                                            />
                                            <div class="head">All Wallets in USD</div>
                                            <!-- <div class="one">
                                                <div class="balance">

                                                    <span class="symbol">$ </span><?php // echo $amount ?>
                                                    <span
                                                        class="after-dot">.00 </span>  
                                                </div>
                                                <div class="wallet">Main Wallet</div>
                                            </div> -->

                                            <div class="one p-wal">
                                                <div class="balance">
                                                    <span class="symbol">$ </span
                                                    ><?php echo $profit ?>
                                                    <!-- <span
                                                        class="after-dot">.00 </span> -->
                                                </div>
                                                <div class="wallet">Profit Wallet</div>
                                            </div>
                                            <div class="info">
                                                <i icon-name="info"></i>You Earned
                                                <?php echo $profit ?>
                                                USD This Week
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mob-shortcut-btn">
                                            <a href="deposit.php"><i icon-name="download"></i> Deposit</a>
                                            <a href="investments.php"><i icon-name="box"></i> Investment</a>
                                            <a href="withdraw.php"><i icon-name="send"></i> Withdraw</a>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <!-- all navigation -->
                                        <div class="all-feature-mobile mb-3 mobile-screen-show">
                                            <div class="title">All Navigations</div>
                                            <div class="contents row">
                                                <div class="col-4">
                                                    <div class="single">
                                                        <a href="investments.php">
                                                            <div class="icon">
                                                                <img
                                                                    src="materials/schema-log.png"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div class="name">Investment</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="single">
                                                        <a href="transactions.php">
                                                            <div class="icon">
                                                                <img
                                                                    src="materials/transactions.png"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div class="name">Transactions</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="single">
                                                        <a href="deposit.php">
                                                            <div class="icon">
                                                                <img
                                                                    src="materials/deposit.png"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div class="name">Deposit</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="single">
                                                        <a href="deposit-log.php">
                                                            <div class="icon">
                                                                <img
                                                                    src="materials/deposit-log.png"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <div class="name">Deposit Log</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-4">
            <div class="single">
                <a href="#">
                    <div class="icon"><img src="materials/wallet-exchange.png"
                                           alt="">
                    </div>
                    <div class="name">Wallet Exch.</div>
                </a>
            </div>
        </div> -->
                                            </div>
                                            <div class="moretext">
                                                <div class="row contents">
                                                    <div class="col-4">
                                                        <div class="single">
                                                            <a href="withdraw.php">
                                                                <div class="icon">
                                                                    <img
                                                                        src="materials/withdraw.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="name">Withdraw</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="single">
                                                            <a href="withdraw-log.php">
                                                                <div class="icon">
                                                                    <img
                                                                        src="materials/withdraw-log.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="name">Withdraw Log</div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-4">
                                                        <div class="single">
                                                            <a href="referral.php">
                                                                <div class="icon">
                                                                    <img
                                                                        src="materials/referral.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="name">Referral</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="single">
                                                            <a href="setting.php">
                                                                <div class="icon">
                                                                    <img
                                                                        src="materials/settings.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="name">Settings</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="centered">
                                                <button class="moreless-button site-btn-sm grad-btn">Load more</button>
                                            </div>
                                        </div>

                                        <!-- all Statistic -->
                                        <div class="all-feature-mobile mb-3 mobile-screen-show">
                                            <div class="title">All Statistic</div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="all-cards-mobile">
                                                        <div class="contents row">
                                                             
                                                            <div class="col-12">
                                                                <div class="single-card">
                                                                    <div class="icon"><i icon-name="download"></i></div>
                                                                    <div class="content">
                                                                        <div class="amount">
                                                                            $<span class="count"
                                                                                ><?php echo $amount;?></span
                                                                            >
                                                                        </div>
                                                                        <div class="name">Total Deposit</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="single-card">
                                                                    <div class="icon"><i icon-name="box"></i></div>
                                                                    <div class="content">
                                                                        <div class="amount">
                                                                            $<span class="count"
                                                                                ><?php echo $amount;?></span
                                                                            >
                                                                        </div>
                                                                        <div class="name">Total Investment</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="moretext-2">
                                                            <div class="contents row">
                                                                <div class="col-12">
                                                                    <div class="single-card">
                                                                        <div class="icon">
                                                                            <i icon-name="credit-card"></i>
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="amount">
                                                                                $<span class="count"
                                                                                    ><?php echo $profit;?></span
                                                                                >
                                                                            </div>
                                                                            <div class="name">Total Profit</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="single-card">
                                                                        <div class="icon"><i icon-name="send"></i></div>
                                                                        <div class="content">
                                                                            <div class="amount">
                                                                                $<span class="count">0</span>
                                                                            </div>
                                                                            <div class="name">Total Withdraw</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="single-card">
                                                                        <div class="icon">
                                                                            <i icon-name="users-2"></i>
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="amount">
                                                                                <span class="count text-xs">View Referral Page</span>
                                                                            </div>
                                                                            <div class="name">Referral Bonus</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="single-card">
                                                                        <div class="icon">
                                                                            <i icon-name="archive"></i>
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="amount">
                                                                                $<span class="count">0</span>
                                                                            </div>
                                                                            <div class="name">Investment Bonus</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="single-card">
                                                                        <div class="icon"><i icon-name="gift"></i></div>
                                                                        <div class="content">
                                                                            <div class="amount count">0</div>
                                                                            <div class="name">Total Referral</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="centered">
                                                            <button class="moreless-button-2 site-btn-sm grad-btn">
                                                                Load more
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Recent Transactions -->
                                        <div class="all-feature-mobile mobile-transactions mb-3 mobile-screen-show">
                                            <div class="title">Recent Transactions</div>
                                            <div class="contents">
                                                <!-- transactions here -->

                                                <?php viewUserTransactions($username); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mobile-ref-url mb-4">
                                            <div class="all-feature-mobile">
                                                <div class="title">Referral URL</div>
                                                <div class="mobile-referral-link-form">
                                                    <input
                                                        type="text"
                                                        value="<?php echo 'https://greenpointholdings.net/register?invite='.$username.''; ?>"
                                                        id="refLink"
                                                    />
                                                    <button type="submit" onclick="copyRef()">
                                                        <span id="copy">Copy</span>
                                                    </button>
                                                </div>
                                                <p class="referral-joined">
                                                    <?php referalCount($username); ?>
                                                    peoples are joined by using this URL
                                                </p>
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
            function copyRef() {
                /* Get the text field */
                var textToCopy = $("#refLink").val();
                // Create a temporary input element
                var tempInput = $("<input>");
                $("body").append(tempInput);
                tempInput.val(textToCopy).select();
                // Copy the text from the temporary input
                document.execCommand("copy");
                // Remove the temporary input element
                tempInput.remove();
                $("#copy").text("Copied");
                var copyApi = document.getElementById("refLink");
                /* Select the text field */
                copyApi.select();
                copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
                /* Copy the text inside the text field */
                document.execCommand("copy");
                $("#copy").text("Copied");
            }

            // Load More
            $(".moreless-button").click(function () {
                $(".moretext").slideToggle();
                if ($(".moreless-button").text() == "Load more") {
                    $(this).text("Load less");
                } else {
                    $(this).text("Load more");
                }
            });

            $(".moreless-button-2").click(function () {
                $(".moretext-2").slideToggle();
                if ($(".moreless-button-2").text() == "Load more") {
                    $(this).text("Load less");
                } else {
                    $(this).text("Load more");
                }
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.14.0/umd/react.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.14.0/umd/react-dom.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/antd/4.18.0/antd.min.js" integrity="sha512-VIIcMdh7uqCXZdz20tzEZJgXGPwey1Kd+IafFhCfUfxuNOV2WbvV2xNB4oRdqEW32MnmMOy0r0TF7l18yg0Wbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
