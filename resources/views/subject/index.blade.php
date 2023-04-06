@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        
        <h5>Subject List</h5>
        <a href="{{ url('subjects/create') }}" class="btn btn-success btn-sm">Add Subject</a>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <td>Sl.</td>
                    <td>Subject ID</td>
                    <td>Subject Name</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                @foreach($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->sub_id }}</td>
                    <td>{{ $subject->sub_name }}</td>
                    <td>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        View
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Subject Info</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="table-responsive">
                                                <table class="table-dark table table-bordered table-striped text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Subject ID</th>
                                                            <th>Subject Name</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $subject->sub_id }}</td>
                                                            <td>{{ $subject->sub_name }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{route('sub.edit', $subject->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                        <a href="{{route('sub.destroy', $subject->id)}}" class="btn btn-outline-danger btn-sm">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection