<?php
// Database configuration
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'contact'; 

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO `contact`.`contactme` ( `name`, `email`, `message`, `time`) VALUES ('$name', '$email', '$message', current_timestamp())" ;
// echo $sql;


if($conn->query($sql)==true)
{
   
    session_start();

    // Example: Set a session message (for demonstration purposes)
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "Thanks for the contact me";
       
    }
    
    // Check if there's a message to show
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
    
    // Clear the message after retrieving it
    unset($_SESSION['message']);
    
}
else
{
    echo "Error :$sql <br> $conn->error";
}

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script>
        // Function to show a popup message
        function showPopup(message) {
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body onload="showPopup('<?php echo addslashes($message); ?>')">
    
</body>
</html>

