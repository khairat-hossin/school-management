<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD | Add Subject</title>

    <!-- Bootstrap V5.0.2 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Select2 V4.1.0 Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <!-- Select2 V4.1.0 Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
</head>
<body>
    <div class="container p-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>HOME | Add Subject</h5>
                <a href="{{ url('/subjects') }}" class="btn btn-danger btn-sm">Go Back</a>
            </div>

            <div class="card-body">
                <form action="{{route('sub.store')}}" method="POST">
                    @csrf
                    <!-- sub_id -->
                    <div class="mb-3 row">
                        <label for="sub_id" class="col-sm-2 col-form-label">Subject ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sub_id" id="sub_id" placeholder="Subject ID">
                        </div>
                    </div>

                    <!-- sub_name -->
                    <div class="mb-3 row">
                        <label for="sub_name" class="col-sm-2 col-form-label">Subject Name</label>
                        <div class="col-sm-10">

                            <select class="form-control" name="sub_name" id="basic-usage" data-placeholder="Choose Subject">
                                <option></option>
                                <option>Bangla</option>
                                <option>English</option>
                                <option>Algorithm</option>
                                <option>Data Structure</option>
                                <option>Machine Learning</option>
                            </select>
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
    </div>

    <script>
        $( '#basic-usage' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ), allowClear: true
        } );
    </script>

    <!-- Bootstrap V5.0.2 Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>