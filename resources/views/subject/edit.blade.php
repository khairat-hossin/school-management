@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>HOME | Edit Subject</h5>
        <a href="{{ url('/subjects') }}" class="btn btn-danger btn-sm">Go Back</a>
    </div>

    <div class="card-body">
        <form action="{{route('sub.update', $subject->id)}}" method="POST">
            @csrf
            <!-- sub_id -->
            <div class="mb-3 row">
                <label for="sub_id" class="col-sm-2 col-form-label">Subject ID</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$subject->sub_id}}" class="form-control" name="sub_id" id="sub_id" placeholder="Subject ID">
                </div>
            </div>

            <!-- sub_name -->
            <div class="mb-3 row">
                <label for="sub_name" class="col-sm-2 col-form-label">Subject Name</label>
                <div class="col-sm-10">

                    <select class="form-control" name="sub_name" id="basic-usage" data-placeholder="Choose Subject">
                        <option>{{$subject->sub_name}}</option>
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
@endsection
    {{-- <script>
        $( '#basic-usage' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ), allowClear: true
        } );
    </script> --}}

    <!-- Bootstrap V5.0.2 Script -->
