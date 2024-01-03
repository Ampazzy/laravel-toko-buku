@extends('Properties.main')

@section('body')
    <form method="POST" action="/login">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
@endsection
