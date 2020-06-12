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
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Payment History</div>
                     <!--   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
                    </div>     

                    <div style="padding-top:30px" class="panel-body">
		         <table style="color:#fff;" class="table table-bordered table-hover"><tbody>
                	<tr>
                                           <th>Transaction ID</th>
                                          <th>Client ID</th>
										   <th>Client Name</th>
                                          <th>Transaction Date</th>
										  <th>Payment ID </th>
					<th>Token</th>
                	<th>PayerID</th>
					<th>Amount</th>
                                      </tr>
    			<tbody>
                                      <?php
									  
									  //cid,cname,paymentid,token,payerid,pdate,amount
                                      $query=mysqli_query($connect,"select * from payment_detail where cid='".$_SESSION['client_id']."'");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                                              <tr class="gradeX">
                                                  <td><?php echo $row['id']; ?></td>
                                                  <td><?php echo $row['cid']; ?></td>
												   <td><?php echo $row['cname']; ?></td>
                                                  <td><?php echo $row['pdate']; ?></td>
												  <td><?php echo $row['paymentid']; ?></td>
                                                 
												  <td><?php echo $row['token']; ?></td>
												  <td><?php echo $row['payerid']; ?></td>
												  <td><?php echo $row['amount']; ?></td>
												 </tr>
                                                
                                                <?php
                                           }   
                                      } 
                                      ?>
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

