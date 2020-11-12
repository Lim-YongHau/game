@extends('layouts.app')  
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 

<!------ Include the above in your HEAD tag ---------->


<div class="container">
	<div class="row">
		
        
        
       <div class="col-md-12 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                     <input type="file" name="product-image" id="fileToUpload"  class="hidden">
              
              <div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>

           
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">{{ Auth::user()->name }}</h4></span>
              <span>User Type:<p>-{{ Auth::user()->usertype }}</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Full Name:</div><div class="col-sm-7 col-xs-6 ">{{ Auth::user()->name }}</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>



<div class="col-sm-5 col-xs-6 tital " >Email :</div><div class="col-sm-7">{{ Auth::user()->email }}</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Phone number :</div><div class="col-sm-7">{{ Auth::user()->phone }}</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Address :<p><span class="text-success">*** Use for Shipping Address ***</span></p></div><div class="col-sm-7">{{ Auth::user()->address }}</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >Date of birth:</div><div class="col-sm-7"><input type="date"></div>

<div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Edit Profile</div><div class="col-sm-7"><a href="{{ route('edit.profile', ['id' => Auth::user()->id ]) }} " class="btn btn-warning">Edit</a></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  

    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>
@endsection




         