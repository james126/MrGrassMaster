<!DOCTYPE html>
<html>
<body>

<?php
$first_name = 'billy';
$last_name = 'brown';
$email = 'billybrown@gmail.com';
$phone = '123456';
$address_line1 = '19 pinero place' ;
$address_line2 = 'auckland';
$message = 'lawn mowing';

$connnection = @pg_connect(getenv("DATABASE_URL"));
$query = "INSERT INTO messages (first_name, last_name, email, phone, address_line1, address_line2, message) "
            . "VALUES ({$first_name}, {$last_name}, {$email}, {$phone}, {$address_line1}, {$address_line2}, {$message});";
$result = @pg_query($connection, $query);

if ($result){
    echo 'successful';
}


 ?>

</body>
</html>
