@extends('layout.layout')

@section('content')

    <div class="col-md-8">
        <h1>signin</h1><hr>
        <form method="post" action="/login">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            @include('partials.errors')
            <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
            </div>
        </form>

    </div>
@stop