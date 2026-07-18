<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


// use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function about(){
        $name = 'aung aung';
        $skills = ['Html', 'css', 'Js', 'php', 'laravel'];
        return view('about', compact('name', 'skills'));
    }

    public function showProduct(){
        $allProduct = Product::get();
        dd($allProduct);
    }
    public function showForm(){
        return view('crate_product');
    }

    public function storeData(Request $request){

    try{
Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description
    ]);

    dd('data created successfully');
    }
    catch(error){
        dd('data faile');
    }

    }
}
