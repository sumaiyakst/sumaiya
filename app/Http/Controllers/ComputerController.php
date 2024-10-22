<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
public function createproduct(){
    return view('backend.computerpages.createproduct');
}
public function allcomputer(){
    $computers = Computer::all();
    return view('backend.computerpages.allcomputer',compact('computers'));
}

public function storeproduct(Request $request){
$computer = new Computer();
$computer->productname = $request->productname;
$computer->productcetagory = $request->productcetagory;
$computer->productprice = $request->productprice;
$computer->productdescription = $request->productdescription;
if(isset($request->productphoto)){
    $filename = time().'.'.$request->productphoto->Extension();
    $upload_path= public_path('backend/uploads/computer');
    $request->productphoto->move($upload_path,$filename);
    $computer->productphoto = $filename;

}
$computer->save();
session()->flash('success','Product Added Successfully');
return redirect()->back();
}

public function computeredit($id){
$computer= Computer::find($id);
return view('backend.computerpages.editcomputer',compact('computer'));
}

public function updatecomproduct(Request $request,$id){
$computer = Computer::find($id);
$computer->productname = $request->productname;
$computer->productcetagory = $request->productcetagory;
$computer->productprice = $request->productprice;
$computer->productdescription = $request->productdescription;
if(isset($request->productphoto)){
    $filename = time().'.'.$request->productphoto->Extension();
    $upload_path= public_path('backend/uploads/computer');
    $request->productphoto->move($upload_path,$filename);
    $computer->productphoto = $filename;
    
}
$computer->save();
session()->flash('success','Product Updated Successfully');
return redirect()->back();
}
       
public function deletecomputer($id){
$computer = Computer::find($id);
$computer->delete();
session()->flash('success','Product deleted Successfully');
return redirect()->back();
}
}
