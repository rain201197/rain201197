<?php
// convert SECONDPAGE string into PHP object
$text = '{"Informarion": {"fname":"first name","lname":"last name", "myemail": "email", "mypassword": "password", "first":"first", "Ctiy": "city", "State": "state", "Zip": "zip", "Where": "where", "favcolor": "fav color", "myRange": "my range","birthday": "birthday" }}';
$anObject = secondpage_decode($text);
// check for parse errors
if (secondpage_last_error() == SECONDPAGE_ERROR_NONE) {
	echo $anObject->Information->fname;
}
?>