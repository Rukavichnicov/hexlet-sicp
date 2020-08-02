<?php

return [
    'title' => "Процедура partial-tree",
    'description' => [
        '1' =>
        "Следующая процедура list->tree преобразует упорядоченный список в сбалансированное бинарное дерево. " .
        "Вспомогательная процедура partial-tree принимает в качестве аргументов целое число n и список по крайней мере из n элементов, и строит сбалансированное дерево из первых n элементов дерева." .
        "Результат, который возвращает partial-tree, — это пара (построенная через cons), car которой есть построенное дерево, а cdr — список элементов, не включенных в дерево.",
        '2' =>
        "а. Дайте краткое описание, как можно более ясно объясняющее работу partial-tree. Нарисуйте дерево, которое partial-tree строит из списка (1 3 5 7 9 11)",
        '3' =>
        "б. Каков порядок роста по отношению к числу шагов, которые требуются процедуре list->tree для преобразования дерева из n элементов?",
    ],
];
