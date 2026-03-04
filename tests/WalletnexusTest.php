<?php
/**
 * Tests for WalletNexus
 */

use PHPUnit\Framework\TestCase;
use Walletnexus\Walletnexus;

class WalletnexusTest extends TestCase {
    private Walletnexus $instance;

    protected function setUp(): void {
        $this->instance = new Walletnexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletnexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
