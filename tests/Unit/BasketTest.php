<?php

namespace Tests\Unit;

use App\Basket;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasketTest extends TestCase
{
    public function testHasItemOrNot()
    {
        $basket = new Basket(['ram','shyam','hari']);

        $this->assertTrue($basket->has('ram'));

        $this->assertTrue($basket->has('shyam'));

//      $this->assertTrue($basket->UniqueNumbers(10));

        $this->assertEquals($basket->UniqueNumbers(10), 'inserted');

        $this->assertEquals($basket->UniqueNumbers(1), 'not inserted');

        $this->assertContains(10, $basket->random);

        $this->assertEquals('Hello all of you',$basket->string);

        $this->assertNotEmpty($basket->string);

        $this->assertStringEndsWith('u',$basket->string);

        $this->assertIsString($basket->string);

        $this->assertStringContainsStringIgnoringCase('you', $basket->string);




    }
}
