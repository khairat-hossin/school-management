@extends('layout.main')
@section('content')
    <div class="container p-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">

                <h5>Subject List</h5>
                <a href="{{ url('subjects/create') }}" class="btn btn-success btn-sm">Add Subject</a>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $subject->id }}</td>
                                <td>{{ $subject->sub_code }}</td>
                                <td>{{ $subject->sub_name }}</td>
                                <td>
                                    <a href="{{ route('sub.edit', $subject->id) }}"
                                        class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="{{ route('sub.destroy', $subject->id) }}"
                                        class="btn btn-outline-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endsection
