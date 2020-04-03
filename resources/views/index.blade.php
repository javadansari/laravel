
@extends('layouts.master')
{{--@section('navigation')--}}
    {{--@include('layouts.navigation');--}}
{{--@endsection--}}

{{--@section('navigation')--}}
    {{--@include('layouts.navigation')--}}
{{--@show--}}



@section('content')

    @foreach( $items as $item)
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">{{$item->name}}</h2>
            <p class="card-text">{{$item->content}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>

    </div>
    @endforeach

@endsection

@section('sidebar')
    @include('layouts.sidebar')
@endsection

<!-- Page Content -->

<!-- /.row -->



<!-- /.container -->