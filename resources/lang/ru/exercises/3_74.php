<?php

return [
    'title' => "Переходы входного сигнала через ноль",
    'description' => [
        '1' =>
        "Лиза П. Хакер разрабатывает систему для обработки сигналов, приходящих от физических сенсоров. " .
        "Один из важных инструментов, который она хочет построить, — это сигнал, описывающий переходы входного сигнала через ноль (zero crossings). " .
        "Выходной сигнал должен равняться +1, когда сигнал на входе меняется с отрицательного на положительный, -1, когда сигнал меняется с положительного на отрицательный, и 0 в остальных случаях. " .
        "(Допустим, что знак нулевого входа положителен). " .
        "Например, типичный входной сигнал и связанный с ним сигнал перехода через ноль могут выглядеть так:",
        '2' =>
        "В Лизиной системе сигнал от сенсора представляется как поток sense-data, а zerocrossings представляет соответствующий поток пересечений нуля. " .
        "Для начала Лиза пишет процедуру sign-change-detector, которая берет два значения в качестве аргументов и, сравнив их знаки, выдает 0, 1 или -1. " .
        "Затем она строит поток переходов через ноль следующим образом:",
        '3' =>
        "Мимо проходит Лизина начальница Ева Лу Атор и замечает, что программа приблизительно равносильна следующей, написанной с использованием обобщенной версии stream-map из упражнения 3.50:",
        '4' =>
        "Завершите программу, вставив необходимое <expression>.",
    ],
];
