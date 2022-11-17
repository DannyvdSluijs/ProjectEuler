<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem208
{
    public function __invoke(): string
    {

        $Array = $this->permutations("01", 70);
        for ($i = 0, $iMax = count($Array); $i < $iMax; $i++) {
            echo "$i." . $Array[$i] . "<BR>";
        }

        throw new \Exception('No solution found');
    }

    private function permutations($letters, $num)
    {
        $last = str_repeat($letters{0}, $num);
        $result = array();
        while ($last != str_repeat($this->lastChar($letters), $num)) {
            $result[] = $last;
            $last = $this->charAdd($letters, $last, $num - 1);
        }
        $result[] = $last;
        return $result;
    }

    private function charAdd($digits, $string, $char)
    {
        if ($string{$char} <> $this->lastChar($digits)) {
            $string{$char} = $digits{strpos($digits, $string{$char}) + 1};
            return $string;
        } else {
            $string = $this->changeAll($string, $digits{0}, $char);
            return $this->charAdd($digits, $string, $char - 1);
        }
    }

    private function lastChar($string)
    {
        return $string{strlen($string) - 1};
    }
    private function changeAll($string, $char, $start = 0, $end = 0)
    {
        if ($end == 0) {
            $end = strlen($string) - 1;
        }
        for ($i = $start; $i <= $end; $i++) {
            $string{$i} = $char;
        }
        return $string;
    }
}
