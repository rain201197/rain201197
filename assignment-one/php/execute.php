<html>
<head>
<title>Art Store information </title>
<?php

$fname= $_POST["fname"];
echo "Your first name is:" . $fname. "</br>"; 

$lname= $_POST["lname"]; 
echo "Your last name is:" . $lname . "</br>";  

$myemail= $_POST["myemail"];
echo "Your email is:" . $myemail.  "</br>";  

$mypassword= $_POST["mypassword"];
echo "Your passcode is:" . $mypassword ."</br>"; 

$loc= $_POST["loc"];
echo "Your location is:" . $loc."</br>"; 

$City= $_POST["City"];
echo "Your City is:" . $City."</br>"; 


$Sta= $_POST["Sta"];
echo "Your state is:" . $Sta."</br>"; 


$Zip= $_POST["Zip"];
echo "Your Zip is:" . $Zip."</br>"; 


$cont= $_POST["cont"];
echo "Your Continent is:" . $cont."</br>"; 


$favcolor= $_POST["favcolor"];
echo "Your favcolor is:" . $favcolor."</br>"; 


$myRange= $_POST["myRange"];
echo "Your interest is:" . $myRange."</br>"; 


$birthday= $_POST["birthday"];
echo "Your birthday is:" . $birthday."</br>"; 

// Database connection
	$conn = new mysqli('localhost','root','','art');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO art (fname, lname, myemail, mypassword, loc, City, Sta, Zip, cont, favcolor, myRange, birthday) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		//$stmt = $conn->prepare("select * from art");
		//$stmt = $conn->prepare("insert into art (fname, lname, myemail, mypassword, first, City, State, Zip, Where, favcolor, myRange, birthday) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		//echo $stmt;
		$stmt->bind_param("sssssssissss", $fname, $lname, $myemail, $mypassword, $loc, $City, $Sta, $Zip, $cont, $favcolor, $myRange, $birthday);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>
</body>
</html>      


