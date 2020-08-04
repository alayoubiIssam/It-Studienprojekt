@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-start">
        <div class="col-md-3">
            @include('account.layouts.partials._navigation')
        </div>
        <div class="col-md-3">
            @yield('account.content')
        </div>
    </div>
@endsection
