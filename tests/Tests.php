<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DatabaseTests extends TestCase {
    private $connection;

    public function testConnection(): void {
        $connection = pg_connect(
            "dbname=dduft7k2jshmsq
            host=ec2-34-197-141-7.compute-1.amazonaws.com
            port=5432
            user=mqoerrbfbszdsl
            password=792c74a4c6579cd51fab1c144328cd879717b8581707f957b33c0f9035c7c590
            sslmode=require");

        $this->assertTrue($connection);
    }

    public function testInsertInto(): void {
        $first_name = 'Joe';
        $last_name = 'Bloggs';
        $email = 'joebloggs@gmail.com';
        $phone = '123456';
        $address_line1 = '10 Beach Road';
        $address_line2 = 'Takapuna';
        $message = 'lawn mowing needed';

        $query = "INSERT INTO messages (first_name, last_name, email, phone, address_line1, address_line2, message) "
            . "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$address_line1}', '{$address_line2}', '{$message}');";
        $result = pg_query($connection, $query);

        $this->assertTrue($connection);
        
    }

}
?>
