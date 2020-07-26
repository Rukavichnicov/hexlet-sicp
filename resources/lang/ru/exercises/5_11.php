<?php

return [
    'title' => "Восстановление значения в другом регистре",
    'description' => [
        '1' => "Когда мы в разделе 5.1.4 определяли save и restore, мы не указали, что произойдет, если " .
        "попытаться восстановить значение не в том регистре, который был сохранен последним, как в " .
        "последовательности команд",
        '2' => "Есть несколько разумных вариантов значения restore:",
        '3' => "а. (restore y) переносит в y последнее значение, сохраненное на стеке, независимо от того, " .
        "откуда это значение взялось. Так работает наш имитатор. Покажите, как с помощью такого поведения убрать " .
        "одну команду из машины Фибоначчи (раздел 5.1.4, рисунок 5.12).",
        '4' => "б. (restore y) переносит в y последнее значение, сохраненное на стеке, но только в том случае, " .
        "когда это значение происходит из регистра y; иначе возникает сообщение об ошибке. Модифицируйте имитатор " .
        "и заставьте его вести себя таким образом. Придется изменить save так, чтобы он сохранял имя регистра " .
        "вместе со значением.",
        '5' => "в. (restore y) переносит в y последнее значение, сохраненное из y, независимо от того, какие " .
        "другие регистры были сохранены и не восстановлены после y. Модифицируйте имитатор так, чтобы он вел себя " .
        "таким образом. С каждым регистром придется связать свой собственный стек. Операция initialize-stack " .
        "должна инициализировать стеки всех регистров."
    ]
];
