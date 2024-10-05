<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\ValueService;

class ValueServiceTest extends TestCase
{
    public function testComputeMaximumValueWithAaaaaa()
    {
        $service = new ValueService();
        $input   = 'aaaaaa';

        $result = $service->computeMaximumValue($input);

        $this->assertEquals(12, $result);
    }

    public function testComputeMaximumValueWithAbcabcddd()
    {
        $service = new ValueService();
        $input   = 'abcabcddd';

        $result = $service->computeMaximumValue($input);

        $this->assertEquals(9, $result);
    }

    public function testCountOccurrencesSubstringAaInStringAaaaaa()
    {
        $service   = new ValueService();
        $string    = 'aaaaaa';
        $substring = 'aa';

        $result = $service->countOccurrences($string, $substring);

        $this->assertEquals(5, $result);
    }
}
