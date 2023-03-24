@extends('layout')
@section('content')
    <a href="{{ url('/students')}}" class="btn btn-light p-3">Back</a>
    <form class="my-5" action="{{ url('students/'.$student->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <div class="row mb-3">
            <div class="form-group col-sm-12 col-md-4 col-lg-4 mt-3">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first_name" value="{{ $student->first_name }}">
                @error('first_name')
                <p class="text-danger">{!! $message !!}</p>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-4 col-lg-4 mt-3">
                <label for="last-name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last_name" value="{{ $student->last_name }}">
                @error('last_name')
                <p class="text-danger">{!! $message !!}</p>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-4 col-lg-4 mt-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age" value="{{ $student->age }}">
                @error('age')
                <p class="text-danger">{!! $message !!}</p>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" id="reset" class="btn btn-danger">Reset</button>
    </form>
@endsection