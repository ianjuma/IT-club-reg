<?php include_once ("db.php")?>

<?php
		$firstName = $_POST['Fn'];
		$middleName = $_POST['Mn'];
		$lastName = $_POST['Ln'];
		$emailAdd = $_POST['email'];
		$major = $_POST['major'];
		$yearOfstudy = $_POST['yos'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$schoolId = $_POST['id'];
		$sql = "INSERT into members  (firstName, middleName, lastName, emailAdd, major, yearOfstudy, username, password, schoolId) VALUES" . "('$firstName', '$middleName', '$lastName', '$emailAdd', '$major', '$yearOfstudy', '$username', '$password', '$schoolId')";
		$qury = mysql_query($sql);
		//$sql = mysql_query();
		
		
		
		if(!$qury){
		
				echo "Failed" .mysql_error();
				echo "<br /><a href='index.php'>Sign Up</a>";	
			}	
			else{
				echo "Succesfully inserted";
				echo "<br /><a href='index.php'>Sign Up</a>";
				}
			

?>
