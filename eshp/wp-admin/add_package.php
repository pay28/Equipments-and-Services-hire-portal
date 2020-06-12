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
							$package_name=trim($_POST['package_name']);
							$package_desc=trim($_POST['package_desc']);
                            $amount=trim($_POST['amount']);
    $available=trim($_POST['available']);
    $highlight=trim($_POST['highlight']);
	
	if(isset($_FILES['pic']))
	{
		$name=strtolower($_FILES['pic']['name']);
		$tmp_name=$_FILES['pic']['tmp_name'];
		$ext=pathinfo($name,PATHINFO_EXTENSION);
		$compare=array('gif','jpeg','jpg','png');
		if(isset($name))
		{
			if(!empty($name))
			{
				if(in_array($ext,$compare))
				{
					$location='upload/';
					if(file_exists($location.$name))
					{
						$l=3;
						$c='abcdefghijklmnopqrstuvwxyz';
						$name='';
						for($i=0;$i<=$l;$i++)
						{
							$name.=$c[rand(0,strlen($c))];
							}
							$name=$name.'.'.$ext;
					}
					if(move_uploaded_file($tmp_name,$location.$name))
					{
						$loc_file=$location.$name;
						$query="insert into package(package_name,package_desc,amount,available,highlight,path) values('$package_name','$package_desc','$amount','$available','$highlight','$loc_file')";
						 if(mysqli_query($connect,$query))
        {
			                  
            echo '<div class="alert alert-success">Package Added Successfully.</div>';
			// header('Refresh: 2;url=add_package.php');
        }
        else
        {
            echo '<div class="alert alert-danger">Error Occured.' . $query .' <br>' . mysqli_error($connect).'</div>';
        }
					}
				}
				else
				{
					echo '<div class="alert alert-danger">Enter a valid image';
				}
			}
			else
				{
					echo '<div class="alert alert-danger">Select Image';
				}
		}
	}
						}
						
						?>
	
	
   
                          <header class="panel-heading">
                          Add Package Detail
                          </header>
                         <div class="panel-body">
						 
						 
                              <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="add_package.php">
							  
								<div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-right control-label">Package Name</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
            <input name="package_name" placeholder="Package Name"  class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->
<div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-right control-label">Package Description</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
            <input name="package_desc" placeholder="Package Description"  class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Amount($)</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-euro "></i></span>
            <input name="amount" placeholder="Amount($)" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>
   
    

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Availability in hours</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            <input name="available" placeholder="Availability in hours" class="float-left form-control" type="text" required="">
          </div>
        </div>
      </div>

      <!-- Text input-->

     

      <!-- Text input-->

      <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Package Highlights</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
           
<textarea class="form-control" rows="5" id="highlight" placeholder="Package Highlights - Use Comma to add different highlights" name="highlight"></textarea>
		         </div>
        </div>
      </div>
 <div class="form-group pt-3">
        <label class="col-md-2 pt-3 float-left control-label">Upload Photo</label>
        <div class="col-md-6 pt-3 inputGroupContainer float-left">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
           
<input name="pic" placeholder="Upload Photo" class="float-left form-control" type="file" required="">
        		         </div>
        </div>
      </div>
      <!-- Select Basic -->

                                 <div class="form-group float-right pt-3">
        <label class="col-md-2 pt-3 float-right control-label"></label>
        <div class="col-md-6 pt-3 float-right"><br>
<input type="submit" value="Add Package Detail" name="submit" class="btn btn-success">    
		 
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