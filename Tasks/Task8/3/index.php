<?php

$html = '<html>
<body>
<table>';

$file_pointer = fopen(__DIR__ . '/example.csv', 'rb');

$addresses = [];
while (($buffer = fgets($file_pointer)) !== false) {
    $html .= '<tr>';
    $html .= '<td>';

    $buffer = trim($buffer);
    $buffer = str_replace('",', '</td><td>', $buffer);
    $buffer = str_replace(',', '</td><td>', $buffer);
    $html .= substr($buffer, 1);

    $html .= '</td>';
    $html .= '</tr>';
}

$html .= '</table>
</body>
</html>';

echo $html;
