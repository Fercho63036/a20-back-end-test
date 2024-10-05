<?php

namespace Tests\Feature;

use Tests\TestCase;

class StringValueControllerTest extends TestCase
{
    public function testGetMaximumValueFunctionWithAaaaaa()
    {
        $data = ['input' => 'aaaaaa'];

        $response = $this->postJson('/api/problem-2', $data);

        $response->assertStatus(200)
                 ->assertJson([
                     'data' => 12,
                 ]);
    }

    public function testGetMaximumValueFunctionWithAbcabcddd()
    {
        $data = ['input' => 'abcabcddd'];

        $response = $this->postJson('/api/problem-2', $data);

        $response->assertStatus(200)
                 ->assertJson([
                     'data' => 9,
                 ]);
    }

    public function testInputValidationWithEmptyValue()
    {
        $data = ['input' => ''];

        $response = $this->postJson('/api/problem-2', $data);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('input');
    }

    public function testInputValidationWithStringSizeGreaterThan100000()
    {
        $data = ['input' => str_repeat('a', 100001)];

        $response = $this->postJson('/api/problem-2', $data);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('input');
    }

    public function testInputValidationWithNonEnglishAlphabet()
    {
        $data = ['input' => 'abcdñaa'];

        $response = $this->postJson('/api/problem-2', $data);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('input');
    }

    public function testInputValidationWithUppercaseLetters()
    {
        $data = ['input' => 'aTaa'];

        $response = $this->postJson('/api/problem-2', $data);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('input');
    }
}
