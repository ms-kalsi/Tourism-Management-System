<?php 
$name = $_POST['name'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];

if(!empty($name)||!empty($password)||!empty($contact)||!empty($address))
{

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tourism_management_system";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if(mysqli_connect_error())
{
	die('Connection error ('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
	$SELECT = "SELECT name FROM user WHERE name = ? LIMIT 1";
	$INSERT = "INSERT INTO user (name, password, contact, address) VALUES (?, ?, ?, ?)";

	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s", $name);
	$stmt->execute();
	$stmt->bind_result($name);
	$stmt->store_result();
	$rnum = $stmt->num_rows;

	if($rnum == 0)
	{
		$stmt->close();

		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssis",$name, $password, $contact, $address);
		if ($stmt->execute()) 
		{
			echo "New record inserted sucessfully.";
        }
		else
		{
            echo $stmt->error;
        }
    }
	else
	{
		echo "Someone already registers using name";
	}
	$stmt->close();
	$conn->close();
	}
}
else
{
	echo "All fields are required";
	die();
}
?>

