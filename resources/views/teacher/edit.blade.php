@extends('layout.main')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Edit Teacher</h4>
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

                <form action="{{ route('teacher.update', $teacher->id) }}" id="teacher_edit_form" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="tname" class="col-sm-2 col-form-label">Teacher's Name: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tname" id="tname"
                                value="{{ $teacher->tname }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tregnum" class="col-sm-2 col-form-label">Teacher Registration Number: </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="tregnum" id="tregnum" value="{{$teacher->tregnum}}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tsubject" class="col-sm-2 col-form-label">Subject: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tsubject" id="tsubject"
                                value="{{ $teacher->tsubject }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tdob" class="col-sm-2 col-form-label">Teacher's Date Of Birth: </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tdob" id="tdob"
                                value="{{ $teacher->tdob }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tsubject" class="col-sm-2 col-form-label">Blood Group: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tblood_group" id="tblood_group"
                                value="{{ $teacher->tblood_group }}">
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
        $("#teacher_edit_form").validate({
            rules: {
                tname: {
                    required: true,
                },
                tregnum: {
                    required: true,
                },
                tsubject: {
                    required: true,
                },
                tdob: {
                    required: true,
                    dateISO: true,
                },
                tblood_group: {
                    required: true,
                },
            },

            messages: {
                tname: {
                    required: "<b><em>Teacher Name</em></b> is a mandatory field.",
                },
                tregnum: {
                    required: "<b><em>Teacher Registration Number</em></b> is a mandatory field.",
                },
                tdob: {
                    required: "<b><em>Teacher Date of Birth</em></b> is a mandatory field.",
                    dateISO: "Please enter a valid date",
                },
                tblood_group: {
                    required: "<b><em>Blood Group</em></b> is a mandatory field.",
                },
            },
        });
    });
</script>
@endsection
