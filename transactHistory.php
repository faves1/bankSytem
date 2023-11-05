<?php
  session_start();
?>
<?php
session_start();
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


<link rel="stylesheet" href="transat_files/style.css">
    <!-- font css -->
    <link rel="stylesheet" href="transat_files/tabler-icons.min.css">
    <link rel="stylesheet" href="transat_files/feather.css">
    <link rel="stylesheet" href="transat_files/fontawesome.css">
    <link rel="stylesheet" href="transat_files/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="transat_files/style_002.css" id="main-style-link">
    <link rel="stylesheet" href="transat_files/style-preset.css">


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
    <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12" style="margin-left: 300px; margin-top: 50px;">
                <div class="card">
                    <div class="card-header">
                        <h5>Transactions </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
    <div class="datatable-dropdown">
            <label>
                <select class="datatable-selector"><option value="5">5</option><option value="10" selected="selected">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page
            </label>
        </div>
    <div class="datatable-search">
            <input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="report-table">
        </div>
</div>
<div class="datatable-container"><table id="report-table" class="table table-striped mb-0 datatable-table"><thead><tr><th data-sortable="true" style="width: 10.743801652892563%;"><a href="#" class="datatable-sorter">ID</a></th><th data-sortable="true" style="width: 10.991735537190083%;"><a href="#" class="datatable-sorter">TYPE</a></th><th data-sortable="true" style="width: 14.710743801652892%;"><a href="#" class="datatable-sorter">AMOUNT</a></th><th data-sortable="true" style="width: 11.570247933884298%;"><a href="#" class="datatable-sorter">PRICE</a></th><th data-sortable="true" style="width: 13.223140495867769%;"><a href="#" class="datatable-sorter">USD ($)</a></th><th data-sortable="true" style="width: 13.057851239669422%;"><a href="#" class="datatable-sorter">FEE (%)</a></th><th data-sortable="true" style="width: 13.471074380165291%;"><a href="#" class="datatable-sorter">STATUS</a></th><th data-sortable="true" style="width: 12.231404958677686%;"><a href="#" class="datatable-sorter">TIME</a></th></tr></thead><tbody><tr data-index="0"><td>
                                            <div>#14342</div>
                                        </td><td>
                                            <div class="text-success">bank</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>0.586
                                            </div>
                                        </td><td>
                                            <div>119.12</div>
                                        </td><td>
                                            <div>979.78</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-success rounded-pill">Completed</div>
                                        </td><td>
                                            <div>04.40 am</div>
                                        </td></tr><tr data-index="1"><td>
                                            <div>#14321</div>
                                        </td><td>
                                            <div class="text-danger">crypto</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-ethereum m-r-5"></i>1.386</div>
                                        </td><td>
                                            <div>134.12</div>
                                        </td><td>
                                            <div>346.23</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-danger rounded-pill">Cancel</div>
                                        </td><td>
                                            <div>03.50 pm</div>
                                        </td></tr><tr data-index="2"><td>
                                            <div>#23531</div>
                                        </td><td>
                                            <div class="text-success">Buy</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-asymmetrik m-r-5"></i>0.231
                                            </div>
                                        </td><td>
                                            <div>124.12</div>
                                        </td><td>
                                            <div>456.23</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-success rounded-pill">Completed</div>
                                        </td><td>
                                            <div>12.23 pm</div>
                                        </td></tr><tr data-index="3"><td>
                                            <div>#12463</div>
                                        </td><td>
                                            <div class="text-success">bank</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>0.231
                                            </div>
                                        </td><td>
                                            <div>231.12</div>
                                        </td><td>
                                            <div>346.34</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-primary rounded-pill">Pending</div>
                                        </td><td>
                                            <div>02.12 pm</div>
                                        </td></tr><tr data-index="4"><td>
                                            <div>#12431</div>
                                        </td><td>
                                            <div class="text-danger">crypto</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>2.945
                                            </div>
                                        </td><td>
                                            <div>431.12</div>
                                        </td><td>
                                            <div>125.12</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-danger rounded-pill">Cancel</div>
                                        </td><td>
                                            <div>10.00 am</div>
                                        </td></tr><tr data-index="5"><td>
                                            <div>#12532</div>
                                        </td><td>
                                            <div class="text-danger">bank</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-asymmetrik m-r-5"></i>0.235
                                            </div>
                                        </td><td>
                                            <div>215.34</div>
                                        </td><td>
                                            <div>236.12</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-primary rounded-pill">Pending</div>
                                        </td><td>
                                            <div>08.22 am</div>
                                        </td></tr><tr data-index="6"><td>
                                            <div>#23165</div>
                                        </td><td>
                                            <div class="text-success">bank</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-bitcoin m-r-5"></i>2.346
                                            </div>
                                        </td><td>
                                            <div>235.12</div>
                                        </td><td>
                                            <div>332.23</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-success rounded-pill">Completed</div>
                                        </td><td>
                                            <div>12.43 am</div>
                                        </td></tr><tr data-index="7"><td>
                                            <div>#63423</div>
                                        </td><td>
                                            <div class="text-danger">crypto</div>
                                        </td><td>
                                            <div class="amount">
                                                <i class="fab fa-ethereum m-r-5"></i>3.213
                                            </div>
                                        </td><td>
                                            <div>456.12</div>
                                        </td><td>
                                            <div>231.53</div>
                                        </td><td>
                                            <div>0.2</div>
                                        </td><td>
                                            <div class="badge bg-primary rounded-pill">Pending</div>
                                        </td><td>
                                            <div>11.21 am</div>
                                        </td></tr></tbody></table></div>
<div class="datatable-bottom">
    <div class="datatable-info">Showing 1 to 8 of 8 entries</div>
    <nav class="datatable-pagination"><ul class="datatable-pagination-list"></ul></nav>
</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>

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