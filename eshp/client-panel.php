<?php ob_start();
 include('include/client-header.php');  
include('include/connection.php');  
?>
<div class="home-wrapper" >   
        <section >
		 <div class="stars"></div><div class="clouds"></div>				
			<div id="homecenter"><div id="home-image" >	
									
				<div id="cf" >

				<div id="loginbox" class="mainbox col-md-12 m-auto" style="margin-top:50px;" >                    
            <div class="panel panel-info formbg col-md-12" >
                    <div class="panel-heading">
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Welcome <?php echo $_SESSION['client_name']; ?></div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     
 <div class="row" style="margin-top:50px;padding:30px;">

										
										<div class="font-icon-list col-lg-2 col-md-4 col-sm-4 col-6">
                                            <div class="font-icon-detail">
                                                <i class="fas fa-briefcase"></i>
                                                <p><a class="white" href="clientpackage.php">Your Packages</a></p>
                                            </div>
                                        </div>
							<div class="font-icon-list col-lg-2 col-md-4 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="fas fa-question"></i>
                                                <p><a class="white" href="cfaq.php">Faqs</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-4 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="fas fa-book"></i>
                                                <p><a class="white" href="paymenthistory.php">Payment History</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-4 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="fas fa-key"></i>
                                                <p><a class="white" href="cpassword.php">Password Settings</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-4 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                                <i class="fas fa fa-unlock-alt"></i>
                                                <p><a class="white" href="cdetail.php">Account Settings</a></p>
                                            </div>
                                        </div>
										<div class="font-icon-list col-lg-2 col-md-4 col-sm-4 col-6">
                                            <div class="font-icon-detail ">
                                               <i class="fas fa-user"></i>
                                                <p><a class="white" href="logout.php">Logout</a></p>
                                            </div>
                                        </div>
                          </div>
                     
                                      
                    </div>  
        </div>
				</div>
				
				<audio id="my"  preload="auto"><source src="audio/Dhol.mp3" type="audio/mpeg"></source><source src="audio/Dhol.ogg" type="audio/ogg"></source></audio>
			</div>			
        </section>
	<?php ob_start();
 include('include/footer.php');  

?>	
