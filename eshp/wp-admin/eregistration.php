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
                        if(isset($_POST['submit']))
                        {
							$id=trim($_POST['id']);
                            $fname=trim($_POST['first_name']);
    $lname=trim($_POST['last_name']);
    $gender=trim($_POST['gender']);
	$uname=trim($_POST['user_name']);
    $pass=$_POST['user_password'];
    $repass=$_POST['confirm_password'];
	$email=trim($_POST['email']);
    $contact=trim($_POST['contact_no']);
    $address=trim($_POST['address']);
	$post=trim($_POST['postcode']);
    if($fname && $lname && $email && $contact && $address)
    {
        if($pass==$repass)
        {
			$str="update client_register set fname='$fname',lname='$lname',gender= '$gender',username='$uname' ,password='$pass' ,email='$email' ,contact='$contact' ,address='$address' ,postcode='$post' where id= '$id'";
			//echo $str;
        
        if(mysqli_query($connect,$str))
        {
			                  
            echo '<div class="alert alert-success">Client Data Updated Successfully.</div>';
			 header('Refresh: 2;url=update_registration.php');
        }
        else
        {
            echo '<div class="alert alert-danger">Error Occured.' . $str .' <br>' . mysqli_error($connect).'</div>';
        }
        }
        else
        {
            echo '<div class="alert alert-danger">Password and Retype Password Mismatch</div>';
        }
    }
	 else
                            {
                                echo '<div class="alert alert-danger">All Fields Required.</div>';
                            }
}
?>
                          <header class="panel-heading">
                          Update Client Registration Record
                          </header>
                         <div class="panel-body">
						 
						 <?php
                            
if(isset($_GET['c']))
                          {
                            $id=$_GET['c'];
								$query=mysqli_query($connect,"select * from client_register where id='$id'");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                              <form class="form-horizontal" role="form" method="post" action="eregistration.php">
							  <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                            
								<div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-right control-label">First Name</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="first_name" placeholder="First Name" value="<?php echo $row['fname']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Last Name</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Last Name" value="<?php echo $row['lname']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
    <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Gender</label>
        <div class="col-md-6 pt-3 selectContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="gender" class="float-left form-control selectpicker">
      <option value="<?php echo $row['gender']; ?>"  ><?php echo $row['gender']; ?></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      
    </select>
          </div>
        </div>
      </div>
    

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Username</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="user_name" placeholder="Username" value="<?php echo $row['username']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Password</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="user_password" placeholder="Password" id="password" value="<?php echo $row['password']; ?>" class="float-left form-control" type="password" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Confirm Password</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" value="<?php echo $row['password']; ?>" class="float-left form-control" type="password" required="">
           <span id='message'></span>
		  </div>
        </div>
      </div>

      <!-- Text input-->
	   
      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">E-Mail</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="E-Mail Address" value="<?php echo $row['email']; ?>" class="float-left form-control" type="email" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Contact No.</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="contact_no" placeholder="(+61)" value="<?php echo $row['contact']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Select Basic -->
<div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Address</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Address" value="<?php echo $row['address']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
	  <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Post Code</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="postcode" placeholder="Post Code" value="<?php echo $row['postcode']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
      <!-- Button -->
     
                               <?php
                                           }   
                                      }
						  }									  
                                      ?>
                                 <div class="form-group float-right pt-3">
        <label class="col-md-2 pt-3 float-right control-label"></label>
        <div class="col-md-6 pt-3 float-right"><br>
<input type="submit" value="Update Client Record" name="submit" class="btn btn-success">    
		 
        </div>
      </div>
                              </form>
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
<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>