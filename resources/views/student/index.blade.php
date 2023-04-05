@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Student List</h4>
        <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Create Student</a>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Roll</td>
                    <td>Age</td>
                    <td>Blood Group</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->roll }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->blood_group }}</td>
                        <td>
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('student.delete', $student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection