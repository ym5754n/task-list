@extends('layouts.app')

@section('content')

    <h1>Login</h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('auth.login.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Mail:</label>
                    <input class="form-control" name="email" type="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" name="password" type="password" id="password">
                </div>

                <input class="btn btn-primary" type="submit" value="Login">
            </form>
        </div>
    </div>

@endsection