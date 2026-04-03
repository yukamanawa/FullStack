<?php
/**
 * Tests for FullStackNexus
 */

use PHPUnit\Framework\TestCase;
use Fullstacknexus\Fullstacknexus;

class FullstacknexusTest extends TestCase {
    private Fullstacknexus $instance;

    protected function setUp(): void {
        $this->instance = new Fullstacknexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fullstacknexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
