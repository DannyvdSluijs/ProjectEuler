<?php

declare(strict_types=1);

namespace Dannyvandersluijs\ProjectEuler;

class Problem092
{
    public function __invoke(): string
    {
        $string = file_get_contents('http://projecteuler.net/project/words.txt');

        $string = str_replace('"', '', $string);
        $originals = explode(',', $string);
        $copy = [];
        $result = [];

        foreach ($originals as $key => $value) {
            $tmp = str_split($value);
            sort($tmp);
            $copy[$key] = implode($tmp);
        }

        foreach ($originals as $key => $value) {
            $keys = array_keys($copy, $copy[$key]);
            if (count($keys) === 1) {
                unset($originals[$key]);
                unset($copy[$key]);
            } else {
                foreach ($keys as $keeyy) {
                    $result[$key][] = $originals[$keeyy];
                }
            }
        }

        // Now we have an array with all the anagrams
        foreach ($result as $test) {
            if (count($test) !== 2) {
                return (string)count($test);
            }
        }

        throw new \Exception('No solution found');
    }
}
