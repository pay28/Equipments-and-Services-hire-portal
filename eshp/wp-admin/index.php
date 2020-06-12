<?php ob_start();
include('includes/header.php');
include('includes/sidebar.php');
include('includes/connection.php');
 ?>

      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Welcome Admin
                          </header>
                         
                            <div class="row">
<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail">
                                               <i class="icon-user red"></i>
                                             <p>   <a  href="registration.php">View Client Registration Detail</a>
                                            </p></div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail">
                                                <i class="icon-suitcase green"></i>
                                                <p><a  href="u_package.php">Update Packages</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail">
                                                <i class="icon-shopping-cart icon-large red"></i>
                                                <p><a  href="vieworderpackage.php">View Ordered Package</a></p>
                                            </div>
                                        </div>
							<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="icon-fixed-width icon-book green"></i>
                                                <p><a  href="viewpayments.php">View Payment History</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="icon-cog red"></i>
                                                <p><a  href="profile.php">Profile Settings</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="icon-key green"></i>
                                                <p><a  href="../logout.php">Logout</a></p>
                                            </div>
                                        </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
<?php include('includes/footer.php');
?>