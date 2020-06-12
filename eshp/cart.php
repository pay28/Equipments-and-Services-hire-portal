<?php ob_start();
 include('include/client-header.php');  
include('include/connection.php');  
?>
 <style>
 .table-hover tbody tr:hover {
    color: #ff464a;
    background-color: rgba(0,0,0,.075);
}
 </style>
<div class="home-wrapper">   
        <section >
		 <div class="stars"></div><div class="clouds"></div>				
			<div id="homecenter"><div id="home-image" >	
						
				<div id="cf">
				<div id="loginbox" class="mainbox col-md-12 m-auto">                    
            <div class="panel panel-info formbg">
                    <div class="panel-heading">
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Cart Checkout</div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body col-md-12">
		<form action="final-cart.php" method="post">
                <table style="color:#fff;" class="table table-bordered table-hover"><tbody>
                	<tr>
					<th><strong>Client Name</strong></th>
					<th><strong>Select Date of Event </strong></th>
					<th><strong>Address</strong></th>
                	<th><strong>Contact</strong></th>
					<th><strong>Post Code</strong></th>
					<th><strong>Package Name</strong></th>
					<th><strong>Package Price</strong></th>
					<th><strong>Quantity</strong></th>
                  <th><strong>Checkout Price</strong></th>
				  <th><strong>Add more(Desc)</strong></th>
				  
				  </tr>
    			<tr>
		
			
                
    					
        				<td><?php echo $_SESSION['client_name']; ?></td>
						<td><input type="date" name="sdate" required /></td> 
						<?php
						
				$query1=mysqli_query($connect,"SELECT * FROM client_register WHERE id='".$_SESSION['client_id']."'");
						$row2=mysqli_fetch_array($query1);
						$address=$row2['address'];
						$contact=$row2['contact'];
						$postcode=$row2['postcode'];
						?>
						<td><input style="width:70px;" type="text" name="address" value="<?php echo $address; ?>" required /></td>
						<td><input style="width:70px;" type="text" name="contact" value="<?php echo $contact; ?>" required /></td>
						<td><input style="width:70px;" type="text" name="postcode" value="<?php echo $postcode; ?>" required /></td>
						<td><?php echo $_SESSION['pack']; ?></td>
						<td><?php echo $_SESSION['packp']; ?></td>
						<td><?php echo $_SESSION['quantity']; ?></td>

        				<td><?php echo "$".$_SESSION['checkout'];  ?></td>
						<td><input style="width:100px;" type="text" name="desc"  required /></td>
						
               </tr>
			   <tr><td colspan="10" align="right"><input type="submit" name="submitcart" value="Cart Checkout"/></td></tr>
	
		
		
		
		</tbody>
		</table>
		</form>
		<input type="hidden" name="hidden1" value="<?php echo"'". $_SESSION['checkout']."'";  ?>"/>
		<input type="hidden" name="hidden2" value=""/>
		<input type="hidden" name="hidden3" value=""/>
		<input type="hidden" name="hidden4" value=""/>
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