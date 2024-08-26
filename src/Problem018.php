<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem017
{
    public function __invoke(): string
    {
        $count = 0;
        for ($number = 1; $number <= 1000; $number += 1) {
            $text = $this->writeOutNumber($number);
            $count += strlen($text);
            echo $text . PHP_EOL;
        }
        return (string) $count;
    }

    private function writeOutNumber(int $number): string
    {
        if ($number === 0) {
            return '';
        }
        if ($number === 1_000) {
            return 'onethousand';
        }
        if ($number > 20 && $number < 100 & $number % 10 !== 0) {
            return $this->writeOutNumber(intdiv($number, 10) * 10) . $this->writeOutNumber($number % 10);
        }
        if ($number > 100 && $number < 1000 & $number % 100 !== 0) {
            return $this->writeOutNumber(intdiv($number, 100) * 100) . 'and' . $this->writeOutNumber($number % 100);
        }
        if ($number % 100 === 0 && $number >= 100) {
            return $this->writeOutNumber(intdiv($number, 100)) . 'hundred';
        }
        return match ($number) {
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine',
            10 => 'ten',
            11 => 'eleven',
            12 => 'twelve',
            13 => 'thirteen',
            14 => 'fourteen',
            15 => 'fifteen',
            16 => 'sixteen',
            17 => 'seventeen',
            18 => 'eighteen',
            19 => 'nineteen',
            20 => 'twenty',
            30 => 'thirty',
            40 => 'forty',
            50 => 'fifty',
            60 => 'sixty',
            70 => 'seventy',
            80 => 'eighty',
            90 => 'ninety',
            100 => 'onehundred',
        };
    }
}
