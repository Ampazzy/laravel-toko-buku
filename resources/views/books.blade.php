@extends('Properties.main')

@section('body')
    <form action="/books" method="GET">
        <div class="input-group mb-3 mt-5 mx-auto" style="width: 40%">
            <input type="text" class="form-control" placeholder="Cari di sini.." name="search"
                value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>
    <div class="row row-cols-md-3 g-5 mt-3">
        @foreach ($books as $book)
            <div class="col">
                <div class="card text-center h-100">
                    <img src="{{ asset('storage/book/' . $book->image) }}" class="card-img-top" alt="{{ $book->image }}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $book->title }}</h3>
                        <h5 class="card-text">{{ $book->category->category }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/books/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $books->links() }}
    </div>
@endsection
