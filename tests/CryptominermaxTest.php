<?php
/**
 * Tests for CryptoMinerMax
 */

use PHPUnit\Framework\TestCase;
use Cryptominermax\Cryptominermax;

class CryptominermaxTest extends TestCase {
    private Cryptominermax $instance;

    protected function setUp(): void {
        $this->instance = new Cryptominermax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptominermax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
