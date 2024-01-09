@extends('Properties.main')

@section('body')
    {{-- @dd($book) --}}
    <img src="{{ asset('storage/book/' . $book->image) }}">
    <p>{{ $book->title }}</p>
    <p>{{ $book->description }}</p>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
@endsection
