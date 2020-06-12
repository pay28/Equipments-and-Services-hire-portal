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
                              View Ordered Package
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Client ID</th>
										   <th>Client Name</th>
                                          <th>Date of Event</th>
										  <th>Address</th>
                                        
										  <th>Contact</th>
										  <th>Postcode</th>
                                          
										  <th>Package Name</th>
										 
										   <th>Package Price</th>
										    <th>Quantity</th>
											 <th>Checkout Price</th>
											  <th>Add more(Desc)</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
									  
									  //cid,cname,cdate,address,contact,postcode,pname,pprice,quantity,total
                                      $query=mysqli_query($connect,"select * from order_package");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                                              <tr class="gradeX">
                                                  <td><?php echo $row['id']; ?></td>
                                                  <td><?php echo $row['cid']; ?></td>
												   <td><?php echo $row['cname']; ?></td>
                                                  <td><?php echo $row['cdate']; ?></td>
												  <td><?php echo $row['address']; ?></td>
                                                 
												  <td><?php echo $row['contact']; ?></td>
												  <td><?php echo $row['postcode']; ?></td>
												  <td><?php echo $row['pname']; ?></td>
												   
												  <td><?php echo $row['pprice']; ?></td>
												  <td><?php echo $row['quantity']; ?></td>
												  <td><?php echo $row['total']; ?></td>
		<td><?php echo $row['descr']; ?></td>
																				
                                              </tr>
                                                
                                                <?php
                                           }   
                                      } 
                                      ?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                           <th>ID</th>
                                          <th>Client ID</th>
										   <th>Client Name</th>
                                          <th>Date of Event</th>
										  <th>Address</th>
                                        
										  <th>Contact</th>
										  <th>Postcode</th>
                                          
										  <th>Package Name</th>

										   <th>Package Price</th>
										    <th>Quantity</th>
											 <th>Checkout Price</th>
											  <th>Add more(Desc)</th>
                                     
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