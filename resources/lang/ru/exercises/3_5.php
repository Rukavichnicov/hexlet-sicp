<?php

return [
    'title' => 'Интегрирование методом Монте-Карло',
    'description1' =>
        'Интегрирование методом Монте-Карло (Monte Carlo integration) — ' .
        'способ приближенного вычисления определенных интегралов при помощи моделирования методом Монте-Карло. ' .
        'Рассмотрим задачу вычисления площади фигуры, описываемой предикатом ',
    'description2' =>
        ', который истинен для точек ',
    'description3' =>
        ', принадлежащих фигуре, и ложен для точек вне фигуры. ' .
        'Например, область, содержащаяся в круге с радиусом ',
    'description4' =>
        ' и центром в точке ',
    'description5' =>
        ', описывается предикатом, проверяющим ',
    'description6' =>
        '. Чтобы оценить площадь фигуры, описываемой таким предикатом, для начала выберем прямоугольник, ' .
        'который содержит нашу фигуру. Например, прямоугольник с углами ',
    'description7' =>
        ' и ',
    'description8' =>
        ', расположенными по диагонали, содержит вышеописанный круг. ' .
        'Нужный нам интеграл — площадь той части прямоугольника, которая лежит внутри фигуры. ' .
        'Мы можем оценить интеграл, случайным образом выбирая точки ',
    'description9' =>
        ', лежащие внутри прямоугольника, и проверяя для каждой точки ',
    'description10' =>
        ', чтобы определить, лежит ли точка внутри фигуры. ' .
        'Если мы проверим много точек, доля тех, которые окажутся внутри области, даст нам приближенное значение отношения площадей фигуры и прямоугольника. ' .
        'Таким образом, домножив это значение на площадь прямоугольника, мы получим приближенное значение интеграла.',
    'description11' =>
        'Реализуйте интегрирование методом Монте-Карло в виде процедуры ',
    'description12' =>
        ', которая в качестве аргументов принимает предикат ',
    'description13' =>
        ', верхнюю и нижнюю границы прямоугольника ',
    'description14' =>
        ' и ',
    'description15' =>
        ', а также число проверок, которые мы должны осуществить, чтобы оценить отношение площадей. ' .
        'Ваша процедура должна использовать ту же самую процедуру ',
    'description16' =>
        ', которая выше использовалась для оценки значения ',
    'description17' =>
        '. Оцените ',
    'description18' =>
        ' при помощи ',
    'description19' =>
        ' измерив площадь единичного круга.',
    'description20' =>
        'Вам может пригодиться процедура, которая выдает число, случайно выбранное внутри данного отрезка. ' .
        'Нижеприведенная процедура ',
    'description21' =>
        ' решает эту задачу, используя процедуру ',
    'description22' =>
        ', введенную в разделе ',
    'description23' =>
        ', которая возвращает неотрицательное число меньше своего аргумента.',
];
