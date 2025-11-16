# StringProcessor
PHP-библиотека для обработки строковых данных с функцией проверки на палиндром.

## Описание
Класс StringProcessor предоставляет метод для проверки, является ли строка палиндромом. Палиндром - это строка, которая читается одинаково в обоих направлениях (слева направо и справа налево).

## Требования
PHP 7.0 или выше

## Установка

```shell
composer require alisa-selezneva/composer-package
```

## Использование
```php
<?php
$processor = new StringProcessor();

$result = $processor->isPalindrome("radar");
echo $result ? "Это палиндром" : "Это не палиндром"; // "Это палиндром"

```

## Методы

isPalindrome(string $input): bool
Проверяет, является ли переданная строка палиндромом.

Параметры:

$input (string) - Строка для проверки

Возвращает:

(bool) - true если строка является палиндромом, false - в противном случае

## Особенности

Регистр символов игнорируется ("Radar" считается палиндромом)

Пробелы и знаки препинания учитываются ("а роза упала на лапу Азора" не считается палиндромом из-за пробелов)

## Примеры

```php
$processor = new StringProcessor();

echo $processor->isPalindrome("radar");     // true
echo $processor->isPalindrome("level");     // true
echo $processor->isPalindrome("deified");   // true
echo $processor->isPalindrome("hello");     // false
echo $processor->isPalindrome("world");     // false
echo $processor->isPalindrome("A man a plan a canal Panama"); // false (из-за пробелов)
```