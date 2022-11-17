<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem089
{
    public function __invoke(): string
    {

        $numbers = file('http://projecteuler.net/project/roman.txt');
        $out = 0;
        $oldtotalsize = 0;

        foreach ($numbers as $number) :
            $oldtotalsize += strlen(trim($number));
            $out += strlen($this->decimalToRoman($this->romanToDecimal(trim($number))));
        endforeach;

        return (string) ($oldtotalsize - $out);
    }

    private function romanToDecimal($string)
    {
        $arr = str_split($string);
        $total = 0;

        for ($i = 0, $max = count($arr) - 1; $i < $max; $i++) :
            // see if the next character is a higher character, meaning the that is a correction character.
            switch ($arr[$i]) :
                case 'I':
                    switch ($arr[$i + 1]) :
                        case 'I':
                            // Normal, add 1 to total
                            $total++;
                            break;
                        case 'V':
                        case 'X':
                            // Correction remove 1 from total
                            $total--;
                            break;
                        default:
                            // Other combo's shouldn't occur
                            break;
                    endswitch;
                    break;
                case 'V':
                    // Always add 5, V may not be used as substraction
                    $total += 5;
                    break;
                case 'X':
                    switch ($arr[$i + 1]) :
                        case 'I':
                        case 'V':
                        case 'X':
                            // Normal, add 10 to total
                            $total += 10;
                            break;
                        case 'L':
                        case 'C':
                            // Correction remove 10 from total
                            $total -= 10;
                            break;
                        default:
                            // Other combo's shouldn't occur
                            break;
                    endswitch;
                    break;
                case 'L':
                    // Always add 50, L may not be used as substraction
                    $total += 50;
                    break;
                case 'C':
                    switch ($arr[$i + 1]) :
                        case 'I':
                        case 'V':
                        case 'X':
                        case 'L':
                        case 'C':
                            // Normal, add 100 to total
                            $total += 100;
                            break;
                        case 'D':
                        case 'M':
                            // Correction remove 100 from total
                            $total -= 100;
                            break;
                        default:
                            // Other combo's shouldn't occur
                            break;
                    endswitch;
                    break;
                case 'D':
                    // Always add 500, D may not be used as substraction
                    $total += 500;
                    break;
                case 'M':
                    // Always add 1000, M may not be used as substraction
                    $total += 1000;
                    break;
            endswitch;
        endfor;

        switch ($arr[count($arr) - 1]) :
            case 'I':
                $total++;
                break;
            case 'V':
                $total += 5;
                break;
            case 'X':
                $total += 10;
                break;
            case 'L':
                $total += 50;
                break;
            case 'C':
                $total += 100;
                break;
            case 'D':
                $total += 500;
                break;
            case 'M':
                $total += 1000;
                break;
        endswitch;

        return $total;
    }

    private function decimalToRoman($int)
    {
        $return = '';
        // Determine the number of M required
        $remains = $int % 1000;
        for ($x = 0, $max = ($int - ($remains)) / 1000; $x < $max; $x++) :
            $return = $return . 'M';
        endfor;
        // Determine if whe need to place a CM because the remains is above 900
        if ($remains >= 900) :
            $return = $return . 'CM';
            $remains -= 900;
        endif;

        // Determine if whe need to place a D because the remains is above 500
        if ($remains >= 500) :
            $return = $return . 'D';
            $remains -= 500;
        endif;

        // Determine if whe need to place a CD because the remains is above 400
        if ($remains >= 400) :
            $return = $return . 'CD';
            $remains -= 400;
        endif;

        // Determine the number of C required
        $oldremains = $remains;
        $remains = $remains % 100;
        for ($x = 0, $max = ($oldremains - ($remains)) / 100; $x < $max; $x++) :
            $return = $return . 'C';
        endfor;

        // Determine if whe need to place a XC because the remains is above 90
        if ($remains >= 90) :
            $return = $return . 'XC';
            $remains -= 90;
        endif;

        // Determine if whe need to place a L because the remains is above 50
        if ($remains >= 50) :
            $return = $return . 'L';
            $remains -= 50;
        endif;

        // Determine if whe need to place a XL because the remains is above 40
        if ($remains >= 40) :
            $return = $return . 'XL';
            $remains -= 40;
        endif;

        // Determine the number of X required
        $oldremains = $remains;
        $remains = $remains % 10;
        for ($x = 0, $max = ($oldremains - ($remains)) / 10; $x < $max; $x++) :
            $return = $return . 'X';
        endfor;

        // Determine if whe need to place a IX because the remains is above 9
        if ($remains >= 9) :
            $return = $return . 'IX';
            $remains -= 9;
        endif;

        // Determine if whe need to place a V because the remains is above 5
        if ($remains >= 5) :
            $return = $return . 'V';
            $remains -= 5;
        endif;

        // Determine if whe need to place a IV because the remains is above 4
        if ($remains >= 4) :
            $return = $return . 'IV';
            $remains -= 4;
        endif;

        // Determine the number of X required
        for ($x = 0, $max = $remains; $x < $max; $x++) :
            $return = $return . 'I';
        endfor;

        return $return;
    }
}
