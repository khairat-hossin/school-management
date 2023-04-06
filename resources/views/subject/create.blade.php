<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject</title>

    <!-- Bootstrap V5.0.2 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container p-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Add Subject</h5>
                <a href="{{ url('/subjects') }}" class="btn btn-danger btn-sm">Go Back</a>
            </div>

            <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger alert-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{route('sub.store')}}" method="POST">
                    @csrf
                    <!-- sub_code -->
                    <div class="mb-3 row">
                        <label for="sub_code" class="col-sm-2 col-form-label">Subject Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sub_code" id="sub_code" placeholder="Subject Code" required>
                        </div>
                    </div>

                    <!-- sub_name -->
                    <div class="mb-3 row">
                        <label for="sub_name" class="col-sm-2 col-form-label">Subject Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sub_name" id="sub_name" placeholder="Subject Name" required>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="mb-3 row">
                        <div class="col-1">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    <!-- Bootstrap V5.0.2 Script -->
