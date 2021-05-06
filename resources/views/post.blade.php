@extends('app')
@section('content')
    
           <div class="text-center title">
               <h4 class="text-uppercase">Post</h4>
           </div>
         
         <div class="row mt-5" id="post">
            @include('post-data')
           </div>

           <div class="ajax-load text-center" style="display: none">
               <img src="{{ asset('loading.gif') }}" style="max-width: 100px" alt="">
           </div>
       </div>

      
 @endsection