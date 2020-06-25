<!DOCTYPE html>
<html>
<body>

<?php
$first_name = 'First name: ' . $_POST['first_name'];
$last_name = 'Last name: ' . $_POST['last_name'];
$email = 'Email: ' . $_POST['email'];
$phone = 'Phone: ' . $_POST['phone'];
$address_line1 = 'Number and street: ' . $_POST['address_line1'];
$address_line2 = 'Suburb: ' . $_POST['address_line2'];
$message = 'Message: ' . wordwrap($_POST['message'], 50, "\r\n");

$conn = pg_connect(getenv("DATABASE_URL"));
if ($conn){
    echo "pass";
}


 ?>

</body>
</html>
