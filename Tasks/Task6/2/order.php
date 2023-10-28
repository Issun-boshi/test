<?php

class Form {
    private static $_map = [
        'noodle' => 'Braised Noodles with:',
        'sweet' => 'Sweet:',
        'sweet_q' => 'Sweet Quantity:'
    ];

    public static function process_form(): string {
        $html = [];

        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                $valueString = implode(', ', $value);
            } else {
                $valueString = $value;
            }
            $valueString = htmlspecialchars($valueString);

            $key = htmlspecialchars($key);

            if (!isset(static::$_map[$key])) {
                continue;
            }

            $html[] = static::$_map[$key] . ' ' . $valueString;
        }

        return '<p>' . implode('</p><p>', $html) . '</p>';
    }
}

echo '<html><body>', Form::process_form(), '</body></html>';
