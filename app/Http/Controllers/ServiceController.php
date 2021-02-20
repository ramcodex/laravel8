<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Model\Product;
use App\Models\Product;
use App\Http\RamFacadee\ramFacadeCls;
use App\Http\RamFacadee\makeRamFacadee;
use App\Http\Injection\injectionclass;

class ServiceController extends Controller
{
   
   public function koshi(){
    //$obj = new ramFacadeCls();
    //$obj->ShowResult();
    makeRamFacadee::ShowResult();
    
   }


    public function View(){
        return view('product.product');
    }
    
    public function store(Request $request){
        //return $request->all();
        $data = $request->input();
        try{
            $student = new Product;
            $student->name = $data['name'];
            $student->price = $request->input('price');
            $student->description = $data['description'];
            $student->save();
            return redirect('service')->with('status',"Insert successfully");
        }
        catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }
    }

    public function serviceDetail($id){
        //return $id;
        // Tutorial url  https://www.youtube.com/watch?v=RTTXZVIL6tw
        try{
            $getPro = Product::where('id', $id)->firstOrfail();
            //$getPro = Product::where('id', $id)->first();
            //return $getPro;
            return view('product.pro-result', compact('getPro'));
        }
        catch(\Exception $exception){
            //return redirect('insert')->with('failed',"operation failed");
            return view('product.error-exception');
        }
    }

    public function serviceDetailBind(Product $routbindid){
            return $routbindid;
    }

    public function getallSerive(){
        return Product::get();
        
        //return ($a + $b);
  }


   public function dependency(){
      // $getObj = new injectionclass;
       //return $getObj->Tiger(12,3);
       //$okkk = $this->getallSerive();
       $check = new injectionclass;
      // return $okkk;
      if(!empty($check)){
          return $check->Tiger();
      }
      else{
        return "no nono";
      }
   }










}
