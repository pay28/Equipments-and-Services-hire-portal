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
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Final Cart Out</div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body">
		
                <table style="color:#fff;" class="table table-bordered table-hover"><tbody>
                	<tr>
					<th><strong>Client ID</strong></th>
					<th><strong>Client Name</strong></th>
					<th><strong>Select Date of Event </strong></th>
					<th><strong>Address</strong></th>
                	<th><strong>Contact</strong></th>
					<th><strong>Post Code</strong></th>
					<th><strong>Package Name</strong></th>
					<th><strong>Package Price</strong></th>
					<th><strong>Quantity</strong></th>
                  <th><strong>Checkout Price</strong></th></tr>
    			<tr>
		
			
                
    					<td><?php echo $_SESSION['client_id']; ?></td>

        				<td><?php echo $_SESSION['client_name']; ?></td>
						
						<?php
				if(isset($_POST['submitcart']))
				{					
					$address=$_POST['address'];
						$contact=$_POST['contact'];
						$postcode=$_POST['postcode'];
						$sdate=$_POST['sdate'];
						$descr=$_POST['desc'];
						
						$query="insert into order_package(cid,cname,cdate,address,contact,postcode,pname,pprice,quantity,total,descr) values('".$_SESSION['client_id']."','".$_SESSION['client_name']."','$sdate','$address','$contact','$postcode','".$_SESSION['pack']."','".$_SESSION['packp']."','".$_SESSION['quantity']."','".$_SESSION['checkout']."','$descr')";
						 mysqli_query($connect,$query);
						?>
						<td><?php echo $sdate; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $contact; ?></td>
						<td><?php echo $postcode; ?></td>
<?php 
				}
?>		

		<td><?php echo $_SESSION['pack']; ?></td>
						<td><?php echo $_SESSION['packp']; ?></td>
						<td><?php echo $_SESSION['quantity']; ?></td>

        				<td><?php echo "$".$_SESSION['checkout'];  ?></td>
						
               </tr>
			   <tr><td colspan="10" align="right"><div id="paypal-button"></div></td></tr>
	
		
		
		
		</tbody>
		</table>
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
 
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AX0jbHEfVdxo6XiS_ORb9i55UEB87jHNYZCDJOjMpN6PeJOv-owKNWJXdsXijrzYsVq9Pjk1RC56OMX4',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'blue',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
		
	  return actions.payment.create({
	

        transactions: [{
          amount: {
            total: '100',
            currency: 'AUD'
          }
        }],
		redirect_urls:
        {
          return_url: 'localhost/eshp/eshp/execute-payment.php',
		}
		
	  
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
    //  window.alert('Thank you for your purchase!');
		return actions.redirect();
      });
    }
  }, '#paypal-button');

</script>