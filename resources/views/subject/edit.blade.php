@extends('layout.main')
@section('content')
    <div class="container p-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Subject</h5>
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
                
                <form action="{{route('sub.update', $subject->id)}}" id="sub_edit_form" method="POST" >
                    @csrf
                    <!-- sub_code -->
                    <div class="mb-3 row">
                        <label for="sub_code" class="col-sm-2 col-form-label">Subject Code</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$subject->sub_code}}" class="form-control" name="sub_code" id="sub_code" placeholder="Subject Code" >
                        </div>
                    </div>

                    <!-- sub_name -->
                    <div class="mb-3 row">
                        <label for="sub_name" class="col-sm-2 col-form-label">Subject Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$subject->sub_name}}" class="form-control" name="sub_name" id="sub_name" placeholder="Subject Name">
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="mb-3 row">
                        <div class="col-1">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
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
            $("#sub_edit_form").validate({
                rules: {
                    sub_code: {
                        required: true,
                    },
                    sub_name: {
                        required: true,
                    },
                },

                messages: {
                    sub_code: {
                        required: '<b><em>Subject Code</em></b> is a mandatory field.',
                    },
                    sub_name: {
                        required: '<b><em>Subject Name</em></b> is a mandatory field.',
                    },
                },
            });
        });
    </script>
@endsection
