<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public $count = array();

    public function increaseCount()
    {
        for ($i = 0; $i < 10; $i++) {
            array_push($this->count, $i);
        }
    }

    public function testExample()
    {
        $this->increaseCount();
        $this->assertContains(1,$this->count);
    }
}
