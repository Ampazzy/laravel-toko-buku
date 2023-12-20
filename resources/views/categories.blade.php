@extends('Properties.main')

@section('body')
    <ul>
        @foreach ($categories as $category)
            <li><a href="#">{{ $category->category }}</a></li>
        @endforeach
    </ul>
@endsection
