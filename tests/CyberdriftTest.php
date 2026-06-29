<?php
/**
 * Tests for CyberDrift
 */

use PHPUnit\Framework\TestCase;
use Cyberdrift\Cyberdrift;

class CyberdriftTest extends TestCase {
    private Cyberdrift $instance;

    protected function setUp(): void {
        $this->instance = new Cyberdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cyberdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
