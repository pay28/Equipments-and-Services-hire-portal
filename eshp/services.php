<?php ob_start();
 include('include/header.php');  
include('include/connection.php');  
?>
<style>
footer{
position: relative !important;
}
</style>

<script>
function GetProductDetail(){
		//alert("dsfhj");
	var checkp=$("#checkp").text();
			var cartp=$(".cd-cart__price").text();
			var quantity=$("#cd-product-1").val();
			var truncate=$(".truncate a").text();
			$("#hidden1").val(checkp);
			$("#hidden2").val(cartp);
			$("#hidden3").val(quantity);
			$("#hidden4").val(truncate);
			
			//alert(checkp);
			//alert(cartp);
			//alert(quantity);
	//alert(truncate);
	}
</script>
<div class="serviceswrapper">
		<section class="services-section">
			<div id="about-banner" class="contact-banner col-md-12" > <h1 style="    color: #fff;">Our Services</h1> </div>
				<div class="servicescontent">
				
				<?php
                                      $query=mysqli_query($connect,"select * from package");
$i=1;                                     
									 if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
				
				
				
				
		<!--******************* First Row********************-->
					<div class="pic">
						<img src="wp-admin/<?php echo $row['path']; ?>" class="pic-image" alt="Starter Image"/>
						<h3 id="p<?php echo $i; ?>"><?php echo $row['package_name']; ?></h3><p>STARTING - $<?php echo $row['amount']; ?> - Max <?php echo $row['available']; ?> hours
						  <div class="btn-wrap">
			 
               <a href="#0"  class="btn-buy js-cd-add-to-cart" data-price="<?php echo $row['amount']; ?>">Add To Cart</a>
              </div>
						
						</p>
						<span class="pic-caption come-right">
						<?php

$array =  explode(',', $row['highlight']);
?>
							<h1 class="pic-title"><span style="color:red;"><?php echo $row['package_name']; ?> Highlights: </span><p></p>
							<?php
foreach ($array as $item) {
   ?>
   
							<span class="captionstyle"><i class="fa fa-check"></i></span> <?php echo $item;?><p></p>
							<?php
}
						?>
							
							<p>&nbsp;</p></h1>
							</span>
					</div>
					
					 
                                                <?php
												$i++;
                                           }   
                                      } 
                                      ?>
					
			 </div>
			 <div class="packdetails col-md-12 ">
			 <h3> Which Pack should I choose?</h3>
<table class="table table-bordered table-hover">
<tbody>
<tr>
<th >
<h2><span style="background: linear-gradient(315deg, #d2ccc4 0%, #cfd6e6 74%);
-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Starter Pack - Silver</span>
</th>
<th >
<h2><span style="background:linear-gradient(315deg, #fec84e 0%, #ffdea8 74%); -webkit-background-clip:text; -webkit-text-fill-color:transparent;"> Advanced Pack - Gold </span></h2>
</th>
<th>
 <h2><span style="background: linear-gradient(315deg ,  #414141 10%, #000000 50%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Pro Pack - Platinum</span></h2>
</th>
</tr>
<tr>
<td >
<p>Budget friendly & economic<br> Suits small-sized house parties.</p>
</td>
<td >
<p>Classy and Presentable <br/>Best suited for Medium size parties held at venues like restaurants or halls</p>
</td>
<td >
<p>Suits larger venues for wedding and reception parties creating an exciting atmosphere </p>
</td>
</tr>
<tr>
<td >
<p><span style="font-weight:bold;background: linear-gradient(315deg, #d2ccc4 0%, #cfd6e6 74%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"> Equipped with:</span></p>
				<p><span class="captionstyle" style="color:#d2ccc4;"><i class="fa fa-check"></i></span> Two 15 inch JBL high class loudspeakers, 1000 Watts each</p>
				<p><span class="captionstyle" style="color:#d2ccc4;"><i class="fa fa-check"></i></span> One 18 inch JBL sub woofer, 1000 Watts delivering Extreme Bass</p>
				<p><span class="captionstyle" style="color:#d2ccc4;"><i class="fa fa-check"></i></span>Basic DJ lights</p>
				<p><span class="captionstyle" style="color:#d2ccc4;"><i class="fa fa-check"></i></span>Smoke machine</p>
				<p><span class="captionstyle" style="color:#d2ccc4;"><i class="fa fa-check"></i></span>6 metre wired microphone, ready to use for speech / Boliyaan</p>
