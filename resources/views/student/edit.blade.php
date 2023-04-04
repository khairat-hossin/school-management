<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Student List</h4>
                <a href="{{ route('student') }}" class="btn btn-warning btn-sm">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control" id="name">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roll" class="col-sm-2 col-form-label">Roll</label>
                        <div class="col-sm-10">
                            <input type="text" name="roll" value="{{ $student->roll }}" class="form-control" id="roll">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="date" name="dob" value="{{ $student->dob }}" class="form-control" id="dob">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="blood_group" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-10">
                            <input type="text" name="blood_group" value="{{ $student->blood_group }}" class="form-control" id="blood_group">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>