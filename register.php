<?php

if(isset($_POST['fullname']) && isset($_POST['dept'])){
	$fname = $_POST['fullname'];
	$dept = $_POST['dept'];

	if(!empty($fname) && !empty($dept)){
		$handle = fopen('register.txt', 'a');
		fwrite($handle, $fname."==>");
		fwrite($handle, $dept."\n");
		fclose($handle);

		$readfile = file('register.txt');
		echo "Successful...";
	}else{
		echo 'Fill in the empty boxes';
	}
}
?>

<!Doctype html>
<html>
<h1>Student Registration</h1>
	<form action="" method="POST">
		<input type="text" name="fullname"  maxlength="100" placeholder="Enter your fullname" /><br/><br>
		<input type="text" name="dept"  maxlength="100" placeholder="Enter your department" /><br/>
		<br>
		<input type="submit" name="Submit">
	</form>
</html>