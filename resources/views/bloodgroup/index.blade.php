@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Blood Group List</h4>
        <a href="{{route('bloodgroup.create')}}" class="btn btn-primary btn-sm">Add Blood Group</a>
    </div>
    <div class="card-body px-0">
        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Blood Group</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($blood_groups as $blood_group)
                <tr>
                    <td>{{ $blood_group->id }}</td>
                    <td>{{ $blood_group->blood_group }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewteachermodal">View</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('bloodgroup.edit', $blood_group->id )}}">Edit</a> 
                        <a class="btn btn-danger btn-sm" href="{{route('bloodgroup.delete', $blood_group->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection