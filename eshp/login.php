<?php ob_start();
 include('include/header.php');  
include('include/connection.php');  
?>
<div class="home-wrapper">   
        <section >
		 <div class="stars"></div><div class="clouds"></div>				
			<div id="homecenter"><div id="home-image" >	
						
				<div id="cf">
				<div id="loginbox" class="mainbox col-md-4 m-auto">                    
            <div class="panel panel-info formbg">
                    <div class="panel-heading">
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Client Sign In</div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body">
<?php 
                         if(isset($_POST['submit3']))
                        {
							
                            $username=trim($_POST['username']);
                            $password=trim($_POST['password']);
                            $query_login=mysqli_query($connect, "select * from client_register where username='$username' and password='$password'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
										

                              $_SESSION['client_id']=$row_login['id'];  
                              $_SESSION['client_name']=$row_login['username'];  
                                 
                                echo '<script>
                                 alert("Client Login Successfully");
                                window.location.href="client-panel.php";
                                </script>';                                 
                                //$url=$_SERVER['REQUEST_URI'];
                                header("refresh:1;Location: client-panel.php"); 

			                    }
                            }
                             else
                             {
                                 echo '<script>
                                 alert("username and password mismatch.");
                                 </script>';
                            }
						}							
							
                        ?>
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                        


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
									<input type="submit" value="Login" name="submit3" class="btn btn-success">  
                                     <!-- <a id="btn-login" name="mysingin" href="index.php" class="btn btn-success">Login  </a>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:120%">
                                            Don't have an account! 
                                        <a href="register.php">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



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
