<?php

return [
    'title' => 'Размен монет разных валют',
    'description' => [
        '1' =>
        "Рассмотрим программу подсчета способов размена из раздела 1.2.2. " .
        "Было бы приятно иметь возможность легко изменять валюту, которую эта программа использует, так, чтобы можно было, например, вычислить, сколькими способами можно разменять британский фунт. " .
        "Эта программа написана так, что знание о валюте распределено между процедурами first-denomination и count-change (которая знает, что существует пять видов американских монет). " .
        "Приятнее было бы иметь возможность просто задавать список монет, которые можно использовать при размене. ",
        '2' =>
        "Мы хотим переписать процедуру cc так, чтобы ее вторым аргументом был список монет, а не целое число, которое указывает, какие монеты использовать. " .
        "Тогда у нас могли бы быть списки, определяющие типы валют:",
        '3' =>
        "Можно было бы вызывать cc следующим образом:",
        '4' =>
        "Это потребует некоторых изменений в программе cc. Ее форма останется прежней, но со вторым аргументом она будет работать иначе, вот так:",
        '5' =>
        "Определите процедуры first-denomination, except-first-denomination и no-more? в терминах элементарных операций над списковыми структурами. " .
        "Влияет ли порядок списка coinvalues на результат, получаемый cc? Почему?",
    ],
];
