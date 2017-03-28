<?php
$connect=mysqli_connect("localhost","root","","logintest");
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>