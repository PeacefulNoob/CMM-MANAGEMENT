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
            @foreach($designs as $design)

                <tr>
                    <td>
                        <p>{{ $design->id }}</p>
                    </td>
                    <td>
                        <p>{{ $design->title }}</p>
                    </td>
                    <td>
                        <p>{{ $design->description }}
                        </p>
                    </td>
                    
                    <td>
                        @can('admin')
                            
                        <a href="{{ route('designs.edit',$design->id) }}"><button
                            type="button" class="btn btn-primary">Edit</button></a> </td>
                                @endcan

                    <td>
                        @can('admin')
                        <form action="{{ route('designs.destroy',$design) }}" method="POST"  class="float-left">
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
