@extends('layout.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Add New Teacher</h4>
                <a href="{{ route('teacher') }}" class="btn btn-warning btn-sm">Back</a>
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

                <form action="{{ route('teacher.store') }}" id="teacher_create_form" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Teacher's Name: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="reg_num" class="col-sm-2 col-form-label">Teacher Registration Number: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="reg_num" id="reg_num">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="subject" class="col-sm-2 col-form-label">Subject: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="dob" class="col-sm-2 col-form-label">Teacher's Date Of Birth: </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dob" id="dob">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="subject" class="col-sm-2 col-form-label">Blood Group: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="blood_group" id="blood_group">
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
        $("#teacher_create_form").validate({
            rules: {
                name: {
                    required: true,
                },
                reg_num: {
                    required: true,
                },
                subject: {
                    required: true,
                },
                dob: {
                    required: true,
                    dateISO: true,
                },
                blood_group: {
                    required: true,
                },
            },

            messages: {
                name: {
                    required: "<b><em>Teacher Name</em></b> is a mandatory field.",
                },
                reg_num: {
                    required: "<b><em>Teacher Registration Number</em></b> is a mandatory field.",
                },
                dob: {
                    required: "<b><em>Teacher Date of Birth</em></b> is a mandatory field.",
                    dateISO: "Please enter a valid date",
                },
                subject: {
                    required: "<b><em>Subject</em></b> is a mandatory field.",
                },
                blood_group: {
                    required: "<b><em>Blood Group</em></b> is a mandatory field.",
                },
            },
        });
    });
</script>
@endsection
