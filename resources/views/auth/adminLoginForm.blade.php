@extends('auth.base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div>
            <form method="post" class="form" action="{{ route('login') }}" autocomplete="off">
                @if ($errors->has('status'))
                    <div class="error alert alert-danger alert-dismissible">
                        {{ $errors->first() }}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" autocomplete="adsfasdfad" />
                    <span class="error">
                    @if($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif
                    </span>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" />
                    @if($errors->has('password'))
                        <span class="error">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary-outline submit ">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection