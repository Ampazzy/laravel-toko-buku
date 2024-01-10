@extends('Properties.main')

@section('body')
    <form method="POST" action="/admin/books/update/{{ $book->id }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="js-example-basic-single form-control" id="category" name="category">
                <option value=1 {{ $book->category_id == '1' ? 'selected' : '' }}>Novel</option>
                <option value=2 {{ $book->category_id == '2' ? 'selected' : '' }}>Fiksi</option>
                <option value=3 {{ $book->category_id == '3' ? 'selected' : '' }}>Non Fiksi</option>
                <option value=4 {{ $book->category_id == '4' ? 'selected' : '' }}>Komik </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $book->description }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url()->previous() }}">Back</a>
    </form>
@endsection
