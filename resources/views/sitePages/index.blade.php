@extends('layouts.master')

@section('content')
@include('components.modal_covid')

<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div class="hero-text">
                <h1 style="font-size:50px">Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo</h1>

            </div>
        </div>
    </div>
    <div class="blogs my-5">
        <h1>News</h1>

        <div class="row my-5">
            @forelse ($news as $new)
            <div class="col-sm-12">
            <h3>{{$new->title}}</h3>
            <p class="gray">{{$new->created_at}}</p>
            <div><p>{!!$new->description!!}</p></div>
            @can('admin')
            <div class="adminButtons"> 
            <a href="{{ route('news.edit',$new->id) }}"><button
                type="button" class="btn btn-primary">Edit</button></a> 
  
                <form action="{{ route('news.destroy',$new) }}" method="POST"  class="float-left">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-warning">Delete</button>
              </form>
          </div>
            @endcan
            </div>
            @empty
            <div class="col-sm-12"> NO NEWS</div>

            @endforelse
       
        </div>
    </div>
</div>
@endsection