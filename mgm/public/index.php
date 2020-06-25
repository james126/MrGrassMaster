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


$connnection = pg_connect("host=ec2-34-197-141-7.compute-1.amazonaws.com dbname=dduft7k2jshmsq port=5432 user=mqoerrbfbszdsl password=792c74a4c6579cd51fab1c144328cd879717b8581707f957b33c0f9035c7c590 sslmode=require");

echo pg_connection_status($connnection);

/*$query = "SELECT * FROM messages";
$result = pg_query($connection, $query);

while ($row = pg_fetch_assoc($result)) {
    echo $row['first_name'];
}

$query = "INSERT INTO messages (first_name, last_name, email, phone, address_line1, address_line2, message) "
            . "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$address_line1}', '{$address_line2}', '{$message}');";
$result = pg_query($connection, $query);
*/



 ?>

</body>
</html>
