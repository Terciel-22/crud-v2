@extends('layout')
@section('content')
    <a href="{{ url('/students/create')}}" class="btn btn-success p-3">Create Student</a>

    @if(session()->has('status'))
        <div class="alert alert-success my-3">
            {{ session()->get('status') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered my-5 text-center align-middle">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="students">
                @foreach ($students as $key=>$student)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->age}}</td>
                    <td>
                        <a href="{{ url('students/'.$student->id) }}" class="btn btn-info">View</a>
                        <a href="{{ url('students/'.$student->id.'/edit') }}" class="btn btn-primary">Edit</a>

                        <form class="d-inline" action="{{ url('students/'.$student->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger" onClick="return confirm('Do you want to delete this?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection