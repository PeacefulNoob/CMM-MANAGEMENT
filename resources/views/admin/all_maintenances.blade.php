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
            @forelse ($maintenances as $maintenance)
            <div class="col-12">
                <h3>{{$maintenance->title}}</h3>
                @can('admin')
             <div class="adminButtons"> 
             <a href="{{ route('maintenances.edit',$maintenance) }}"><button
                 type="button" class="btn btn-primary">Edit</button></a> 
     
                 <form action="{{ route('maintenances.destroy',$maintenance) }}" method="POST"  class="float-left">
                   @csrf
                   {{ method_field('DELETE') }}
                   <button type="submit" class="btn btn-warning">Delete</button>
               </form>
           </div>
             @endcan
                <div><p>{!!$maintenance->description!!}</p></div>
            </div>
    
            <div class="col-12">
                <div class="row">
            @foreach ($maintenance->images as $image)
            <img class="col-6 my-2" src="/images/maintenance/{{$image->image}}" alt="">
            @endforeach
             </div>
             
            </div>
            @empty
            <div class="col-sm-12"> NO Maintenances</div>
    
            @endforelse
          
        </div> 
    </div>

@endsection
