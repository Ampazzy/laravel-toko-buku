@extends('Properties.main')

@section('body')
    {{-- @dd($book) --}}
    <img src="{{ asset('img/' . $book->image) }}">
    <p>{{ $book->title }}</p>
    <p>{{ $book->description }}</p>
    <a href="/books" class="btn btn-danger">Kembali</a>
@endsection
