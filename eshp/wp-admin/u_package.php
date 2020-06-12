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
                            
							$query1=mysqli_query($connect,"SELECT * FROM package WHERE id='".$_GET['c']."'");
						$row2=mysqli_fetch_array($query1);
						$imgpath=$row2['path'];
						unlink($imgpath);
                            $query_delete=mysqli_query($connect,"delete from package where id='".$_GET['c']."'");
                            if(mysqli_affected_rows($connect)>0)
                            {
                                echo '<script>
                                alert("Package Detail Deleted Successfully.");
                              var windowlocation = window.location.href.split("?")[0];
                               window.location.href =windowlocation;
                                </script>';
                            }
                          }
                           ?>
						  <header class="panel-heading">
                              Update Package Detail
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Package Name</th>
										   <th>Package Description</th>
                                          <th>Amount</th>
										  <th>Available</th>
                                        
										  <th>Highlights</th>
										  <th>Path</th>
                                          
										  <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $query=mysqli_query($connect,"select * from package");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                                              <tr class="gradeX">
                                                  <td><?php echo $row['id']; ?></td>
                                                  <td><?php echo $row['package_name']; ?></td>
												   <td><?php echo $row['package_desc']; ?></td>
                                                  <td><?php echo $row['amount']; ?></td>
												  <td><?php echo $row['available']; ?></td>
                                                 
												  <td><?php echo $row['highlight']; ?></td>
												  <td><img src="<?php echo $row['path'];  ?>" width="70"></td>
                                                 
                                                   <td class=" "><a href="editpackage.php?c=<?php echo $row['id'];  ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                                      <a href="u_package.php?c=<?php echo $row['id'];  ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
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
                                          <th>Package Name</th>
										   <th>Package Description</th>
                                          <th>Amount</th>
										  <th>Available</th>
                                        
										  <th>Highlights</th>
										  <th>Path</th>
                                          
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