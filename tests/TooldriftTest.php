<?php
/**
 * Tests for ToolDrift
 */

use PHPUnit\Framework\TestCase;
use Tooldrift\Tooldrift;

class TooldriftTest extends TestCase {
    private Tooldrift $instance;

    protected function setUp(): void {
        $this->instance = new Tooldrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tooldrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
