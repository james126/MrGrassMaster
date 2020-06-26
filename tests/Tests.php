<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DatabaseTests extends TestCase {

    //Test database connection
    public function testConnection(): void {
        $connection = pg_connect(
            "dbname=dduft7k2jshmsq
            host=ec2-34-197-141-7.compute-1.amazonaws.com
            port=5432
            user=mqoerrbfbszdsl
            password=792c74a4c6579cd51fab1c144328cd879717b8581707f957b33c0f9035c7c590
            sslmode=require");

        $status = pg_connection_status($connection) ;
        $this->assertEquals($status, PGSQL_CONNECTION_OK);
    }

    //Test INSERT INTO database
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
        $result = pg_query($query);

        $this->assertNotFalse($result);
    }

    //Test SELECT * FROM database
    public function testSelectFrom(): void {
        $query = "SELECT *
            FROM messages
            WHERE first_name = 'Joe' AND last_name = 'Bloggs' AND email = 'joebloggs@gmail.com';";

        $result =  pg_query($query);
        $rows = pg_num_rows($result);
        $this->assertGreaterThan(0, $rows);
    }

    //Test DELETE FROM database
    public function testDeleteFrom(): void {
        $query = "DELETE FROM messages WHERE first_name = 'Joe' AND last_name = 'Bloggs' AND email = 'joebloggs@gmail.com';";
        $result = pg_query($query);
        $this->assertNotFalse($result);
    }
}
?>
