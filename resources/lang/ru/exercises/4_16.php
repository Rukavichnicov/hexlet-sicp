<?php

return [
    'title' => 'Реализации обработки внутренних определений',
    'description' => [
        '1' => "В этом упражнении мы реализуем только что описанный метод обработки внутренних определений. " .
        "Мы предполагаем, что интерпретатор поддерживает let (см. упражнение 4.6).",
        '2' => "а. Измените процедуру lookup-variable-value (раздел 4.1.3) так, чтобы она, обнаруживая в " .
        "качестве значения символ *unassigned*, сообщала об ошибке.",
        '3' => "б. Напишите процедуру scan-out-defines, которая берет тело процедуры и возвращает его " .
        "эквивалент без внутренних определений, выполняя описанное нами преобразование.",
        '4' => "в. Вставьте scan-out-defines в интерпретатор, либо в make-procedure, либо в proce ure-body. " .
        "Какое из этих мест лучше? Почему?",
    ],
];
