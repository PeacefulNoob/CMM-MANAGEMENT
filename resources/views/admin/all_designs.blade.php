@extends('layouts.app')

@section('content')
<style>
    .header {
        position: relative !important;

    }

    .homeMain {
        padding-top: 2%;
    }

</style>
<div class="homeMain designs_page ">

    
     <div class="row my-5">
            @forelse ($designs as $design)
            <div class="col-12">
                <h3>{{$design->title}}</h3>
                @can('admin')
             <div class="adminButtons"> 
             <a href="{{ route('designs.edit',$design) }}"><button
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
    
            <div class="col-12">
                <div class="row">
            @foreach ($design->images as $image)
            <img class="col-6 my-2" src="/images/design/{{$image->image}}" alt="">
            @endforeach
             </div>
             
            </div>
            @empty
            <div class="col-sm-12"> NO designs</div>
    
            @endforelse
          
        </div> 
    </div>

@endsection
