<?php

class Form {
    private $_requiredList = ['weight', 'length', 'width', 'height', 'address-one1', 'city1', 'state1', 'zip1', 'country1', 'address-one2', 'city2', 'state2', 'zip2', 'country2'];

    public function __construct() {
        $errors = [];
    
        foreach ($this->_requiredList as $fieldName) {
            if (empty($_POST[$fieldName])) {
                $errors[] = $fieldName;
            }
        }

        if (count($errors) > 0) {
            throw new Exception('missing ' . implode(', ', $errors));
        }
    }

    public function verify(): string {
        if (!is_numeric($_POST['weight']) || $_POST['weight'] <= 0 || $_POST['weight'] > 68) {
            return 'Weight must be greater than 0kg and less than 68kg';
        }
        if (!is_numeric($_POST['length']) || $_POST['length'] <= 0 || $_POST['length'] > 91) {
            return 'Length must be greater than 0cm and less than 91cm';
        }
        if (!is_numeric($_POST['width']) || $_POST['width'] <= 0 || $_POST['width'] > 91) {
            return 'Width must be greater than 0cm and less than 91cm';
        }
        if (!is_numeric($_POST['height']) || $_POST['height'] <= 0 || $_POST['height'] > 91) {
            return 'Height must be greater than 0cm and less than 91cm';
        }

        return 'Order is valid';
    }
}

try {
    $form = new Form();
    echo $form->verify();
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage();
}
