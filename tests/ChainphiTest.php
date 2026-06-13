<?php
/**
 * Tests for ChainPhi
 */

use PHPUnit\Framework\TestCase;
use Chainphi\Chainphi;

class ChainphiTest extends TestCase {
    private Chainphi $instance;

    protected function setUp(): void {
        $this->instance = new Chainphi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainphi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
