@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-6">
            <ul class="list-group">
                @foreach($plans as $plan)
                    <li class="list-group-item">
                        <a href="#">{{ $plan->name }} ({{ $plan->price }})</a>
                    </li>
                @endforeach
                <li class="list-group-item">
                    <a href="{{ route('plans.index') }}">User plans</a>
                </li>
            </ul>

        </div>
    </div>
@endsection
