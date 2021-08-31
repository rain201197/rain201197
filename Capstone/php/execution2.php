<html>
<head>
<title>Order information </title>
<?php

$qty1= $_POST["qty1"];
echo "Your quantity is:" . $qty1. "</br>"; 

$Order1= $_POST["Order1"];
echo "Your order is:" . $Order1.  "</br>";  


$option1= $_POST["option1"];
echo "Your option is:" . $option1."</br>"; 

$fullnm= $_POST["fullnm"];
echo "Your fullname is:" . $fullnm."</br>"; 

$phonenumber= $_POST["phonenumber"];
echo "Your number is:" . $phonenumber."</br>"; 

$emailad= $_POST["emailad"];
echo "Your email is:" . $emailad."</br>"; 

$homeaddress= $_POST["homeaddress"];
echo "Your address is:" . $homeaddress."</br>"; 

$payment= $_POST["payment"];
echo "Your choice of payment is:" . $payment."</br>"; 

// Database connection
	$conn = new mysqli('localhost','root','','deliveryorder');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO deliveryorder (qty1, Order1, option1, fullnm, phonenumber, emailad, homeaddress, payment ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		//$stmt = $conn->prepare("select * from deliveryorder");
		//$stmt = $conn->prepare("insert into deliveryorder (qty1, Order1, option1, fullnm, phonenumber, emailad, homeaddress, payment) values (?, ?, ?, ?, ?, ?, ?, ?)");
		//echo $stmt;
		$stmt->bind_param("isssisss", $qty1, $Order1, $option1, $fullnm, $phonenumber, $emailad, $homeaddress, $payment);
		$execval = $stmt->execute();
		echo $execval;
		echo "Order placed successfully...";
		$stmt->close();
		$conn->close();
	}

?>
</body>
</html>      


