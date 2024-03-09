<?php

namespace Test4;

use PHPUnit\Framework\TestCase;

class TestCase4 extends TestCase {
    public function __construct(string $name) {
        parent::__construct($name);

        $_SERVER['REQUEST_METHOD'] = 'GET';
        
    }

    public function testButton1() {
        $text = 'Submit';
        $attributes = [];
        $expectedHtml = '<button >Submit</button>';

        $form = new FormHelper();
        $html = $form->button($text, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testButton2() {
        $text = 'Submit';
        $attributes = ['type' => 'submit'];
        $expectedHtml = '<button type="submit">Submit</button>';

        $form = new FormHelper();
        $html = $form->button($text, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testButton3() {
        $text = 'Submit';
        $attributes = ['type' => 'reset'];
        $expectedHtml = '<button type="reset">Submit</button>';

        $form = new FormHelper();
        $html = $form->button($text, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testButton4() {
        $text = 'Submit';
        $attributes = ['type' => 'button'];
        $expectedHtml = '<button type="button">Submit</button>';

        $form = new FormHelper();
        $html = $form->button($text, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testButton5() {
        $text = 'Submit';
        $attributes = ['type' => 'sdfgdsffsdf'];
        $expectedHtml = '<button >Submit</button>';

        $form = new FormHelper();
        $html = $form->button($text, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }
}
