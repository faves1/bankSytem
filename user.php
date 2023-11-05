<?php
  session_start();

  if (!isset($_SESSION["u_email"])) {
    header("Location: loginpage.php");
  }
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

 <!-- Google tag (gtag.js) -->
    <script async="" src="resources/js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-M8S4MT3EYG');
 </script>


<!-- Favicon icon-->


<!-- Libs CSS -->
<link href="resources/bootstrap-icons.css" rel="stylesheet">
<link href="resources/materialdesignicons.min.css" rel="stylesheet">
<link href="resources/simplebar.min.css" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="resources/theme.min.css">
  <title>Dashboard</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">

    <div class="header">
  <!-- navbar -->
 <div class="navbar-custom navbar navbar-expand-lg">
    <div class="container-fluid px-0">
    <a class="navbar-brand d-block d-md-none">
      <img src="resources/logo-2.svg" alt="Image">
  </a>



    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3 ">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
        <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
      </svg></a>

    <div class="d-none d-md-none d-lg-block">
      
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
      <a href="#" class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0 ">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>

			   </a>
        

      <li class="dropdown stopevent ms-2">
        <a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-xs"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
          <div>
            <div class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
              <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
              <a href="#!" class="text-muted">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-1 icon-xs"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </span>
              </a>
            </div>
            <div data-simplebar="init" style="height: 250px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
            <!-- List group -->
            <ul class="list-group list-group-flush notification-list-scroll">
              <!-- List group item -->
              <li class="list-group-item bg-light">


               <!-- <a href="#!" class="text-muted">
                    <h5 class=" mb-1">Rishi Chopra</h5>
                    <p class="mb-0">
                      Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                    </p>
                </a>



          </li>
              List group item -->
            <!-- <li class="list-group-item">


              <a href="#!" class="text-muted">
                  <h5 class=" mb-1">Neha Kannned</h5>
                  <p class="mb-0">
                    Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                  </p>
              </a>



              </li>
              List group item 
              <li class="list-group-item">


                <a href="#!" class="text-muted">
                    <h5 class=" mb-1">Nirmala Chauhan</h5>
                    <p class="mb-0">
                      Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                    </p>
                </a>



              </li>
               List group item 
              <li class="list-group-item">


                    <a href="#!" class="text-muted">
                        <h5 class=" mb-1">Sina Ray</h5>
                        <p class="mb-0">
                          Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.
                        </p>
                    </a>



              </li>
              
            </ul>
-->
            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
            <div class="border-top px-3 py-2 text-center">
              <a href="#!" class="text-inherit ">
                View all Notifications
              </a>
            </div>
          </div>
        </div>
      </li>
      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="resources/avatar-11.jpg" class="rounded-circle">
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
              <h5 class="mb-1"> <?php if(isset($_SESSION)){ echo $_SESSION['u_first']." ".$_SESSION['u_last'];} ?></h5>
              <a href="#!" class="text-inherit fs-6">View my profile</a>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2 icon-xxs dropdown-item-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Edit
                Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity me-2 icon-xxs dropdown-item-icon"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>Activity Log
              </a>


            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="#!">

                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Settings
              </a>
            </li>
            <li>
              <form action="includes/signout.inc.php" method="POST">
              <a class="dropdown-item" href="includes/signout.inc.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power me-2 icon-xxs dropdown-item-icon"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>Sign Out
              </a>  
              
            </li>
          </ul>

        </div>
      </li>
    </ul>
    </div>
  </div>
