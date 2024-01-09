@extends('Properties.main')

@section('body')
    <form action="/books" method="GET">
        <div class="input-group mb-3 mt-5 mx-auto" style="width: 40%">
            <input type="text" class="form-control" placeholder="Search here.." name="search"
                value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>

    <a href="/admin/books/create">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <form method="POST" action="/admin/books/{{ $book->id }}">
                    @csrf
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->category->category }}</td>
                        <td>
                            <a href="/admin/books/{{ $book->id }}">Detail</a>
                            <a href="/admin/books/edit/{{ $book->id }}">Edit</a>
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>

    <div class="mt-5">
        {{ $books->links() }}
    </div>
@endsection
