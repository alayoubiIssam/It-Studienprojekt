@extends('account.layouts.default')

@section('account.content')
    <div class="card" style="width: 35rem;">
        <div class="card-body">
            <form action="{{ route('account.profile.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-erros' : '' }}">
                    <label for="name" class="from-control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name', auth()->user()->name)}}">


                    @if($errors->has('name'))
                        <span class="form-text">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-erros' : '' }}">
                    <label for="email" class="from-control-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control"value="{{old('email', auth()->user()->email)}}">


                    @if($errors->has('email'))
                        <span class="form-text">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-outline-primary">Update</button>
            </form>
        </div>

    </div>

@endsection
