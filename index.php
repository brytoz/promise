<?php


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="nrjeRPslUBjQXOTV2JqGxE5YPWPXEHHn3bkf2dw5">
    <meta name="keywords" content="Assets Genius Hub">
    <meta name="description" content="Assets Genius Hub">
    <link rel="canonical" href="https://ap.assetsgeniushub.com/user/dashboard"/>
    <link rel="shortcut icon" href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png" type="image/x-icon"/>

    <link rel="icon" href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/global/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/frontend/css/vendor/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/frontend/css/animate.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/frontend/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/global/css/nice-select.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/global/css/datatables.min.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/global/css/simple-notify.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://ap.assetsgeniushub.com/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/frontend/css/magnific-popup.css"/>
            <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/frontend/css/aos.css"/>
        <link rel="stylesheet" href="https://ap.assetsgeniushub.com/assets/frontend/css/styles.css?var=2.1"/>

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

    <title>Assets Genius Hub -     Dashboard
</title>


</head>
<body class="dark-theme">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Full Layout-->
<div class="panel-layout">
    <!--Header-->
    <div class="panel-header">
    <div class="logo">
        <a href="https://ap.assetsgeniushub.com">
            <img class="logo-unfold" src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png" alt="Logo"/>
            <img class="logo-fold" src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png" alt="Logo"/>
        </a>
    </div>
    <div class="nav-wrap">
        <div class="nav-left">
            <button class="sidebar-toggle">
                <i class="anticon anticon-arrow-left"></i>
            </button>
            <div class="mob-logo">
                <a href="https://ap.assetsgeniushub.com">
                    <img src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png" alt="Site Name"/>
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

                
                                                        <div class="single-nav-right user-notifications43">
                        <button type="button" class="item notification-dot" data-bs-toggle="dropdown" aria-expanded="false">
    <i icon-name="bell-ring" class=""></i>
    <div class="number">0</div>
