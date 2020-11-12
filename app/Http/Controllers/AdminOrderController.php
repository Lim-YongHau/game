<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Product;
use App\User;
use App\myCart;
use App\myOrder;
use Auth;
Use Session;

class AdminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
    

    public function show(){

        $adminorders=DB::table('my_orders')
        ->leftjoin('my_carts','my_orders.id','=','my_carts.orderID')
        ->leftjoin('products','my_carts.productID','=','products.id')
        ->leftjoin('users','my_orders.userID','=','users.id')
        ->select('my_orders.id as OrderID','my_orders.*','my_carts.*','my_carts.quantity as CartQuantity','products.*','products.name as productName','users.*')
        ->get();
        return view('OrderDetail')->with('adminorders',$adminorders);


        // SELECT my_carts.*,my_orders.*,products.* FROM my_carts LEFT JOIN my_orders ON my_carts.orderID = my_orders.id LEFT JOIN products ON my_carts.productID = products.id LEFT JOIN users ON my_carts.userID = users.id
      
    }

    public function Orderedit($id){
       
         $my_orders =myOrder::all()->where('id',$id);
         
         return view('EditOrderDetail')->with('my_orders',$my_orders);
     }

    
     public function Orderupdate(){
        $r=request();//retrive submited form data
        $my_orders = myOrder::find($r->id);  
        $my_orders ->userID=$r->name;
        $my_orders ->amount=$r->Amount;
        $my_orders ->paymentStatus=$r->paymentStatus;
        $my_orders ->save();
        // return view('AdminOrderDetail')->with('status','Your Data is updated');
       
        return redirect()->route('admin.orderdetail')->with('status','Your Data is updated');;

    }

    public function Orderdelete($id){
       
        $my_orders =myOrder::find($id);
        $my_orders->delete();
        return redirect()->route('admin.orderdetail');

    }


    // public function Orderupdate(Request $request , $id)
    // {
    //     $my_orders = myOrder::find($id);
    //     $my_orders->id = $request->input('id');
    //     $my_orders->paymentStatus = $request->input('paymentStatus');
    //     $my_orders->update();

    // }

}
