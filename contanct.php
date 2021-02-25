<?php
$host = "sql306.b6b.ir";
$userName = "b6bi_27939675";
$password = "123amir2013";
$dbName = "b6bi_27939675_wp";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
mysqli_set_charset ($conn , "utf8");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$yourName = $conn->real_escape_string($_POST['Name']);
$yourEmail = $conn->real_escape_string($_POST['Email']);
$comments = $conn->real_escape_string($_POST['Message']);
$sql="INSERT INTO email (id, name, email, txt) VALUES (Null,'".$yourName."','".$yourEmail."', '".$comments."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}else{
echo "پیام شما با موفقیت ارسال شد. با تشکر از شما استاد عزیز";
}

/*
else{
    
echo "لطفا فیلد نام و ایمیل را پر کنید";
}
*/
?>