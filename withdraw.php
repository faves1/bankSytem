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
            <img alt="avatar" src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-11.jpg" class="rounded-circle">
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
             <img src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/logo1.jpg" alt="Logo" style="height: 4.05rem">
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
                            <a class="nav-link has-arrow   active  ">   Account Settings
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
                <img src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/giftbox.png" alt="dash ui - admin dashboard template">
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
    

<!-- Input -->
<div id="app-content">
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="d-flex justify-content-between align-items-center mb-5">
                <h3 class="mb-0 ">Withdrawal Form</h3>
              </div>
            </div>
          </div>
  

            

            <!-- Validation Form -->
            <form class="row g-3 needs-validation" method="POST" action="includes/processWithdrawal.php" novalidate>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Amount</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                 <input type="number" class="form-control" id="validationCustom01" name="amount" required>
                 <div class="valid-feedback">
                   good!
                 </div>
                </div>
              </div>
</br>
              <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Reason for Withdrawal</label>
                <input type="text" class="form-control" id="validationCustom03" name="reason" required>
                <div class="invalid-feedback">
                  Please provide a reason.
                </div>
              </div>
</br>
              <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Destination Account</label>
                <select class="form-select" id="validationCustom04" name="dest" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Bank Transfer</option>
                  <option>Crypto Transfer</option>
                </select>
                <div class="invalid-feedback">
                  Please select an option.
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Account Address </label>
                <input type="text" class="form-control" id="validationCustom03" name="acctDes" required>
                <div class="invalid-feedback">
                  Please provide a valid Account details.
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="pay">Submit form</button>
              </div>
            </form>
            </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 <!-- Scripts -->
  <!-- apexchart js -->

  <!-- Libs JS -->
  <script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/jquery.min.js"></script>
<script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/bootstrap.bundle.min.js"></script>
<script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/feather.min.js"></script>
<script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/simplebar.min.js"></script>




<!-- Theme JS -->
<script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/theme.min.js"></script>
  <script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/apexcharts.min.js"></script>
  <script src="Finance%20Dash%20UI%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/chart.js"></script>




<svg id="SvgjsSvg1017" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1018"></defs><polyline id="SvgjsPolyline1019" points="0,0"></polyline><path id="SvgjsPath1020" d="M0 0 "></path></svg></body></html>