</button>
<div class="dropdown-menu dropdown-menu-end notification-pop">
    <div class="noti-head">Notifications <span>0</span></div>
    <div class="all-noti">
        
                    <p>Notification Not Found</p>
            </div>

    </div>


                    </div>
                                

                <div class="single-right">
                    <select name="language" id="" class="site-nice-select"
                            onchange="window.location.href=this.options[this.selectedIndex].value;">
                                                    <option
                                value="https://ap.assetsgeniushub.com/language-update?name=en" selected>English</option>
                                                    <option
                                value="https://ap.assetsgeniushub.com/language-update?name=es" >Spanish</option>
                                                    <option
                                value="https://ap.assetsgeniushub.com/language-update?name=fr" >Franch</option>
                                            </select>
                </div>
                <div class="single-right">
                    <button
                        type="button"
                        class="item"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="anticon anticon-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="https://ap.assetsgeniushub.com/user/settings" class="dropdown-item" type="button"><i
                                    class="anticon anticon-setting"></i>Settings</a>
                        </li>
                        <li>
                            <a href="https://ap.assetsgeniushub.com/user/change-password" class="dropdown-item" type="button">
                                <i class="anticon anticon-lock"></i>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="https://ap.assetsgeniushub.com/user/support-ticket/index" class="dropdown-item" type="button">
                                <i class="anticon anticon-customer-service"></i>Support Tickets
                            </a>
                        </li>
                        <li class="logout">
                            <form method="POST" action="https://ap.assetsgeniushub.com/logout" id="logout-form">
                                <input type="hidden" name="_token" value="nrjeRPslUBjQXOTV2JqGxE5YPWPXEHHn3bkf2dw5">                                <a href="https://ap.assetsgeniushub.com/logout" class="dropdown-item"
                                   onclick="event.preventDefault(); localStorage.clear();  $('#logout-form').submit();"><i
                                        class="anticon anticon-logout"></i>Logout</a>
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
        <div class="side-nav ">
    <div class="side-wallet-box default-wallet mb-0">
        <div class="user-balance-card">
            <div class="wallet-name">
                <div class="name">Account Balance</div>
                <div class="default">Wallet</div>
            </div>
            <div class="wallet-info">
                <div class="wallet-id"><i icon-name="wallet"></i>Main Wallet</div>
                <div class="balance">$0.00</div>
            </div>
            <div class="wallet-info">
                <div class="wallet-id"><i icon-name="landmark"></i>Profit Wallet</div>
                <div class="balance">$10.00</div>
            </div>
        </div>
        <div class="actions">
            <a href="https://ap.assetsgeniushub.com/user/deposit" class="user-sidebar-btn"><i
                    class="anticon anticon-file-add"></i>Deposit</a>
            <a href="https://ap.assetsgeniushub.com/user/schemas" class="user-sidebar-btn red-btn"><i
                    class="anticon anticon-export"></i>Invest Now</a>
        </div>
    </div>
    <div class="side-nav-inside">
        <ul class="side-nav-menu">
            <li class="side-nav-item active">
                <a href="https://ap.assetsgeniushub.com/user/dashboard"><i
                        class="anticon anticon-appstore"></i><span>Dashboard</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/schemas"><i
                        class="anticon anticon-check-square"></i><span>All Schema</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/invest-logs"><i
                        class="anticon anticon-copy"></i><span>Schema Logs</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/transactions"><i
                        class="anticon anticon-inbox"></i><span>All Transactions</span></a>
            </li>


            <li class="side-nav-item   ">
                <a href="https://ap.assetsgeniushub.com/user/deposit"><i
                        class="anticon anticon-file-add"></i><span>Add Money</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/deposit/log"><i
                        class="anticon anticon-folder-add"></i><span>Add Money Log</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/wallet-exchange"><i
                        class="anticon anticon-transaction"></i><span>Wallet Exchange</span></a>
            </li>

            <li class="side-nav-item   ">
                <a href="https://ap.assetsgeniushub.com/user/send-money"><i
                        class="anticon anticon-export"></i><span>Send Money</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/send-money/log"><i
                        class="anticon anticon-cloud"></i><span>Send Money Log</span></a>
            </li>

            <li class="side-nav-item   ">
                <a href="https://ap.assetsgeniushub.com/user/withdraw"><i
                        class="anticon anticon-bank"></i><span>Withdraw</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/withdraw/log"><i
                        class="anticon anticon-credit-card"></i><span>Withdraw Log</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/ranking-badge"><i
                        class="anticon anticon-star"></i><span>Ranking Badge</span></a>
            </li>

                            <li class="side-nav-item ">
                    <a href="https://ap.assetsgeniushub.com/user/referral"><i
                            class="anticon anticon-usergroup-add"></i><span>Referral</span></a>
                </li>
            
            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/settings"><i
                        class="anticon anticon-setting"></i><span>Settings</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/support-ticket/index"
                ><i class="anticon anticon-tool"></i><span>Support Tickets</span></a
                >
            </li>

            <li class="side-nav-item ">
                <a href="https://ap.assetsgeniushub.com/user/notification/all"
                ><i class="anticon anticon-notification"></i><span>Notifications</span></a
                >
            </li>

            <li class="side-nav-item">
                <!-- Authentication -->
                <form method="POST" action="https://ap.assetsgeniushub.com/logout">
                    <input type="hidden" name="_token" value="nrjeRPslUBjQXOTV2JqGxE5YPWPXEHHn3bkf2dw5">                    <button type="submit" class="site-btn grad-btn w-100">
                        <i class="anticon anticon-logout"></i><span>Logout</span>
                    </button>
                </form>
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
        <div class="user-ranking" >
            <h4>Level 1</h4>
            <p>Asset Member</p>
            <div class="rank" data-bs-toggle="tooltip" data-bs-placement="top" title="By signing up to the account">
                <img src="https://ap.assetsgeniushub.com/assets/global/images/sCQgIyl0OKzFiO73nmWF.svg" alt="">
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
                            <input type="text" value="https://ap.assetsgeniushub.com/register?invite=8BOeet3NR0" id="refLink"/>
                            <button type="submit" onclick="copyRef()">
                                <i class="anticon anticon-copy"></i>
                                <span id="copy">Copy</span>
                            </button>
                        </div>
                        <p class="referral-joined">
                            0 peoples are joined by using this URL
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
</div>

            
            <div class="row user-cards ">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-inbox"></i></div>
            <div class="content">
                <h4><span class="count">3</span></h4>
                <p>All Transactions</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-file-add"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Deposit</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-check-square"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Investment</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-credit-card"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">10</span></h4>
                <p>Total Profit</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-arrow-right"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Transfer </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-money-collect"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Withdraw</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-gift"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span>
                </h4>
                <p>Referral Bonus</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-account-book"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Deposit Bonus</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-gold"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Investment Bonus</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-inbox"></i></div>
            <div class="content">
                <h4 class="count">0</h4>
                <p>Total Referral</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-radar-chart"></i></div>
            <div class="content">
                <h4 class="count">1</h4>
                <p>Rank Achieved</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-question"></i></div>
            <div class="content">
                <h4 class="count">0</h4>
                <p>Total Ticket</p>
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
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Deposit With BITCOIN                                             </strong>
                                            <div class="date">Jan 17 2024 02:33</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXVVUEDIY3T2</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Manual deposit</div>
                                </td>

                                <td><strong
                                        class="green-color">+1000 USD</strong>
                                </td>
                                <td><strong>50 USD</strong></td>
                                <td>


                                                                            <div class="site-badge warnning">Pending</div>
                                                                    </td>
                                <td><strong>BTC</strong></td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Deposit With BITCOIN                                             </strong>
                                            <div class="date">Jan 17 2024 02:33</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXE5ZLSK0YSZ</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Manual deposit</div>
                                </td>

                                <td><strong
                                        class="green-color">+1000 USD</strong>
                                </td>
                                <td><strong>50 USD</strong></td>
                                <td>


                                                                            <div class="site-badge warnning">Pending</div>
                                                                    </td>
                                <td><strong>BTC</strong></td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Signup Bonus                                             </strong>
                                            <div class="date">Jan 16 2024 11:40</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXW9DQETSDKR</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Signup bonus</div>
                                </td>

                                <td><strong
                                        class="">10 USD</strong>
                                </td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                        

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
            <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/global/materials/user.png" alt=""/></div>
            <div class="name">
                <h4>Hi, Candice Suber</h4>
                <p>Asset Member - <span>Level 1</span></p>
            </div>
            <div class="rank-badge"><img src="https://ap.assetsgeniushub.com/assets/global/images/sCQgIyl0OKzFiO73nmWF.svg" alt=""/></div>
        </div>
        <div class="user-wallets-mobile">
            <img src="https://ap.assetsgeniushub.com/assets/frontend/materials/wallet-shadow.png" alt="" class="wallet-shadow">
            <div class="head">All Wallets in USD</div>
            <div class="one">
                <div class="balance">

                    <span class="symbol">$</span>0<span
                        class="after-dot">.00 </span>
                </div>
                <div class="wallet">Main Wallet</div>
            </div>


            <div class="one p-wal">
                <div class="balance">
                    <span class="symbol">$</span>10.00<span
                        class="after-dot">.00 </span>
                </div>
                <div class="wallet">Profit Wallet</div>
            </div>
            <div class="info">
                <i icon-name="info"></i>You Earned 10 USD This Week
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="mob-shortcut-btn">
            <a href="https://ap.assetsgeniushub.com/user/deposit"><i icon-name="download"></i> Deposit</a>
            <a href="https://ap.assetsgeniushub.com/user/schemas"><i icon-name="box"></i> Investment</a>
            <a href="https://ap.assetsgeniushub.com/user/withdraw"><i icon-name="send"></i> Withdraw</a>
        </div>
    </div>


    <div class="col-12">
        <!-- all navigation -->
        <div class="all-feature-mobile mb-3 mobile-screen-show">
    <div class="title">All Navigations</div>
    <div class="contents row">
        <div class="col-4">
            <div class="single">
                <a href="https://ap.assetsgeniushub.com/user/schemas">
                    <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/schema.png" alt="">
                    </div>
                    <div class="name">Schemas</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="https://ap.assetsgeniushub.com/user/invest-logs">
                    <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/schema-log.png" alt="">
                    </div>
                    <div class="name">Investment</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="https://ap.assetsgeniushub.com/user/transactions">
                    <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/transactions.png" alt="">
                    </div>
                    <div class="name">Transactions</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="https://ap.assetsgeniushub.com/user/deposit">
                    <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/deposit.png" alt="">
                    </div>
                    <div class="name">Deposit</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="https://ap.assetsgeniushub.com/user/deposit/log">
                    <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/deposit-log.png" alt="">
                    </div>
                    <div class="name">Deposit Log</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="https://ap.assetsgeniushub.com/user/wallet-exchange">
                    <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/wallet-exchange.png"
                                           alt="">
                    </div>
                    <div class="name">Wallet Exch.</div>
                </a>
            </div>
        </div>
    </div>
    <div class="moretext">
        <div class="row contents">
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/send-money">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/transfer.png"
                                               alt="">
                        </div>
                        <div class="name">Transfer</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/send-money/log">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/transfer-log.png"
                                               alt="">
                        </div>
                        <div class="name">Transfer Log</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/withdraw">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/withdraw.png"
                                               alt="">
                        </div>
                        <div class="name">Withdraw</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/withdraw/log">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/withdraw-log.png"
                                               alt="">
                        </div>
                        <div class="name">Withdraw Log</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/ranking-badge">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/ranking.png"
                                               alt="">
                        </div>
                        <div class="name">Ranking Badge</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/referral">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/referral.png"
                                               alt="">
                        </div>
                        <div class="name">Referral</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/settings">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/settings.png"
                                               alt="">
                        </div>
                        <div class="name">Settings</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/support-ticket/index">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/support-ticket.png"
                                               alt="">
                        </div>
                        <div class="name">Support Ticket</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://ap.assetsgeniushub.com/user/notification/all">
                        <div class="icon"><img src="https://ap.assetsgeniushub.com/assets/frontend/materials/profile.png"
                                               alt="">
                        </div>
                        <div class="name">Notifications</div>
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
                            <div class="icon"><i icon-name="arrow-left-right"></i></div>
                            <div class="content">
                                <div class="amount count">3</div>
                                <div class="name">All Transactions</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-card">
                            <div class="icon"><i icon-name="download"></i></div>
                            <div class="content">
                                <div class="amount">$<span
                                        class="count">0</span>
                                </div>
                                <div class="name">Total Deposit</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-card">
                            <div class="icon"><i icon-name="box"></i></div>
                            <div class="content">
                                <div class="amount">$<span
                                        class="count">0</span>
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
                                <div class="icon"><i icon-name="credit-card"></i></div>
                                <div class="content">
                                    <div class="amount"> $<span
                                            class="count">10</span>
                                    </div>
                                    <div class="name">Total Profit</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="log-in"></i></div>
                                <div class="content">
                                    <div class="amount">$<span
                                            class="count">0</span>
                                    </div>
                                    <div class="name">Total Transfer</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="send"></i></div>
                                <div class="content">
                                    <div class="amount"> $<span
                                            class="count">0</span>
                                    </div>
                                    <div class="name">Total Withdraw</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="users-2"></i></div>
                                <div class="content">
                                    <div class="amount"> $<span
                                            class="count">0</span>
                                    </div>
                                    <div class="name">Referral Bonus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="anchor"></i></div>
                                <div class="content">
                                    <div class="amount">$<span class="count">0</span>
                                    </div>
                                    <div class="name">Deposit Bonus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="archive"></i></div>
                                <div class="content">
                                    <div class="amount">$<span
                                            class="count">0</span>
                                    </div>
                                    <div class="name"> Investment Bonus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="gift"></i></div>
                                <div class="content">
                                    <div class="amount count">0</div>
                                    <div class="name"> Total Referral</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="award"></i></div>
                                <div class="content">
                                    <div class="amount count"> 1</div>
                                    <div class="name">Rank Achieved</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><i icon-name="alert-triangle"></i>
                                </div>
                                <div class="content">
                                    <div class="amount count">0</div>
                                    <div class="name"> Total Ticket</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="centered">
                    <button class="moreless-button-2 site-btn-sm grad-btn">Load more</button>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Recent Transactions -->
        <div class="all-feature-mobile mobile-transactions mb-3 mobile-screen-show">
    <div class="title">Recent Transactions</div>
    <div class="contents">

                    <div class="single-transaction">
                <div class="transaction-left">
                    <div class="transaction-des">
                        <div class="transaction-title">Deposit With BITCOIN
                        </div>
                        <div class="transaction-id">TRXVVUEDIY3T2</div>
                        <div class="transaction-date">Jan 17 2024 02:33</div>
                    </div>
                </div>
                <div class="transaction-right">
                    <div class="transaction-amount ">
                        +1000 USD</div>
                    <div class="transaction-fee sub">-50 USD Fee </div>
                    <div class="transaction-gateway">BTC</div>


                                            <div class="transaction-status pending">Pending</div>
                                    </div>
            </div>
                    <div class="single-transaction">
                <div class="transaction-left">
                    <div class="transaction-des">
                        <div class="transaction-title">Deposit With BITCOIN
                        </div>
                        <div class="transaction-id">TRXE5ZLSK0YSZ</div>
                        <div class="transaction-date">Jan 17 2024 02:33</div>
                    </div>
                </div>
                <div class="transaction-right">
                    <div class="transaction-amount ">
                        +1000 USD</div>
                    <div class="transaction-fee sub">-50 USD Fee </div>
                    <div class="transaction-gateway">BTC</div>


                                            <div class="transaction-status pending">Pending</div>
                                    </div>
            </div>
                    <div class="single-transaction">
                <div class="transaction-left">
                    <div class="transaction-des">
                        <div class="transaction-title">Signup Bonus
                        </div>
                        <div class="transaction-id">TRXW9DQETSDKR</div>
                        <div class="transaction-date">Jan 16 2024 11:40</div>
                    </div>
                </div>
                <div class="transaction-right">
                    <div class="transaction-amount ">
                        10 USD</div>
                    <div class="transaction-fee sub">-0 USD Fee </div>
                    <div class="transaction-gateway">System</div>


                                            <div class="transaction-status success">Success</div>
                                    </div>
            </div>
            </div>
