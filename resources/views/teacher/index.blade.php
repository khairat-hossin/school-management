<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Teachers List</h4>
                <a href="{{route('teacher.create')}}" class="btn btn-primary btn-sm">Add Teacher</a>
            </div>
            <div class="card-body">
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
                                <a class="btn btn-primary btn-sm" href="{{ route('teacher.edit', ['id' => $teacher->id])}}">Edit</a> 
                                <a class="btn btn-danger btn-sm" href="">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>