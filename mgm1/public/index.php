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



$connection = pg_connect(getenv("DATABASE_URL"));




if ($connection){
    echo "connection successful\n";
} else {
    echo pg_last_error($connection);
}


$query = "SELECT * FROM messages";
$result = pg_query($connection, $query);

while ($row = pg_fetch_assoc($result)) {
    echo $row['first_name'];
}


$query = "INSERT INTO messages (first_name, last_name, email, phone, address_line1, address_line2, message) "
            . "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$address_line1}', '{$address_line2}', '{$message}');";
$result = pg_query($connection, $query);

if ($result){
    echo "query successful";
}



 ?>

</body>
</html>
