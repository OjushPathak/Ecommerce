<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;

use App\Models\Order;

use PDF;


class AdminController extends Controller
{

    
    

    public function view_catagories(){
        
        $data = catagory::all();

        return view('admin.catagory',compact('data'));
    }







    public function add_catagory(Request $request){

        $data = new catagory;

        $data -> catagory_name = $request -> name;

        $data -> save();

        return redirect()->back()->with('message', 'Your Catagory was added.');

    }


    public function delete_catagory($id){

        $data = catagory::find($id);

        $data -> delete();
        return redirect()-> back()->with('message', 'Your Catagory was Deleted.');



       

    }

    public function view_product(){


        $catagory =catagory::all();

        
        return view('admin.product',compact('catagory'));


       

    }


    public function add_product(Request $request){

        
        
        $product = new product();

        $product -> title = $request -> title;


        $product -> description = $request -> description;

        $product -> price = $request -> price;

        $product -> quantity = $request -> quantity;

        $product -> discount_price = $request -> discount_price;

        $product -> catagory = $request -> catagory;


        $image = $request -> image;

        $imagename = time().'.'.$image -> getClientOriginalExtension();

        $request -> image->move('product',$imagename);

        $product -> image = $imagename;



        $product -> save();

        return redirect() -> back()->with('message','Product Added successfully.');
       

    }



    public function show_product(){


        
        $product = product::all();


        
        return view('admin.show_product',compact('product'));
     

    }






    public function delete_product($id){


        
        $product = product::find($id);

        $product -> delete();

        return redirect()->back()->with('message','Product deleted successfully.');  


    }






    public function update_product($id){


        
        $product = product::find($id);

        $catagory = catagory::all();

        

        return view('admin.update_product',compact('product','catagory'));


    }





    public function update_product_confirm(Request $request,$id){


        
        $product = product::find($id);


        $product -> title = $request -> title;

        $product -> description = $request -> description;

        $product -> price = $request -> price;

        $product -> quantity = $request -> quantity;

        $product -> discount_price = $request -> discount_price;

        $product -> catagory = $request -> catagory;


        $image = $request -> image;

        if($image){ 

            $imagename = time().'.'.$image -> getClientOriginalExtension();

            $request -> image->move('product',$imagename);

            $product -> image = $imagename;

        }

        $product ->save();
        

        

        return redirect() -> back()->with('message','Product updated successfully.');


    }






    public function order(){

        $order = order::all();

        return view('admin.order',compact('order'));

    }





    public function delivered($id){

        $order = order::find($id);

        $order -> delivery_status = "Delivered";

        $order -> payment_status = "Paid";



        $order -> save();

        return redirect()->back();

        
    }


    public function print_pdf($id){

        $order = order::find($id);

        $pdf = PDF::loadView('admin.pdf',compact('order'));

        return $pdf-> download('Intern.pdf');

        
    }





}

