<?php
/**
 * Created by PhpStorm.
 * User: safal sigdel
 * Date: 1/23/2019
 * Time: 4:23 PM
 */

namespace App;


class Basket
{
    public $items;

    public $random = array(1,2,3,4);

    public $string = 'Hello all of you';

    public function __construct($items =[])
    {
        $this->items = $items;
    }

    public function has($item)
    {
        return in_array($item,$this->items);
    }

    public function UniqueNumbers($number)
    {
        if (!in_array($number, $this->random)) {

            array_push($this->random, $number);

            return 'inserted';

        }else{
            return 'not inserted';


        }
    }

}