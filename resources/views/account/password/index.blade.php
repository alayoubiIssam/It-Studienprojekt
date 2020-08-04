@extends('account.layouts.default')

@section('account.content')
    <div class="card" style="width: 35rem;">
        <div class="card-body">
            <form action="{{ route('account.password.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('password_current') ? ' has-erros' : '' }}">
                    <label for="password_current" class="from-control-label">Current Password</label>
                    <input type="password" name="password_current" id="password_current" class="form-control">


                    @if($errors->has('password_current'))
                        <span class="form-text">
                            <strong>{{ $errors->first('password_current') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_current') ? ' has-erros' : '' }}">
                    <label for="password" class="from-control-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">


                    @if($errors->has('password'))
                        <span class="form-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_current') ? ' has-erros' : '' }}">
                    <label for="password_confirmation" class="from-control-label">New Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">


                    @if($errors->has('password_confirmation'))
                        <span class="form-text">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-outline-primary">Change password</button>
            </form>
        </div>

    </div>

@endsection
