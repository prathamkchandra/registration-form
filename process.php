<?php
  
 // Database connection parameters
$host = 'sql207.infinityfree.com'; // Database host
$db = 'if0_37808415_registration_form'; // Database name
$user = 'if0_37808415'; // Database username
$pass = 'WiK6m6CG0ERAP7'; // Database password (set if you have one)

// Create connection
$conn = new mysqli($host, $user,$pass, $db);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    
    echo "<h1>Submitted Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Address:</strong> $address</p>";
  } else {
    echo "<p>Invalid Request</p>";-
  }
?>
