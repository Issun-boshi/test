<?php

namespace Test2;

use PHPUnit\Framework\TestCase;

class TestCase2 extends TestCase {
    public function testDecimalAgeNotValid() {
        $submitted = [
            'age' => '6.7',
            'price' => '100',
            'name' => 'Julia'
        ];
        list($errors, $input) = Form::validate($submitted);
        // Ожидается только одна ошибка, связанная с возрастом
        $this->assertContains('Please enter a valid age.', $errors);
        $this->assertCount(1, $errors);
    }

    public function testDollarSignPriceNotValid() {
        $submitted = [
            'age' => '6',
            'price' => '$52',
            'name' => 'Julia'
        ];
        list($errors, $input) = Form::validate($submitted);
        // Ожидается только одна ошибка, связанная с возрастом
        $this->assertContains('Please enter a valid price.', $errors);
        $this->assertCount(1, $errors);
    }

    public function testValidDataOK() {
        $submitted = [
            'age' => '15',
            'price' => '39.95',
            'name' => ' Julia ' // Начальные и конечные пробелы в имени должны быть удалены
        ];
        list($errors, $input) = Form::validate($submitted);
        // Никаких ошибок не ожидается $this->assertCount(0, $errors);
        // Ожидаются три элемента во входных данных
        $this->assertCount(3, $input);
        $this->assertSame(15, $input['age']);
        $this->assertSame(39.95, $input['price']);
        $this->assertSame('Julia', $input['name']);
    }

    public function testNameEmpty() {
        $submitted = [
            'age' => '15',
            'price' => '39.95',
            'name' => '   '
        ];
        list($errors, $input) = Form::validate($submitted);
        $this->assertContains('Your name is required.', $errors);
        $this->assertCount(1, $errors);
    }
}
