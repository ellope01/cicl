<?php
use PHPUnit\Framework\TestCase;
include 'Calculadora.php';
final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(3,4);
        $this->assertEquals(8, $calc->suma());
    }
    public function testResta()
    {
        $calc = new Calculadora(4,1);
        $this->assertEquals(3, $calc->resta());
    }
}
?>