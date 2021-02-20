<?php

namespace App\Http\Injection;
use App\Models\Product;
class injectionclass{
    public $a;
    public $b;
    public function Tiger(){
        //return "this is big tier";
        return Product::get();
    }

}