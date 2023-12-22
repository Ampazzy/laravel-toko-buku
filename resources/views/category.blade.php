@extends('Properties.main')

@section('body')
    {{-- @dd($category->book) --}}
    <div class="row row-cols-md-3 g-5 mt-3">
        @foreach ($category->book as $listCategory)
            <div class="col">
                <div class="card text-center h-100">
                    <img src="{{ asset('img/' . $listCategory->image) }}" class="card-img-top"
                        alt="{{ $listCategory->image }}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $listCategory->title }}</h3>
                        <h5 class="card-text">{{ $listCategory->category->category }}</h5>
                        <p class="card-text">{{ $listCategory->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/book/{{ $listCategory->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ urL()->previous() }}" class="btn btn-danger">Back</a>
@endsection
