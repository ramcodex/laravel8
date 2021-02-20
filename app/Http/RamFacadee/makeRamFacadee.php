<?php 

namespace App\Http\makeRamFacadee;
use Illuminate\Support\Facades\Facade;

class makeRamFacadee extends Facade{
   protected static function getFacadeAccessor(){
        // parent::getFacadeAccessor();
        return new ramFacadeCls();
   }    
}

