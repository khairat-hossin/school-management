<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>

    <!-- Bootstrap V5.0.2 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                            <td>Sl.</td>
                            <td>Subject Code</td>
                            <td>Subject Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->sub_code }}</td>
                            <td>{{ $subject->sub_name }}</td>
                            <td>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                                    <th>Subject Code</th>
                                                                    <th>Subject Name</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $subject->sub_code }}</td>
                                                                    <td>{{ $subject->sub_name }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
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
    </div>    

     <!-- Bootstrap V5.0.2 Script -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
</body>
</html>