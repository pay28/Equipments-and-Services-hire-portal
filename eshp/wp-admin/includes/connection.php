<?php
	// require("constants.php");
	// //To Create the connection to the database
	// $connection=mysqli_connect(Db_Server,Db_User,Db_Pass);
    // if(!$connection)
	// {
	// die("database connection failed".mysql_erorr());
	// }
	// //To seslect the database
	// $db_select=mysqli_select_db($connection,Db_Name);
	// if(!$db_select)
	// {
	// die("database selection failed ".mysqli_error());
	// }
?>
<?php
$host="localhost";
$uname='root';
$pass='';
$dbname='eshp';
$connect=mysqli_connect($host,$uname,$pass);
$db_connect=mysqli_select_db($connect,$dbname);
if($db_connect)
{
    //echo "successfull";
}
else
{
    echo 'no connection';
}
?>
