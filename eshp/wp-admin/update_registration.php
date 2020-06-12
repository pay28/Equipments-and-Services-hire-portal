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
                          
						  <?php
                          if(isset($_GET['c']))
                          {
                            
                            $query_delete=mysqli_query($connect,"delete from client_register where id='".$_GET['c']."'");
                            if(mysqli_affected_rows($connect)>0)
                            {
                                echo '<script>
                                alert("Client Detail Deleted Successfully.");
                              var windowlocation = window.location.href.split("?")[0];
                               window.location.href =windowlocation;
                                </script>';
                            }
                          }
                           ?>
						  <header class="panel-heading">
                              Client Registration Record
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>First Name</th>
                                          <th>Last Name</th>
										  <th>Gender</th>
                                        
										  <th>Username</th>
										  <th>Password</th>
                                          <th >Email</th>
										  <th>Contact No.</th>
										  <th>Address</th>
										  <th>Post Code</th>
										  <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $query=mysqli_query($connect,"select * from client_register");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                                              <tr class="gradeX">
                                                  <td><?php echo $row['id']; ?></td>
                                                  <td><?php echo $row['fname']; ?></td>
                                                  <td><?php echo $row['lname']; ?></td>
												  <td><?php echo $row['gender']; ?></td>
                                                 
												  <td><?php echo $row['username']; ?></td>
												  <td><?php echo $row['password']; ?></td>
                                                  <td><?php echo $row['email']; ?></td>
                                                  <td><?php echo $row['contact']; ?></td>
												  <td><?php echo $row['address']; ?></td>
												  <td><?php echo $row['postcode']; ?></td>
                                                   <td class=" "><a href="eregistration.php?c=<?php echo $row['id'];  ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                                      <a href="update_registration.php?c=<?php echo $row['id'];  ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
                                      </td>
                                              </tr>
                                                
                                                <?php
                                           }   
                                      } 
                                      ?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                           <th>ID</th>
                                          <th>First Name</th>
                                          <th>Last Name</th>
										  <th>Gender</th>
                                        
										  <th>Username</th>
										  <th>Password</th>
                                          <th >Email</th>
										  <th>Contact No.</th>
										  <th>Address</th>
										  <th>Post Code</th>
										  <th>Action</th>
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