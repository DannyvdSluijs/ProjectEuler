<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem022
{
    public function __invoke(): string
    {
        $text = file_get_contents('names.text');
        $names = explode('","', $text);
        sort($names);

        $fullscore = 0;
        foreach ($names as $i => $iValue) {
            $fullscore += ($i + 1) * $this->calcname($iValue);
        }
        return (string) $fullscore;
    }

    private function calcname($name)
    {
        for ($x = 0, $xmax = strlen($name); $x < $xmax; $x++) {
            $score += (ord($name[$x]) - 64);
        }
        return $score;
    }
}
