<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Student List</h4>
                <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Create Student</a>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Sl</td>
                            <td>Name</td>
                            <td>Roll</td>
                            <td>Age</td>
                            <td>Blood Group</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Student 1</td>
                            <td>12345</td>
                            <td>14</td>
                            <td>O(+ve)</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Student 1</td>
                            <td>12345</td>
                            <td>14</td>
                            <td>O(+ve)</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Student 1</td>
                            <td>12345</td>
                            <td>14</td>
                            <td>O(+ve)</td>
                            <td>#</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>