</div>
    <!-- navbar vertical -->

     <!-- Sidebar -->

 <div class="navbar-vertical navbar nav-dashboard">
     <div class="h-100" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
         <!-- Brand logo -->
         <a class="navbar-brand" href="#">
             <img src="resources/logo1.jpg" alt="Logo" style="height: 4.05rem">
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home nav-icon me-2 icon-xxs"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                      Dashboard
                 </a>

                 <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link " href="user.php">
                                 Account </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link " href="deposit.php">
                                 Deposit </a>
                         </li>


                         <li class="nav-item">
                             <a class="nav-link has-arrow   " href="withdraw.php">
                                 Withdraw
                             </a>

                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow   " href="transactHistory.php">
                                 Transaction History
                             </a>



                         </li>
                         <li class="nav-item">
                            <a class="nav-link has-arrow   active  ">
                                Account Settings
                            </a>

                        </li>
                         <li class="nav-item">
                            <a class="nav-link has-arrow   " href="includes/signout.inc.php">
                                Logout
                            </a>

                        </li>



                     </ul>
                 </div>

             </li>

            
         <div class="card bg-light shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">
                <img src="resources/giftbox.png" alt="dash ui - admin dashboard template">
                <div class="mt-4">
                    <h5>Unlimited Access</h5>
                    <p class="fs-6 mb-4">
                        Upgrade your plan from a Free trial, to select Business Plan. Start Now
                    </p>
                    <a href="#" class="btn btn-secondary btn-sm">Upgrade Now</a>
                </div>
            </div>
        </div>

     </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1531px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 392px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
    </div>


    <!-- page content -->
   <div id="app-content">
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="d-flex justify-content-between align-items-center mb-5">
                <h3 class="mb-0 ">Email: <?php if(isset($_SESSION)){ echo $_SESSION['u_email'];} ?></h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6 col-12 mb-5">
              <div class="card h-100">
                <div class="card-body">
                  <small>Account Type</small>
                  <div class="d-flex justify-content-between mt-3 mb-8">
                    <div>
                      <h3 class="mb-0"><?php if(isset($_SESSION)){ echo $_SESSION['u_actype'];} ?></h3>
                      <small>**** **** **** 9472</small>
                    </div>
                    <div class="text-end">
                      <h3 class="mb-0">
                        <span class="text-muted me-1">$</span><?php if(isset($_SESSION)){ echo $_SESSION['u_acBal'];} ?>
                      </h3>
                      <small>Available Funds</small>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <div class="d-flex align-items-center">
                        <div class="icon-md icon-shape bg-primary-soft rounded-3 text-primary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up icon-xs"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0">3,456.87</h4>
                          <small>Income</small>
                        </div>
                      </div>
                      <div class="d-flex align-items-center ms-6">
                        <div class="icon-md icon-shape bg-danger-soft text-danger rounded-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down icon-xs"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0">1,538.23</h4>
                          <small>Expenses</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block">
                      <a href="withdraw.php" class="btn btn-primary"> - Withdraw</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-12 mb-5">
              <div class="row">
                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                  <div class="card h-100 ">
                    <div class="card-body ">
                      <div class="mb-9">
                        <div class="icon-shape icon-xxl rounded-circle bg-primary-soft">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-wallet text-primary" viewBox="0 0 16 16">
                            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"></path>
                          </svg>

                        </div>
                      </div>
                      <span>Total Balance</span>
                      <h3 class="mb-0 fw-bold">$ 6,234.78</h3>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="mb-9">
                        <div class="icon-shape icon-xxl rounded-circle bg-danger-soft">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor " class="bi bi-piggy-bank text-danger" viewBox="0 0 16 16">
                            <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z"></path>
                            <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z"></path>
                          </svg>
                        </div>
                      </div>
                      <span>Total Spending</span>
                      <h3>$ 8,123.82</h3>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="mb-9">
                        <div class="icon-shape icon-xxl rounded-circle bg-success-soft">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cash text-success" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"></path>
                          </svg>
                        </div>
                      </div>
                      <span>Total Saved</span>
                      <h3>$ 68,345.23</h3>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xxl-3 col-lg-6 mb-5">
              <div class="position-relative">
                <div class="card-selected card-lift">
                  <div>
                    <input class="form-check-input mt-4 position-absolute start-0 top-0 z-1 ms-4 mt-4" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-end mb-6">
                          <h4 class="text-color-change">CARD</h4>
                        </div>
                        <div class="mb-6">
                          <small>**** **** **** 9472</small>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <small>Available Funds</small>
                            <h4 class="text-color-change mb-0">$ 8,567.43</h4>
                          </div>
                          <div class="d-flex">
                            <div>
                              <small>Expires</small>
                              <h4 class="text-color-change mb-0">12/23</h4>
                            </div>
                            <div class="ms-6">
                              <small>CVV</small>
                              <h4 class="text-color-change mb-0">235</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xxl-3 col-lg-6 mb-5">
              <div class="position-relative">
                <div class="card-selected card-lift">
                  <div>
                    <input class="form-check-input mt-4 position-absolute start-0 top-0 z-1 ms-4 mt-4" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked="checked">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-end mb-6">
                          <h4 class="text-color-change">CARD</h4>
                        </div>
                        <div class="mb-6">
                          <small>**** **** **** 8470</small>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <small>Available Funds</small>
                            <h4 class="text-color-change mb-0">$ 9,231.22</h4>
                          </div>
                          <div class="d-flex">
                            <div>
                              <small>Expires</small>
                              <h4 class="text-color-change mb-0">12/20</h4>
                            </div>
                            <div class="ms-6">
                              <small>CVV</small>
                              <h4 class="text-color-change mb-0">845</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-12 mb-5 mb-xl-0">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Cashflow</h4>
                  <a href="#!" class="btn btn-primary btn-sm">Check Details
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right icon-xs"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <span>Daily</span>
                      <h4 class="mb-0 mt-1">$ 368.49</h4>
                    </div>
                    <div>
                      <span>Weekly</span>
                      <h4 class="mb-0 mt-1">$ 2,598.45</h4>
                    </div>
                    <div>
                      <span>Monthly</span>
                      <h4 class="mb-0 mt-1">$ 9,600.00</h4>
                    </div>
                  </div>
                  <div id="cashFlowChart" class="my-10 justify-content-center d-flex" style="min-height: 222.8px;"> <div id="apexchartsqntcayod" class="apexcharts-canvas apexchartsqntcayod apexcharts-theme-light" style="width: 374px; height: 222.8px;"><svg id="SvgjsSvg1001" width="374" height="222.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(80, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMaskqntcayod"><rect id="SvgjsRect1005" width="220" height="238" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqntcayod"></clipPath><clipPath id="nonForecastMaskqntcayod"></clipPath><clipPath id="gridRectMarkerMaskqntcayod"><rect id="SvgjsRect1006" width="220" height="242" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1007" class="apexcharts-pie"><g id="SvgjsG1008" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1009" r="81.09268292682927" cx="108" cy="108" fill="transparent"></circle><g id="SvgjsG1010" class="apexcharts-slices"><g id="SvgjsG1011" class="apexcharts-series apexcharts-pie-series" seriesName="Income" rel="1" data:realIndex="0"><path id="SvgjsPath1012" d="M 108 6.634146341463406 A 101.3658536585366 101.3658536585366 0 1 1 81.45588293909483 205.82865703555794 L 86.76470635127586 186.26292562844634 A 81.09268292682927 81.09268292682927 0 1 0 108 26.90731707317073 L 108 6.634146341463406 z" fill="var(--dashui-primary)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="195.18072289156626" data:startAngle="0" data:strokeWidth="0" data:value="45" data:pathOrig="M 108 6.634146341463406 A 101.3658536585366 101.3658536585366 0 1 1 81.45588293909483 205.82865703555794 L 86.76470635127586 186.26292562844634 A 81.09268292682927 81.09268292682927 0 1 0 108 26.90731707317073 L 108 6.634146341463406 z"></path></g><g id="SvgjsG1013" class="apexcharts-series apexcharts-pie-series" seriesName="Expenses" rel="2" data:realIndex="1"><path id="SvgjsPath1014" d="M 81.45588293909483 205.82865703555794 A 101.3658536585366 101.3658536585366 0 0 1 107.98230832113543 6.6341478853536415 L 107.98584665690835 26.90731830828291 A 81.09268292682927 81.09268292682927 0 0 0 86.76470635127586 186.26292562844634 L 81.45588293909483 205.82865703555794 z" fill="var(--dashui-warning)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="164.81927710843374" data:startAngle="195.18072289156626" data:strokeWidth="0" data:value="38" data:pathOrig="M 81.45588293909483 205.82865703555794 A 101.3658536585366 101.3658536585366 0 0 1 107.98230832113543 6.6341478853536415 L 107.98584665690835 26.90731830828291 A 81.09268292682927 81.09268292682927 0 0 0 86.76470635127586 186.26292562844634 L 81.45588293909483 205.82865703555794 z"></path></g></g></g></g><line id="SvgjsLine1015" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1016" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--dashui-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: var(--dashui-warning);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                  <div class="row justify-content-center">
                    <div class="col-md-4 col-6">
                      <div class="rounded-3 d-flex bg-warning-soft text-warning p-4">
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down icon-xs"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0 text-warning">1,538.23</h4>
                          <small>Expenses</small>
                        </div>
                      </div>
                    </div>
                    <div class=" col-md-4 col-6">

                      <div class="rounded-3 d-flex bg-primary-soft  p-4 text-primary ">
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up text-primary icon-xs"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0 text-primary">3,456.87</h4>
                          <small>Income</small>
                        </div>
                      </div>
                    </div>


                  </div>


                </div>
              </div>
            </div>

            <div class="col-xl-8 col-12 mb-5 mb-xl-0">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Latest Transactions</h4>
                  <a href="#!" class="btn btn-primary btn-sm">All transactions
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right icon-xs"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table text-nowrap table-centered mb-0">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Type</th>
                          <th scope="col">Payment</th>
                          <th scope="col">Amount</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>25/07/2023</td>
                          <td>Clothes</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $15.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>20/07/2023</td>
                          <td>Food</td>
                          <td>Transfer</td>
                          <td><span class="text-danger">- $15.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>16/07/2023</td>
                          <td>Medical Checkup</td>
                          <td>Salary</td>
                          <td><span class="text-success">$9000.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>12/07/2023</td>
                          <td>Clothes</td>
                          <td>Freelancing</td>
                          <td><span class="text-success">$1300.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>06/07/2023</td>
                          <td>Financial</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $25.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>06/06/2023</td>
                          <td>Subscriptions</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $115.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>06/05/2023</td>
                          <td>Rent</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $46.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>03/05/2023</td>
                          <td>Maintenance</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $15.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <!-- apexchart js -->

  <!-- Libs JS -->
<script src="resources/jquery.min.js"></script>
<script src="resources/bootstrap.bundle.min.js"></script>
<script src="resources/feather.min.js"></script>
<script src="resources/simplebar.min.js"></script>




<!-- Theme JS -->
<script src="resources/theme.min.js"></script>
  <script src="resources/apexcharts.min.js"></script>
  <script src="resources/chart.js"></script>




<svg id="SvgjsSvg1017" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1018"></defs><polyline id="SvgjsPolyline1019" points="0,0"></polyline><path id="SvgjsPath1020" d="M0 0 "></path></svg></body></html>