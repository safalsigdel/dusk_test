<?php

namespace Tests\Unit;

use App\Box;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BoxTest extends TestCase
{
    public function testHasItemInBox()
    {
        $box = new Box(['cat','toy','torch']);

        $this->assertTrue($box->has('toy'));

        $this->assertFalse($box->has('ball'));
    }

    public function testTakenOneFromTheBox()
    {
        $box = new Box(['torch']);
        $this->assertEquals('torch', $box->takeOne());
    }

    public function testStartsWithALetter()
    {
        $box = new Box(['toy','torch','ball','cat','tissue']);
        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        //empty array if pass
        $this->assertEmpty($box->startsWith('s'));
    }
}
