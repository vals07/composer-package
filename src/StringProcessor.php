<?php 

namespace AlisaSelezneva\ComposerPackage;

class StringProcessor {

    /**
     * Проверяет, является ли строка палиндромом
     * @param string $input Проверяемая строка
     * @return bool true если строка палиндром, false - в противном случае
     */
    public function isPalindrome(string $input): bool {
        // Приводим к нижнему регистру для регистронезависимого сравнения
        $normalized = strtolower($input);

        // Сравниваем строку с перевернутой версией
        return $normalized === strrev($normalized);
    }
}