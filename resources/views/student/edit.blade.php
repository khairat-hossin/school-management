@extends('layout.main')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Student List</h4>
                <a href="{{ route('student') }}" class="btn btn-warning btn-sm">Go Back</a>
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
                
                <form action="{{ route('student.update', $student->id) }}" id="student_edit_form" method="POST">
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
@endsection

@section('script')
<script>
    $(function() {
        $("#student_edit_form").validate({
            rules: {
                name: {
                    required: true,
                },
                roll: {
                    required: true,
                    number: true,
                },
                dob: {
                    required: true,
                    dateISO: true,
                },
            },

            messages: {
                name: {
                    required: "<b><em>Student Name</em></b> is a mandatory field."
                },
                roll: {
                    required: "<b><em>Student Roll</em></b> is a mandatory field.",
                    number: "<b><em>Student Roll</em></b> should be a number.",
                },
                dob: {
                    required: "<b><em> Date of Birth</em></b> is a required field.",
                    dateISO: "Please enter a valid date.",
                },
            },
        });
    });
</script>
@endsection
