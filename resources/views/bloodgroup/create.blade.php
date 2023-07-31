@extends('layout.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Add Blood Group</h4>
                <a href="{{ route('bloodgroup') }}" class="btn btn-warning btn-sm">Back</a>
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

                <form action="{{ route('bloodgroup.store') }}" id="blood_group_create_form" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="blood_group" class="col-sm-2 col-form-label">Blood Group: </label>
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
        $("#blood_group_create_form").validate({
            rules: {
                blood_group: {
                    required: true,
                },
            },

            messages: {
                blood_group: {
                    required: "<b><em>Blood Group</em></b> is a mandatory field.",
                },
            },
        });
    });
</script>
@endsection
