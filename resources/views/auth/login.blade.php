@extends('frontend.templates.default')

@section('content')
<div class="container">
    <h3>Login</h3>
    <form action="{{ route('login') }}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="@error('email') invalid @enderror" id="email" name="email"
                    value="{{ old('email') }}">
                <label for="email">Email Address</label>
                @error('email')
                <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password') invalid @enderror" id="password" name="password">
                <label for="password">Password</label>
                @error('password')
                <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>
            <div class="input-field right">
                <button type="submit" class="waves-effect waves-light btn red accent-1">Login</button>
            </div>
        </div>
    </form>
</div>
@endsection