</div>
    </div>

    <div class="col-12">
        <div class="mobile-ref-url mb-4">
            <div class="all-feature-mobile">
                <div class="title">Referral URL</div>
                <div class="mobile-referral-link-form">
                    <input type="text" value="https://ap.assetsgeniushub.com/register?invite=8BOeet3NR0" id="refLink"/>
                    <button type="submit" onclick="copyRef()">
                        <span id="copy">Copy</span>
                    </button>
                </div>
                <p class="referral-joined">0 peoples are joined by using this URL</p>
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
    <a href="#" class="active">
        <i icon-name="layout-dashboard"></i>
    </a>
    <a href="https://ap.assetsgeniushub.com/user/deposit" class="">
        <i icon-name="download"></i>
    </a>
    <a href="https://ap.assetsgeniushub.com/user/schemas" class="">
        <i icon-name="box"></i>
    </a>
    <a href="https://ap.assetsgeniushub.com/user/referral" class="">
        <i icon-name="gift"></i>
    </a>
    <a href="https://ap.assetsgeniushub.com/user/settings" class="">
        <i icon-name="settings"></i>
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

<script src="https://ap.assetsgeniushub.com/assets/frontend/js/bootstrap.bundle.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/frontend/js/scrollUp.min.js"></script>

<script src="https://ap.assetsgeniushub.com/assets/frontend/js/owl.carousel.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/waypoints.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/frontend/js/jquery.counterup.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery.nice-select.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/lucide.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/frontend/js/magnific-popup.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/frontend/js/aos.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/simple-notify.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/frontend/js/main.js?var=5"></script>
<script src="https://ap.assetsgeniushub.com/assets/frontend/js/cookie.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/custom.js?var=5"></script>
    <script src="https://ap.assetsgeniushub.com/assets/global/js/pusher.min.js"></script>
    <script>
    (function ($) {
        'use strict';

        let pusherAppKey = "";
        let pusherAppCluster = "mt1";
        let soundUrl = "https://ap.assetsgeniushub.com/notification-tune";

        var notification = new Pusher(pusherAppKey, {
            encrypted: true,
            cluster: pusherAppCluster,
        });
        var channel = notification.subscribe('user-notification43');
        channel.bind('notification-event', function (result) {
            playSound();
            latestNotification();
            notifyToast(result);
        });

        function latestNotification() {
            $.get('https://ap.assetsgeniushub.com/user/latest-notification', function (data) {
                $('.user-notifications43').html(data);
            })
        }

        function notifyToast(data) {
            new Notify({
                status: 'info',
                title: data.data.title,
                text: data.data.notice,
                effect: 'slide',
                speed: 300,
                customClass: '',
                customIcon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>',
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 9000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right bottom',
                customWrapper: '<div><a href="' + data.data.action_url + '" class="learn-more-link">Explore<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a></div>',
            })

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
    <script>
        function copyRef() {
            /* Get the text field */
            var textToCopy = $('#refLink').val();
            // Create a temporary input element
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();
            // Copy the text from the temporary input
            document.execCommand('copy');
            // Remove the temporary input element
            tempInput.remove();
            $('#copy').text('Copied'); var copyApi = document.getElementById("refLink");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text('Copied')

        }

        // Load More
        $('.moreless-button').click(function () {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });

        $('.moreless-button-2').click(function () {
            $('.moretext-2').slideToggle();
            if ($('.moreless-button-2').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });
    </script>
    <script>
        // Color Switcher
        $(".color-switcher").on('click', function () {
            "use strict"
            $("body").toggleClass("dark-theme");
            var url = 'https://ap.assetsgeniushub.com/theme-mode';
            $.get(url)
        });
    </script>







</body>
</html>

