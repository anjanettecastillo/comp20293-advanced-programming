<?php
require_once __DIR__ . '/../src/Program1.php';

class Program1Test extends \PHPUnit\Framework\TestCase
{
    public function testModulusNotEmpty()
    {
        $program1 = new Program1(5);
        $result = $program1->Modulus(3);

        $this->assertNotEmpty($result);
    }

    public function testModulusIsNumeric()
    {
        $program1 = new Program1(5);
        $result = $program1->Modulus(3);

        $this->assertIsNumeric($result);
    }

    public function testModulusIsInt()
    {
        $program1 = new Program1(5);
        $result = $program1->Modulus(3);

        $this->assertIsInt($result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $program1 = new Program1(5);
        $result = $program1->Modulus(0);
    }

    public function testModulusEquals()
    {
        $program1 = new Program1(5);
        $result = $program1->Modulus(3);

        $this->assertEquals(2, $result);
    }
}