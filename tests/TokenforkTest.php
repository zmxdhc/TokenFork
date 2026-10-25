<?php
/**
 * Tests for TokenFork
 */

use PHPUnit\Framework\TestCase;
use Tokenfork\Tokenfork;

class TokenforkTest extends TestCase {
    private Tokenfork $instance;

    protected function setUp(): void {
        $this->instance = new Tokenfork(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenfork::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
