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
                                   $old_pass=$_POST['old_password'];
                                   $pass=$_POST['user_password'];
                                   $repass=md5($_POST['confirm_password']);
                                   if(!empty($old_pass) && !empty($pass) && !empty($repass))
                                   {
                                        $query=mysqli_query($connect,"select * from client_register where id='".$_SESSION['client_id']."'");
                                        if(mysqli_num_rows($query)>0)
                                        {
                                            $row=mysqli_fetch_array($query);
                                            if($old_pass==$row['password'])
                                            {
                                                if($pass==$repass)
                                                {
                                                     if($query1=mysqli_query($connect,"update client_register set password='$pass' where id='".$_SESSION['client_id']."'"))
                                                   
                                                    {
                                                        echo '<div class="alert alert-success">Password Updated Successfully.</div>';
															header('Refresh:5;url=logout.php');
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
			
          <form class="well form-horizontal" action="cpassword.php " method="post" id="contact_form">
    <fieldset>

      <!-- Form Name -->
      <legend>
        <center>
         <!-- <h2 style="color:#110f0a;"><b>Registration Form</b></h2>-->
        </center>
      </legend><br>

      <!-- Text input-->
	  <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Old Password</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="old_password" placeholder="Password" class="float-left form-control" type="password" required="">
          </div>
        </div>
      </div>
<div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">New Password</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="user_password" id="user_password" placeholder="Password" class="float-left form-control" type="password" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-6 pt-3 float-left control-label">Confirm Password</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="float-left form-control" type="password" required="">
<span id='message'></span>         
		 </div>
        </div>
      </div>
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
<script>
$('#user_password, #confirm_password').on('keyup', function () {
  if ($('#user_password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>