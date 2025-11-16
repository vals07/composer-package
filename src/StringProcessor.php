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
        $normalized = mb_strtolower($input);

        // Сравниваем строку с перевернутой версией
        return $normalized === $this->mb_strrev($normalized);
    }

    /**
     * Переворачивает мультибайтовую строку
     *
     * @param string $string Строка, которую переворачиваем
     * @param string|null $encoding Кодировка символов. Если не указано, будет использована внутренняя кодировка символов файла скрипта.
     * @return string Перевернутая строка
     */
    private function mb_strrev(string $string, ?string $encoding = null): string
    {
        $chars = mb_str_split($string, 1, $encoding ?: mb_internal_encoding());
        
        return implode('', array_reverse($chars));
    }
}