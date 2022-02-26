<?php
require_once __DIR__ . '/../src/Program2.php';

class Program2Test extends \PHPUnit\Framework\TestCase
{
    public function testNameEquals()
    {
        $program2 = new Program2();
        $program2->set_name('Anj');
        $this->assertEquals($program2->get_name(), 'Anj');
    }

    public function testAgeEquals()
    {
        $program2 = new Program2();
        $program2->set_age(21);
        $this->assertEquals($program2->get_age(), 21);
    }

    public function testFColorEquals()
    {
        $program2 = new Program2();
        $program2->set_fcolor('black');
        $this->assertEquals($program2->get_fcolor(), 'black');
    }

    public function testNameIsString()
    {
        $program2 = new Program2();
        $program2->set_name('Anj');
        $this->assertIsString($program2->get_name());
    }

    public function testAgeIsNumeric()
    {
        $program2 = new Program2();
        $program2->set_age(21);
        $this->assertIsNumeric($program2->get_age());
    }

    public function testAgeIsInt()
    {
        $program2 = new Program2();
        $program2->set_age(21);
        $this->assertIsInt($program2->get_age());
    }

    public function testAgeIsGreaterThanOrEqual70()
    {
        $program2 = new Program2();
        $program2->set_age(70);
        $this->assertGreaterThanOrEqual($program2->get_age(), 70);
    }

    public function testFColorIsString()
    {
        $program2 = new Program2();
        $program2->set_fcolor('black');
        $this->assertIsString($program2->get_fcolor());
    }
}