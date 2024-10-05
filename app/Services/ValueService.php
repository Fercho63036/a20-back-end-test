<?php

namespace App\Services;

class ValueService
{
    public function computeMaximumValue(string $inputString): int
    {
        $stringLength = strlen($inputString);
        $maxValue = 0;

        for ($subLength = 1; $subLength <= $stringLength; $subLength++) {
            for ($pos = 0; $pos <= $stringLength - $subLength; $pos++) {
                $substring = substr($inputString, $pos, $subLength);
                $occurrences = $this->countOccurrences($inputString, $substring);
                $value = $subLength * $occurrences;
                if ($value > $maxValue) {
                    $maxValue = $value;
                }
            }
        }

        return $maxValue;
    }

    public function countOccurrences($string, $substring)
    {
        $occurrences = 0;
        $position = 0;

        while (($position = strpos($string, $substring, $position)) !== false) {
            $occurrences++;
            $position++;
        }

        return $occurrences;
    }
}
