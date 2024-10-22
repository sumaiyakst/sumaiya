<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Computer;
use App\Models\Phone;

class FrontendController extends Controller
{
    public function welcome()
    {
        return view('frontend.pages.welcome');
    }
    public function laptop()
    {
        $products = Product::all();
        return view('frontend.pages.laptop',compact('products'));
    }
    public function showProduct($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.show-product',compact('product'));
    }

    public function computer()
    {
        $computers = Computer::all();
        return view('frontend.pages.computer',compact('computers'));
    }
    public function phone()
    {
        $phone = Phone::all();
        return view('frontend.pages.phone',compact('phone'));
    }
   


}
