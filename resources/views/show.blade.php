@extends('layout')
@section('content')
    <div class="card mx-auto w-50">
        <div class="card-body">
            <h5 class="card-title">{{ $student->first_name }} {{  $student->last_name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $student->age }} years of age</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ url('/students')}}" class="card-link">Back</a>
        </div>
    </div>
@endsection