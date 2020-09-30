@extends('layouts.master')

@section('content')
<div class="homeMain">

    <div class="container">
        <h1>Maintenances</h1>

        <div class="row my-5">
            @forelse ($maintenances as $maintenance)
            <div class="col-sm-5">
                <h3>{{$maintenance->title}}</h3>
                @can('admin')
             <div class="adminButtons"> 
             <a href="{{ route('maintenance.edit',$maintenance) }}"><button
                 type="button" class="btn btn-primary">Edit</button></a> 
     
                 <form action="{{ route('maintenance.destroy',$maintenance) }}" method="POST"  class="float-left">
                   @csrf
                   {{ method_field('DELETE') }}
                   <button type="submit" class="btn btn-warning">Delete</button>
               </form>
           </div>
             @endcan
                <div><p>{!!$maintenance->description!!}</p></div>
            </div>
    
            <div class="col-sm-7">
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
</div>
@endsection
