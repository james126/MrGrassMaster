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

$connnection = @pg_connect(getenv("DATABASE_URL"));
$query = "INSERT INTO messages (first_name, last_name, email, phone, address_line1, address_line2, message) "
            . "VALUES ({$first_name}, {$last_name}, {$email}, {$phone}, {$address_line1}, {$address_line2}, {$message});";
$result = @pg_query($connection, $query);


 ?>

</body>
</html>
