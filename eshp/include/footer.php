<?php ob_start();
//session_start();
include('include/connection.php');
?>
		<script>//audio to be played on Hover
			var x = document.getElementById("my"); 
			function playAudio() {x.volume=0.1;x.play(); }
			function pauseAudio() { x.pause(); }</script>
	        <footer>
			<!--<p id="demo" style="color:blue; z-index:999999"></p>  -->
			<div id="designedBy"><p>Created By: Jagtar Singh</p></div>
			<div id="copyright"><p>&copy; DJ JagStar 2020 </p><p style="padding-top:2%;font-size:10px;">ABN: 67 172 234 012</p></div>
            <div id="social">
					<a href="mailto:djjagstar@gmail.com" target="_blank"><img alt="Google+" title="Send Email"class="tilt" src="images/mail.png" /></a>
					<a href="https://www.instagram.com/djjagstar/" target="_blank"><img alt="Insta" title="Instagram" class="tilt" src="images/insta.png" /></a>
					<a href="http://www.facebook.com/DjJagStar" target="_blank"><img class="tilt"  title="Facebook" alt="Facebook" src="images/social-facebook.png" /></a>
            </div>
			<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
					 <?php 
                         if(isset($_POST['submit2']))
                        {
							
                            $email_login=$_POST['email'];
                            $pass_login=md5($_POST['pass']);
                          $query_login=mysqli_query($connect, "select * from myadmin where username='$email_login' and password='$pass_login'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
                                $_SESSION['admin_id']=$row_login['id'];  
                                 
                                echo '<script>
                                 alert("Admin Login Successfully");
                                window.location.href="wp-admin/index.php";
                                </script>';                                 
                                //$url=$_SERVER['REQUEST_URI'];
                                header("refresh:1;Location: wp-admin/index.php"); 
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
					
						<div class="login-right">
                        							<form method="post" action="" id="ref">
								<h3>Signin Admin Panel </h3>
							  <div class="form-group">
    <input class="form-control" type="text" placeholder="Username" style="color: #333;" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">	
  </div>
  <div class="form-group">
    <input class="form-control" type="password" placeholder="Password" name="pass" style="color: #333;" required="">
  </div>	
								<input class="form-control btn btn-primary" type="submit" value="SIGN IN" name="submit2">
							</form>
						</div>
						<div class="clearfix"></div>								
					</div>
					
				</div>
		  </div>

		</div>
	  </div>
	</div>
		
        </footer>
		  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Cart work start -->
  <script src="cart/assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="cart/assets/js/main.js"></script> 
   
   </div>
</body>
</html>