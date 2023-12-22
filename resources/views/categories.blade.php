@extends('Properties.main')

@section('body')
    <ul>
        @foreach ($categories as $category)
            <li><a href="/categories/{{ $category->id }}/books">{{ $category->category }}</a></li>
        @endforeach
    </ul>
@endsection
