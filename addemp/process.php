<?php 
include 'database.php';
 

 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];
echo $first_name;
echo $last_name;
echo $department;
echo $email;
//Execute the query
 
 //$sql ="INSERT INTO user (first,last,dept,uid)
 //values('"first_name','$last_name','$department','$email');"
//$result= $connect->query($sql);
mysqli_autocommit($connect,FALSE);
mysqli_query($connect,"INSERT INTO user (first,last,dept,uid)
			VALUES('".$first_name."','".$last_name."','".$department."','".$email."')");


mysqli_commit($connect);
 header("Location: index.php");
?>

/*mysqli_query($connect"INSERT INTO employees1(first_name,last_name,department,email)
				VALUES('$first_name','$last_name','$department','$email')");
		
		if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href="index.html">Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}*/