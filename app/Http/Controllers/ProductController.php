<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Product;

Use Session;

class ProductController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function create(){
        return view('insertProduct') ;

    }
    
    //Category::all() means "select * from category"
    public function store(){    
        $r=request(); 
        $image=$r->file('product-image');        
        $image->move('images',$image->getClientOriginalName());   
        //images is the location                
        $imageName=$image->getClientOriginalName(); 

        $addCategory=Product::create([    
            'id'=>$r->ID, 
            'name'=>$r->title,
            'ProductCategoryID'=>$r->ProductCategory_id,  
            'categoryID'=>$r->category_id,  
            'price'=>$r->price,
            'image'=>$imageName,                 
            'quantity'=>$r->Quantity, 
            'description'=>$r->Description,          
        ]);
        
        Session::flash('statuscode','success');      
        Return redirect()->route('all.product')->with('status','Product create succesful !');
    }

    public function show(){
        
    $products=DB::table('products')
    ->select('products.*')
    ->paginate(5);
    return view('showProduct')->with('products',$products);
}
       


    
    public function delete($id){
       
        $products =Product::find($id);
        $products->delete();

        Session::flash('statuscode','error'); 
        return redirect()->route('all.product')->with('status','Your Data is delete');

    }

    public function edit($id){
       //select * from Products where id='$id'
        $products =Product::all()->where('id',$id);

        Session::flash('statuscode','error');
        return view('editProduct')->with('products',$products);
    }

    public function update(){
        $r=request();//retrive submited form data
        $products =Product::find($r->ID);  //get the record based on product ID      
        if($r->file('product-image')!=''){
            $image=$r->file('product-image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $products->image=$imageName;
            }         
        $products->name=$r->title;
        $products->description=$r->Description;
        $products->price=$r->price;
        $products->quantity=$r->Quantity;
        $products->ProductCategoryID=$r->ProductCategory_id;
        $products->categoryID=$r->category_id;
        $products->save();

        Session::flash('statuscode','info');
        return redirect()->route('all.product')->with('status','Your Data is updated');
    }

    public function search(){
        $r=request();//retrive submited form data
        $keyword=$r->searchProduct;
        $products =DB::table('products')
        ->select('products.*')
        ->where('products.name', 'like', '%' . $keyword . '%')
        ->orWhere('products.ProductCategoryID', 'like', '%' . $keyword . '%')
        ->orWhere('products.categoryID', 'like', '%' . $keyword . '%')
        ->orWhere('products.description', 'like', '%' . $keyword . '%')
        //->get();
        ->paginate(5);        
        return view('showProduct')->with('products',$products);

    }




    
}
