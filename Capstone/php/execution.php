<html>
<head>
<title>Contact information </title>
<?php

$fullname= $_POST["fullname"];
echo "Your name is:" . $fullname. "</br>"; 

$contact= $_POST["contact"];
echo "Your number is:" . $contact.  "</br>";  


$email= $_POST["email"];
echo "Your email is:" . $email."</br>"; 

$note= $_POST["note"];
echo "Your message is:" . $note."</br>"; 


$myrange= $_POST["myrange"];
echo "Your opinion level is:" . $myrange."</br>"; 


// Database connection
	$conn = new mysqli('localhost','root','','deliveryreview');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO deliveryreview (fullname, contact, email, note, myrange ) VALUES (?, ?, ?, ?, ?)");
		//$stmt = $conn->prepare("select * from deliveryreview");
		//$stmt = $conn->prepare("insert into deliveryreview (fullname, contact, email, note, myrange ) values (?, ?, ?, ?, ?)");
		//echo $stmt;
		$stmt->bind_param("sisss", $fullname, $contact, $email, $note, $myrange);
		$execval = $stmt->execute();
		echo $execval;
		echo "Request sent successfully...";
		$stmt->close();
		$conn->close();
	}

?>
</body>
</html>      


