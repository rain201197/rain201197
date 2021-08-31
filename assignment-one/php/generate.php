<?php 


try {
	$connString = "mysql:host=localhost;dbname=art";
	$user = 'root';
	$pass = '';
	$pdo = new PDO($connString,$user,$pass);
	
	$fname= $_POST["fname"];


	$lname= $_POST["lname"]; 


	$myemail= $_POST["myemail"];


	$mypassword= $_POST["mypassword"];


	$first= $_POST["first"];


	$City= $_POST["City"];


	$State= $_POST["State"]; 


	$Zip= $_POST["Zip"];


	$Where= $_POST["Where"];


	$favcolor= $_POST["favcolor"];


	$myRange= $_POST["myRange"];


	$birthday= $_POST["birthday"];
 

	$sql = "INSERT INTO art (fname, lname, myemail, mypassword, first, City, Sate, Zip, Where, favcolor, myRange, birthday)
	VALUES (".$fname.", ".$lname.", ".$myemail.", ".$mypassword.", ".$first.", ".$City.", ".$Sate.", ".$Zip.", ".$Where.", ".$favcolor.", ".$myRange.", ".$birthday.")";



	// run the query
	$result = $pdo->query($sql);
	// fetch a record from result set into an associative array
	
echo "<table>";

	while ($row = $result->fetch()) {
		
	echo "<tr><td"\">" $row['fname'] . " </td></tr> " . $row['lname'] . " </td></tr> " . $row['myemail']. " </td></tr> " . $row['mypassword']." </td></tr> " .$row['first'] . " </td></tr> " . $row['City'] . " </td></tr> " . $row['State']. " </td></tr> " . $row['Zip']. " </td></tr> " . $row['Where']. " </td></tr> " . $row['favcolor']. " </td></tr> " . $row['myRange']. " </td></tr> " . $row['birthday'];
		echo "<br/>";
	}
echo"</table>";

	
	$pdo = null;
}
catch (PDOException $e) {
	
die( $e->getMessage() );
}
	
?>  