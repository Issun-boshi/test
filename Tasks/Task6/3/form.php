<?php

class Calculator {
    private $operand_1;
    private $operand_2;
    private $operation;

    public function __construct() {
        if (!isset($_POST['operand_1'])) {
            throw new Exception('missing operand 1');
        }
        if (!is_numeric($_POST['operand_1'])) {
            throw new Exception('operand 1 is not a number');
        }
        $this->operand_1 = (float)$_POST['operand_1'];

        if (!isset($_POST['operand_2'])) {
            throw new Exception('missing operand 2');
        }
        if (!is_numeric($_POST['operand_2'])) {
            throw new Exception('operand 2  is not a number');
        }
        $this->operand_2 = (float)$_POST['operand_2'];

        if (!isset($_POST['operation'])) {
            throw new Exception('missing operation');
        }
        if (!in_array($_POST['operation'], ['+', '-', '*', '/'])) {
            throw new Exception('invalid operation');
        }
        $this->operation = $_POST['operation'];
    }

    public function getResult(): string {
        $string = $this->operand_1 . ' ' . $this->operation . ' ' . $this->operand_2 . ' = ';

        switch ($this->operation) {
            case '+':
                $string .= ($this->operand_1 + $this->operand_2);
                break;
            case '-':
                $string .= ($this->operand_1 - $this->operand_2);
                break;
            case '*':
                $string .= ($this->operand_1 * $this->operand_2);
                break;
            case '/':
                $string .= ($this->operand_1 / $this->operand_2);
                break;
        }

        return $string;
    }
}

try {
    $calculator = new Calculator();
    echo '<html><body><p>' . $calculator->getResult() . '</p></body></html>';
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage();
}
