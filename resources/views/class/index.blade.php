@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Class List</h4>
        <a href="{{ route('class.create') }}" class="btn btn-primary btn-sm">Create Class</a>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Class Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                    <tr>
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->name }}</td>
                       <td> <a href="{{ route('class.edit', $class->id) }}" class="btn btn-sm btn-primary">Edit</a>
                       <a href="{{ route('class.delete', $class->id) }}" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                @endforeach
                    
                
            </tbody>
        </table>
    </div>
</div>
@endsection