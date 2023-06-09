<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
     
    <div class="card col-lg-2 m-2 bg-secondary text-white" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title">Student</h5>
          <p class="card-text">{{$student}}</p>
        </div>
        <div class="card-footer d-flex align-item-center justify-content-between">
          <a href="{{ route('student') }}" class="btn btn-light btn-sm">View Details</a>
        </div>
      </div>
   
      <div class="card col-lg-2 m-2 bg-success text-white" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title">Teacher</h5>
          <p class="card-text">{{$teacher}}</p>
        </div>
        <div class="card-footer d-flex align-item-center justify-content-between">
          <a href="{{ route('teacher') }}" class="btn btn-light btn-sm">View Details</a>
        </div>
      </div>
  
      <div class="card col-lg-2 m-2 bg-warning text-white" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title">Class</h5>
          <p class="card-text">{{$classes}}</p>  
        </div>
        <div class="card-footer d-flex align-item-center justify-content-between">
          <a href="{{ route('class') }}" class="btn btn-light btn-sm">View Details</a>
        </div>
      </div>

      
      <div class="card col-lg-2 m-2 bg-info text-white" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title">Subject</h5>
          <h5>{{$subject}}</h5>
        </div>
        <div class="card-footer d-flex align-item-center justify-content-between">
          <a href="{{ route('sub.index') }}" class="btn btn-light btn-sm">View Details</a>
        </div>

      </div>
    </div>
    </div>
  </body>
</html>
  

