<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Feedback; 
use App\User;
Use Session;
use Auth;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('insertFeedback');
    }

    public function store(){     
        $r=request(); 
        $addCategory=Feedback::create([    
        
            'userID'=>Auth::id(),
            'feedback1'=>$r->feedback1,
            'feedback2'=>$r->feedback2,
            'feedback3'=>$r->feedback3,
           'feedback'=>$r->feedback,
          
        ]);
        Session::flash('success',"Feedback insert succesful!");   
        Return redirect()->route('insertFeedback');
    }

    public function show(){
        
        //$products=Product::all();
        $feedbacks=DB::table('feedback')
        ->leftjoin('users','feedback.userID','=','users.id')
        ->select('users.name','feedback.id','feedback.feedback1','feedback.feedback2','feedback.feedback3','feedback.feedback')
        ->get();
          
        return view('showFeedback')->with('feedbacks',$feedbacks);
    }

    public function delete($id){
       
        $products =Feedback::find($id);
        $products->delete();
        return redirect()->route('all.feedback');

    }
}
