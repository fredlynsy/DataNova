<?php
/**
 * Tests for DataNova
 */

use PHPUnit\Framework\TestCase;
use Datanova\Datanova;

class DatanovaTest extends TestCase {
    private Datanova $instance;

    protected function setUp(): void {
        $this->instance = new Datanova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Datanova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
