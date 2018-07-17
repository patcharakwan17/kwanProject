<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProDucts;

class ProductController extends Controller
{
    //
    public function index(){
        $packages = ProDucts::all();
        $count = ProDucts::count();
        
        return view('product.index',[
            'packages'=>$packages,
            'count'=>$count
        ]);
    }
    
    
    //public function adcart($packId){
        //$packages = ProDucts::findOrFail($packId);
        //return view('product.adcart',['packages'=>$packages]);
    //}
    
    public function destroy($packId){
        ProDuct::destroy($packId);
        return back();
    }
    
}
