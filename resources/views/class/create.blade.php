@extends('layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Class List</h4>
        <a href="{{ route('class') }}" class="btn btn-warning btn-sm">Go Back</a>
    </div>
    <div class="card-body">
        <form action="{{ route('class.store') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name">
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
@endsection