<?php

return [
    'title' => 'Общий случай привидения с несколькими аргументами',
    'description' =>
        "Покажите, как обобщить apply-generic так, чтобы она обрабатывала приведение в общем случае с несколькими аргументами. " .
        "Один из способов состоит в том, чтобы попытаться сначала привести все аргументы к типу первого, потом к типу второго, и так далее. " .
        "Приведите пример, когда эта стратегия (а также двухаргументная версия, описанная выше) недостаточно обща. " .
        "(Подсказка: рассмотрите случай, когда в таблице есть какие-то подходящие операции со смешанными типами, но обращения к ним не произойдет.)",
];
