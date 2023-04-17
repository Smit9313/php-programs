<?php
$conn=mysqli_connect("localhost","root","","DB_1");
$id=$_GET['sid'];
$name=$_GET['sname'];
$mob=$_GET['mob'];
$con=$_GET['con'];


if($id !== ""){
	$sql = "select * from student where sid=$id";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		if ($row = mysqli_fetch_assoc($res)) {
			echo "User already exist<br>try another id.";
		} else {
			if ($name == "" && $mob == "" && $con == "") {
				echo "pls fillup all fields";
			} else {
				mysqli_query($conn, "insert into student values('$id','$name','$mob','$con')");
				echo "Data Inserted successsfully";
			}
		}
	} else {
		echo "pls fillup all fields";
	}
}

?>