# тестовое задание

## Вводная:

Есть произвольные числа с несколькими знаками после запятой.

Пример массива:

55.100, 55.01, 50.001, 55.0010, 50.00

## Задача:

С использованием функции preg_replace убрать все "лишние" нули после точки. Пример:

55.100 -> 55.1  
55.01 -> 55.01  
50.001 -> 50.001  
50.0010 -> 50.001  
55.00 -> 55  

