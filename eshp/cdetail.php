<?php ob_start();
 include('include/client-header.php');  
include('include/connection.php');  
?>
<style>
footer {
margin-top:90px !important;
top:100%
}
</style>
<div class="home-wrapper">   
        <section >
		 <div class="stars"></div><div class="clouds"></div>				
			<div id="homecenter"><div id="home-image" >	
						
				<div id="cf">
				<div id="loginbox" class="mainbox col-md-8 pt-3 m-auto">                    
            <div class="panel panel-info formbg">
                    <div class="panel-heading">
                        <div class="panel-title" style="padding-top:40px;font-size:20px;font-weight:700;">Update Client Detail</div>
                     </div>     

                    <div style="padding-top:30px" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            
<?php
                        if(isset($_POST['submit']))
                        {
							$id=trim($_POST['id']);
                            $fname=trim($_POST['first_name']);
    $lname=trim($_POST['last_name']);
    $gender=trim($_POST['gender']);
	$uname=trim($_POST['user_name']);
    
	$email=trim($_POST['email']);
    $contact=trim($_POST['contact_no']);
    $address=trim($_POST['address']);
	$post=trim($_POST['postcode']);
    if($fname && $lname && $email && $contact && $address)
    {
		
        
			$str="update client_register set fname='$fname',lname='$lname',gender= '$gender',username='$uname',email='$email' ,contact='$contact' ,address='$address' ,postcode='$post' where id= '$id'";
			//echo $str;
        
        if(mysqli_query($connect,$str))
        {
			                  
            echo '<div class="alert alert-success">Client Data Updated Successfully.</div>';
			
        }
        else
        {
            echo '<div class="alert alert-danger">Error Occured.' . $str .' <br>' . mysqli_error($connect).'</div>';
        }
        
    }
	 else
                            {
                                echo '<div class="alert alert-danger">All Fields Required.</div>';
                            }
}
?>
			
          <form class="well form-horizontal" action="cdetail.php " method="post" id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>
        <center>
         <!-- <h2 style="color:#110f0a;"><b>Registration Form</b></h2>-->
        </center>
      </legend><br>

      <!-- Text input-->
<?php
                            
if(isset($_SESSION['client_id']))
                          {
                            $id=$_SESSION['client_id'];
								$query=mysqli_query($connect,"select * from client_register where id='$id'");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                            
								<div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">First Name</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="first_name" placeholder="First Name" value="<?php echo $row['fname']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Last Name</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Last Name" value="<?php echo $row['lname']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
    <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Gender</label>
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
        <label class="col-md-6 pt-3 float-left control-label">Username</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="user_name" placeholder="Username" value="<?php echo $row['username']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      

      

      <!-- Text input-->
	   
      <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">E-Mail</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="E-Mail Address" value="<?php echo $row['email']; ?>" class="float-left form-control" type="email" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Contact No.</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="contact_no" placeholder="(+61)" value="<?php echo $row['contact']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Select Basic -->
<div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Address</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Address" value="<?php echo $row['address']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
	  <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Post Code</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="postcode" placeholder="Post Code" value="<?php echo $row['postcode']; ?>" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
   
     
                               <?php
                                           }   
                                      }
						  }									  
                                      ?>
      <!-- Button -->
      <div class="form-group float-right pt-3">
        <label class="col-md-6 pt-3 float-right control-label"></label>
        <div class="col-md-6 pt-3 float-right"><br>
<input type="submit" value="Update Details" name="submit" class="btn btn-success">    
		 
        </div>
      </div>

    </fieldset>
  </form>

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