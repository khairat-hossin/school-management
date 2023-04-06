@extends('layout.main')
@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="card col-lg-2 m-2 bg-secondary text-white" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">Student</h5>
                <p class="card-text">{{ $student }}</p>
            </div>
            <div class="card-footer d-flex align-item-center justify-content-between">
                <a href="{{ route('student') }}" class="btn btn-light btn-sm">View Details</a>
            </div>
        </div>

        <div class="card col-lg-2 m-2 bg-success text-white" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">Teacher</h5>
                <p class="card-text">{{ $teacher }}</p>
            </div>
            <div class="card-footer d-flex align-item-center justify-content-between">
                <a href="{{ route('teacher') }}" class="btn btn-light btn-sm">View Details</a>
            </div>
        </div>

        <div class="card col-lg-2 m-2 bg-warning text-white" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">Class</h5>
                <p class="card-text">{{ $classes }}</p>
            </div>
            <div class="card-footer d-flex align-item-center justify-content-between">
                <a href="{{ route('class') }}" class="btn btn-light btn-sm">View Details</a>
            </div>
        </div>


        <div class="card col-lg-2 m-2 bg-info text-white" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">Subject</h5>
                <h5>{{ $subject }}</h5>
            </div>
            <div class="card-footer d-flex align-item-center justify-content-between">
                <a href="{{ route('sub.index') }}" class="btn btn-light btn-sm">View Details</a>
            </div>

        </div>
    </div>
</div>
@endsection
