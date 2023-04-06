@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Student List</h4>
        <a href="{{ route('student') }}" class="btn btn-warning btn-sm">Go Back</a>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger alert-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="roll" class="col-sm-2 col-form-label">Roll</label>
                <div class="col-sm-10">
                    <input type="text" name="roll" class="form-control" id="roll" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="date" name="dob" class="form-control" id="dob" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="blood_group" class="col-sm-2 col-form-label">Blood Group</label>
                <div class="col-sm-10">
                    <input type="text" name="blood_group" class="form-control" id="blood_group">
                </div>
            </div>
            
            <div class="mb-3 row">
                <div class="col-1">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
