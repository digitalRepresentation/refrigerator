@extends('common.topmenu')

@section('style')
    <!-- cssMenu -->
    <link rel="stylesheet" href="{{asset('css/loginForm.css')}}" />
@endsection

@section('content')
<div class="card">
  <div class="card-header">{{ __('Register') }}</div>
  <div class="card-body">
    <form method="POST" action="{{ route('signup') }}">
      @csrf

      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @if(session()->has('error'))
                      <strong>{{ session()->get('error') }} </strong>
              @endif
              @error('name')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }} </strong>
                      
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" autocomplete="email"  placeholder="Email">
          @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }} </strong>
                  </span>
          @enderror
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPassword4">パスワード</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" autocomplete="password" name="password" placeholder="Password">
          @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }} </strong>
                  </span>
          @enderror
        </div>
      </div>


      <div class="form-group">
        <label for="inputAddress">住所</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" id="inputAddress" placeholder="1234 Main St">
        @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }} </strong>
                  </span>
        @enderror
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
@endsection