</td>
<td >
<p><span style="font-weight:bold;background: linear-gradient(315deg, #fec84e 0%, #ffdea8 74%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"> Equipped with:</span></p><p><span class="captionstyle" style="color:#f9d7a5;"><i class="fa fa-check"></i></span> Starter Pack</p>
				<p><span class="captionstyle" style="color:#f9d7a5;"><i class="fas fa-plus"></i></span>Advanced DJ lights and an additional Smoke machine</p>
				<p><span class="captionstyle" style="color:#f9d7a5;"><i class="fas fa-plus"></i></span>Improved asthetics with DJ Facade and Par Can lights</p>
				<p><span class="captionstyle" style="color:#f9d7a5;"><i class="fas fa-plus"></i></span>Two Wireless microphones, ready to use for speeches / Boliyaan</p>
</td>
<td >
<p><span style="font-weight:bold;background: linear-gradient(315deg ,  #414141 10%, #000000 50%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"> Equipped with:</span></p><p><span class="captionstyle" style="color:#000;"><i class="fa fa-check"></i></span> Advanced Pack</p>
				<p><span class="captionstyle" style="color:#000;"><i class="fas fa-plus"></i></span> Additional 18 inch Subwoofer for earth-shaking BASS, 3600 Watts</p>
				<p><span class="captionstyle" style="color:#000;"><i class="fas fa-plus"></i></span>Pro DJ lights</p>
				<p><span class="captionstyle" style="color:#000;"><i class="fas fa-plus"></i></span>Fog machine.</p>
				<p><span class="captionstyle" style="color:#000;"><i class="fas fa-plus"></i></span>Dholi<sup> *</sup> </p>
				<p><span class="captionstyle" style="color:#000;"><i class="fas fa-plus"></i></span>Dance floor<sup> *</sup> </p>
</td>
</tr>

</tbody>
</table>

<p>&nbsp;</p><p>&nbsp;</p>
				<p id="terms"><sup> *</sup>Available upon request. Dance Floor, charges extra</p>
			 <hr/><p>&nbsp;</p><p>&nbsp;</p>
			 
			 
			 </div>
</section>
<div class="cd-cart cd-cart--empty js-cd-cart">
	<a href="#0" class="cd-cart__trigger text-replace">
		Cart
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<div class="cd-cart__footer">
				<a href="#" onclick="GetProductDetail();" data-toggle="modal" data-target="#myModal2" class="cd-cart__checkout">
          <em >Checkout - $<span id="checkp">0</span>
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
        </a>
			</div>
		</div>
	</div> <!-- .cd-cart__content -->
</div>
<?php
if(isset($_POST['submit3']))
                        {
							 $_SESSION['checkout']=trim($_POST['checkout']);
							 $_SESSION['packp']=trim($_POST['packp']);
							  $_SESSION['quantity']=trim($_POST['quantity']);
							   $_SESSION['pack']=trim($_POST['pack']);
                            $username=trim($_POST['username']);
                            $password=trim($_POST['password']);
                            $query_login=mysqli_query($connect, "select * from client_register where username='$username' and password='$password'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
										

                              $_SESSION['client_id']=$row_login['id'];  
                              $_SESSION['client_name']=$row_login['username'];  
                                 
                                 echo '<script >
								// var checkp=$("#checkp").text();
			// var cartp=$(".cd-cart__price").text();
			// var quantity=$("#cd-product-1").val();
			// var truncate=$(".truncate a").text();
                                 alert("Login Successfully");
								 //GetProductDetail();
                                window.location.href="cart.php";
                                </script>';
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
  <div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
					<div class="panel-title" style="text-align: center;color: red;font-size:20px;font-weight:700;margin:30px;">Client Sign In</div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div> 
						<div class="login-right">
						  <form id="loginform" action="" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                <input type="hidden" id="hidden1" name="checkout">
                                    <input type="hidden" id="hidden2" name="packp">
									<input type="hidden" id="hidden3" name="quantity">
									<input type="hidden" id="hidden4" name="pack">
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
						<div class="clearfix"></div>								
					</div>
					
				</div>
		  </div>

		</div>
	  </div>
	</div>
  

<?php ob_start();
 include('include/footer.php');  

?>	

 
  