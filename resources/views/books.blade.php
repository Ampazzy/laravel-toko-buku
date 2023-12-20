@extends('Properties.main')

@section('body')
    <div class="row row-cols-md-3 g-5 mt-3">
        @foreach ($books as $book)
            <div class="col">
                <div class="card text-center h-100">
                    <img src="img/{{ $book->image }}" class="card-img-top" alt="dragon ball">
                    <div class="card-body">
                        <h3 class="card-title">{{ $book->title }}</h3>
                        <h5 class="card-text">{{ $book->category->category }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="book/{{ $book->slug }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
