<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class Homecontroller extends Controller
{
    public function index(){
        return view('Home');
    }

    public function back(){
        return view('Backtheam');
    }
    public function list(){
        return view('backend/users/list');
    }
    public function add(){
        return view('backend/users/add');
    }

    public function listproduct(){
        $showdata = Product::all();

        return view('backend/products/listproduct',compact('showdata'));
    }
    public function addproduct(){
        return view('backend/products/addproduct');
    }
    public function editproduct($id){
     $edituser =Product::select('title','description','sku','mrp','prize')
     ->where('id',$id)->first();
     return view('backend/products/editproduct',compact('edituser'));

    }

    public function deleteproduct($id){

        $deleteuser =product::find($id);
        $deleteuser->delete();
        session()->flash('success',' Delete seccessfully');
        return redirect('listproduct');
    }



    public function productform(Request $request){
        $request->validate([
        'title'=>'required',
        'description'=>'required',
        'sku'=>'required',
        'mrp'=>'required',
        'prize'=>'required'
        ]);

$addproduct = new Product;
$addproduct->title = $request->get('title');
$addproduct->description = $request->get('description');
$addproduct->sku = $request->get('sku');
$addproduct->mrp = $request->get('mrp');
$addproduct->prize = $request->get('prize');

$addproduct->save();
session()->flash('success','product insert seccessfully');
        // print_r($request->all());

return redirect()->back();

    }
    public function updateform(Request $request,$id){
        $request->validate([
        'title'=>'required',
        'description'=>'required',
        'sku'=>'required',
        'mrp'=>'required',
        'prize'=>'required'
        ]);
        Product::where('id',$id)->update([
    'title'=>$request->get('title'),
    'description'=>$request->get('description'),
    'sku'=>$request->get('sku'),
    'mrp'=>$request->get('mrp'),
    'prize'=>$request->get('prize'),
]);

session()->flash('success','product update seccessfully');
return redirect()->back();

    }
    public function Postform(Request $request){
        $request->validate([
            'text'=> 'required|min:5|max:15',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password'=> [
                'required',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'confirmed'],
            'number'=>['required', 'integer', 'max:15', 'min:6'],
            'file' => 'required|max:10000|mimes:doc,docx',
            'DateTime'=> 'required|after_or_equal:' . date('Y-m-d H:i:s'),
            'time' => ['required','integer','between:20,22'],
            'textarea-'=> 'required|min:3|max:1000',
            
        ]);

       

    }
}
