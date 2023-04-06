<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>

    <!-- Bootstrap V5.0.2 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
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
