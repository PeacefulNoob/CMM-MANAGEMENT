@extends('layouts.app')



@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>

                <th scope="col">Option</th>
                <th scope="col">Option</th>

            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)

                <tr>
                    <td>
                        <p>{{ $new->id }}</p>
                    </td>
                    <td>
                        <p>{{ $new->title }}</p>
                    </td>
                    <td>
                        <p>{!! $new->description !!}
                        </p>
                    </td>
                    
                    <td>
                        @can('admin')
                            
                        <a href="{{ route('news.edit',$new->id) }}"><button
                            type="button" class="btn btn-primary">Edit</button></a> </td>
                                @endcan

                    <td>
                        @can('admin')
                        <form action="{{ route('news.destroy',$new) }}" method="POST"  class="float-left">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                        @endcan
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection
