<?php
/**
 * Tests for LangQuasix
 */

use PHPUnit\Framework\TestCase;
use Langquasix\Langquasix;

class LangquasixTest extends TestCase {
    private Langquasix $instance;

    protected function setUp(): void {
        $this->instance = new Langquasix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Langquasix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
