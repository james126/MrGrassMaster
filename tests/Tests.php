<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Tests extends TestCase {
    public function testCanBeUsedAsString(): void {
        $this->assertEquals('user@example.com','user@example.com');
    }
}
?>
