@extends('frontend.templates.default')

@section('content')
<div class="container">
   <h3>Register</h3>
   <form action="{{ route('register') }}" class="col s12" method="POST">
      @csrf
      <div class="row">
         <div class="input-field col s12">
            <i class="material-icons prefix">person</i>
            <input type="text" class="@error('name') invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            <label for="name">Full Name</label>
            @error('name')
               <span class="helper-text" data-error="{{ $message }}"></span>
            @enderror
         </div>
         <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" class="@error('email') invalid @enderror" id="email" name="email" value="{{ old('email') }}">
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
         <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input type="password" class="validate @error('password_confirmation') invalid @enderror" id="password_confirmation" name="password_confirmation">
            <label for="password_confirmation">Password Confirmation</label>
            @error('password_confirmation')
            <span class="helper-text" data-error="{{ $message }}"></span>
            @enderror
         </div>
         <div class="input-field right">
            <button type="submit" class="waves-effect waves-light btn red accent-1">Register</button>
         </div>
      </div>
   </form>
</div>
@endsection