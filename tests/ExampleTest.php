<?php

namespace VeraB\Template\Tests;

use PHPUnit\Framework\TestCase;
use VeraB\Template\Example;

final class ExampleTest extends TestCase
{
    private Example $example;

    protected function setUp(): void
    {
        parent::setUp();

        $this->example = new Example();
    }

    public function testExample1(): void
    {
        $this->assertEquals(1, $this->example->integer());
    }

    public function testExample2(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->example->exception();
    }
}