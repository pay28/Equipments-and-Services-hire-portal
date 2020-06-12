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
                              View Payment History
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
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
                                      </thead>
                                      <tbody>
                                      <?php
									  
									  //cid,cname,paymentid,token,payerid,pdate,amount
                                      $query=mysqli_query($connect,"select * from payment_detail");
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
                                      <tfoot>
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
                                      </tfoot>
                          </table>
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