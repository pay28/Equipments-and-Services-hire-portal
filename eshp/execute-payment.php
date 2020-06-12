<?php ob_start();
 include('include/client-header.php');  
include('include/connection.php');  
?>
<script>
window.alert('Thank you for your purchase!');
</script>
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
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Payment Done Successfully</div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body">
		         <table style="color:#fff;" class="table table-bordered table-hover"><tbody>
                	<tr>
					<th><strong>Client ID</strong></th>
					<th><strong>Client Name</strong></th>
					<th><strong>Payment ID </strong></th>
					<th><strong>Token</strong></th>
                	<th><strong>PayerID</strong></th>
					</tr>
    			<tr>
		
			
                
    					<td><?php echo $_SESSION['client_id']; ?></td>

        				<td><?php echo $_SESSION['client_name']; ?></td>
						<?php
						

$paymentId=$_GET['paymentId'];
$token=$_GET['token'];
$PayerID=$_GET['PayerID'];

$query="insert into payment_detail(cid,cname,paymentid,token,payerid,pdate,amount) values('".$_SESSION['client_id']."','".$_SESSION['client_name']."','$paymentId','$token','$PayerID','".date("Y-m-d")."','".$_SESSION['checkout']."')";
						 mysqli_query($connect,$query);
						?>
						<td><?php echo $paymentId;?></td>
						<td><?php echo $token; ?></td>
						<td><?php echo $PayerID; ?></td>

        			
		</tbody>
		</table>
		
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

