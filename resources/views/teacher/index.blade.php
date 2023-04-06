@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Teachers List</h4>
        <a href="{{route('teacher.create')}}" class="btn btn-primary btn-sm">Add Teacher</a>
    </div>
    <div class="card-body px-0">
        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Name</td>
                    <td>Reg. No.</td>
                    <td>Subject</td>
                    <td>DOB</td>
                    <td>Blood Group</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->tname }}</td>
                    <td>{{ $teacher->tregnum }}</td>
                    <td>{{ $teacher->tsubject }}</td>
                    <td>{{ $teacher->tdob }}</td>
                    <td>{{ $teacher->tblood_group}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewteachermodal">View</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('teacher.edit', $teacher->id )}}">Edit</a> 
                        <a class="btn btn-danger btn-sm" href="{{route('teacher.destroy', $teacher->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach

                <!-- Modal -->
                {{-- <div class="modal fade" id="viewteachermodal" tabindex="-1" aria-labelledby="">
                    <div class="modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-title">
                                this is modal title
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Modal -->
            </tbody>
        </table>
    </div>
</div>
@endsection