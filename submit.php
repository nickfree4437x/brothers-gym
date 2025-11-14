<?php
// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$dbname = "gym_members";

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    // Insert data into database
    $sql = "INSERT INTO members (first_name, last_name, email, contact, gender, message) 
            VALUES ('$first_name', '$last_name', '$email', '$contact', '$gender', '$message')";

    if ($conn->query($sql) === TRUE) {
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Success</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    </head>
    <body>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your form has been submitted successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'index.php';
                });
            });
        </script>
    </body>
    </html>
    ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}

// Close connection
$conn->close();
?>
