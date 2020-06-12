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
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="img/profile-avatar.jpg" alt="">
                              </a>
                              <h1>Admin</h1>
                            
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="profile.php"> <i class="icon-edit"></i> Edit profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section>
                          <div class="panel panel-primary">
                              <div class="panel-heading"> Sets New Password</div>
                              <div class="panel-body">
                              <?php
                              if(isset($_POST['submit']))
                              {
                                   $old_pass=md5($_POST['old_pass']);
                                   $pass=md5($_POST['pass']);
                                   $repass=md5($_POST['repass']);
                                   if(!empty($old_pass) && !empty($pass) && !empty($repass))
                                   {
                                        $query=mysqli_query($connect,"select * from myadmin where username='admin'");
                                        if(mysqli_num_rows($query)>0)
                                        {
                                            $row=mysqli_fetch_array($query);
                                            if($old_pass==$row['password'])
                                            {
                                                if($pass==$repass)
                                                {
                                                     if($query1=mysqli_query($connect,"update myadmin set password='$pass' where username='admin'"))
                                                   
                                                    {
                                                        echo '<div class="alert alert-success">Password Updated Successfully.</div>';
															header('Refresh:5;url=../logout.php');
                                                    }
                                                    else
                                                    {
                                                        echo '<div class="alert alert-danger">Error Occured.</div>';
                                                    }
                                                }
                                                else
                                                {
                                                    echo '<div class="alert alert-danger">Password and ReType password mis-match.</div>';
                                                }
                                            }
                                            else
                                            {
                                                echo'<div class="alert alert-danger">Old Password is in-correct.</div>';
                                            }
                                        }
                                   }
                                   else
                                   {
                                    echo '<div class="alert alert-danger">All Field reqiured.</div>';
                                   } 
                              }
                              
                               ?>
                                  <form class="form-horizontal" role="form" autocomplete="off" method="post">
                                      <div class="form-group">  
                                          <label class="col-lg-2 control-label">Current Password</label>
                                          <div class="col-lg-6">
                                              <input type="password" autocomplete="off" name="old_pass" class="form-control" id="c-pwd" placeholder=" " required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">New Password</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="password" name="pass" id="n-pwd" placeholder=" " required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Re-type New Password</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="confirm_password" name="repass" id="rt-pwd" placeholder=" " required>
                                           <span id='message'></span>
										  </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" class="btn btn-success" name="submit" value="Save" />
                                              <a href="profile.php" class="btn btn-info">Reset</a>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
<?php include('includes/footer.php');
?>
<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>