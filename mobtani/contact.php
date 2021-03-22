<?php
/*
var_dump( $_POST );
var_dump( $_GET );
var_dump( $_REQUEST );
*/

// A. validation
// B. Insert in DB

// 1. connect to DB - mysql - mysqli - PDO
include 'settings.php';
$dbc = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME); // mysqli_connect
// 2. create insert query
//$sql = "INSERT INTO message(title, body)
//		VALUES('my title', 'متن پیام')";
$sql = "INSERT INTO message(title, body)
		VALUES('{$_POST['title']}', '{$_POST['body']}')";
//echo $sql . '<br>';
// 3. execute query
$result = $dbc -> query( $sql ); // mysqli_query
// 4. close connection
$dbc -> close(); //mysqli_close

// C. success message
echo 'پیام با موفقیت ثبت شد';
?>