<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProductCategory; 

class ProductCategoryController extends Controller
{
    public function create(){
        return view('insertProductCategory');
    }
    


    public function store(){    //create the function for store name should be same with route  
        $r=request(); //get all data from HTML form
        $addProductCategory=ProductCategory::create([    //bind data, check the spelling insert into categories values('','','','');
            'id'=>$r->ID, //bind the variable with field name $_POST['ID']
            'name'=>$r->name, //same name from database           
        ]);
        
        return redirect()->route('productcategory');// redirect to the page 'category' same define on route
}
}
