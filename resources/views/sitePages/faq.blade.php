@extends('layouts.master')
@section('content')
<div class="homeMain">
  <div class="container">

<div class="row"  style="margin-bottom: 30px;">
    <?php
    $colcount = count($faqs);
    $i = 1;
    ?>
    @forelse ($faqs as $faq)
    <div class="card">
        <div class="card-header">
          {{$faq->question}}
          @can('admin')
          <div class="adminButtons"> 
          <a href="{{ route('faqs.edit',$faq->id) }}"><button
              type="button" class="btn btn-primary">Edit</button></a> 


              <form action="{{ route('faqs.destroy',$faq) }}" method="POST"  class="float-left">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-warning">Delete</button>
            </form>
        </div>
          @endcan
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>    {{$faq->answer}}</p>
          </blockquote>
        </div>
      </div>
    @empty
    <div class="card">
        <div class="card-header">
          Empty
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
           
            
          </blockquote>
        </div>
      </div>

    @endforelse
    
  </div>

</div>
</div>
@endsection
