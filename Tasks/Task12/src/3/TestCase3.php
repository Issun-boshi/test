<?php

namespace Test3;

use PHPUnit\Framework\TestCase;

class TestCase3 extends TestCase {
    public function __construct(string $name) {
        parent::__construct($name);

        $_SERVER['REQUEST_METHOD'] = 'GET';
    }

    public function testSelect1() {
        $options = [
            'cuke' => 'Braised Sea Cucumber',
            'stomach' => "Sauteed Pig's Stomach",
            'tripe' => 'Sauteed Tripe with Wine Sauce',
            'taro' => 'Stewed Pork with Taro',
            'giblets' => 'Baked Giblets with Salt',
            'abalone' => 'Abalone with Marrow and Duck Feet'
        ];
        $expectedHtml = '<select ><option value="cuke">Braised Sea Cucumber</option><option value="stomach">Sauteed Pig&#039;s Stomach</option><option value="tripe">Sauteed Tripe with Wine Sauce</option><option value="taro">Stewed Pork with Taro</option><option value="giblets">Baked Giblets with Salt</option><option value="abalone">Abalone with Marrow and Duck Feet</option></select>';

        $form = new FormHelper();
        $html = $form->select($options);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect2() {
        $options = ['Dilly', 'Billy', 'Willy'];
        $expectedHtml = '<select ><option value="0">Dilly</option><option value="1">Billy</option><option value="2">Willy</option></select>';

        $form = new FormHelper();
        $html = $form->select($options);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect3() {
        $options = [];
        $expectedHtml = '<select ></select>';

        $form = new FormHelper();
        $html = $form->select($options);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect4() {
        $options = [];
        $attributes = ['multiple' => true];
        $expectedHtml = '<select multiple></select>';

        $form = new FormHelper();
        $html = $form->select($options, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect5() {
        $options = [];
        $attributes = ['multiple' => false];
        $expectedHtml = '<select ></select>';

        $form = new FormHelper();
        $html = $form->select($options, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect6() {
        $options = [];
        $attributes = ['class' => 'red-select'];
        $expectedHtml = '<select class="red-select"></select>';

        $form = new FormHelper();
        $html = $form->select($options, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect7() {
        $options = [];
        $attributes = ['multiple' => true, 'name' => 'food'];
        $expectedHtml = '<select multiple name="food[]"></select>';

        $form = new FormHelper();
        $html = $form->select($options, $attributes);
        $this->assertEquals($expectedHtml, $html);
    }

    public function testSelect8() {
        $options = ['Dil<ly', 'Bil&ly', 'Willy'];
        $expectedHtml = '<select ><option value="0">Dil&lt;ly</option><option value="1">Bil&amp;ly</option><option value="2">Willy</option></select>';

        $form = new FormHelper();
        $html = $form->select($options);
        $this->assertEquals($expectedHtml, $html);
    }
}
