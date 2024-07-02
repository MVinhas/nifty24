<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testIndexEchoesHelloWorld()
    {
        ob_start();
        include __DIR__ . '/../../public/index.php';
        $output = ob_get_clean();
        $this->assertEquals('Hello World', $output);
    }
}