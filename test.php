<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testHello(): void
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien', $content);
    }

    public function testGoodby(): void
    {
        ob_start();
        include 'bye.php';
        $content = ob_get_clean();

        $this->assertEquals('Goodbye!', $content);
    }
}
