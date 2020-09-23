@extends('layouts.master')

@section('content')
<div class="homeMain">

    <div class="container">
        <h1>Designs</h1>

        <div class="row my-5">
            @forelse ($designs as $design)
            <div class="col-sm-5">
                <h3>{{$design->title}}</h3>
                @can('admin')
             <div class="adminButtons"> 
             <a href="{{ route('designs.edit',$design->id) }}"><button
                 type="button" class="btn btn-primary">Edit</button></a> 
     
                 <form action="{{ route('designs.destroy',$design) }}" method="POST"  class="float-left">
                   @csrf
                   {{ method_field('DELETE') }}
                   <button type="submit" class="btn btn-warning">Delete</button>
               </form>
           </div>
             @endcan
                <div><p>{!!$design->description!!}</p></div>
            </div>
    
            <div class="col-sm-7">
                <div class="row">
            @foreach ($design->images as $image)
            <img class="col-6 my-2" src="/images/{{$image->image}}" alt="">
            @endforeach
             </div>
             
            </div>
            @empty
            <div class="col-sm-12"> NO DESIGNS</div>
    
            @endforelse
          
        </div>
    </div>
</div>
@endsection
