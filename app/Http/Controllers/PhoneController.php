<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
public function addphone(){

    return view('backend.phonepages.addphone');
}

public function allphone(){

    $phone = Phone::all();

    return view('backend.phonepages.allphone',compact('phone'));
}

public function storephone(Request $request){

$phone = new Phone();
$phone->productname = $request->productname;
$phone->productcetagory = $request->productcetagory;
$phone->productprice = $request->productprice;
$phone->productdescription = $request->productdescription;
if(isset($request->productphoto)){
    $filename = time().'.'.$request->productphoto->Extension();
    $upload_path= public_path('backend/uploads/phone');
    $request->productphoto->move($upload_path,$filename);
    $phone->productphoto = $filename;

}
$phone->save();
session()->flash('success','Product Added Successfully');
return redirect()->back();
}
    

public function editphone($id){
$phone= Phone::find($id);
return view('backend.phonepages.editphone',compact('phone'));
}

public function updatephone(Request $request,$id){
$phone = Phone::find($id);
$phone->productname = $request->productname;
$phone->productcetagory = $request->productcetagory;
$phone->productprice = $request->productprice;
$phone->productdescription = $request->productdescription;
if(isset($request->productphoto)){
    $filename = time().'.'.$request->productphoto->Extension();
    $upload_path= public_path('backend/uploads/phone');
    $request->productphoto->move($upload_path,$filename);
    $phone->productphoto = $filename;
    
}
$phone->save();
session()->flash('success','Product Updated Successfully');
return redirect()->back();
}

public function deletephone($id){
    $computer = Phone::find($id);
    $computer->delete();
    session()->flash('success','Product deleted Successfully');
    return redirect()->back();
    }

}
