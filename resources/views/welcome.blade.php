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


  <!--bar_chart--->
  <div class="row">
  <div class="col-md-4">
<div class="barchart">
    <canvas id="myChart" width="150" height="50"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Student', 'Teacher', 'Class', 'Subject'],
        datasets: [{
          label: '# of',
          data: ["{{ $student }}", "{{ $teacher }}", "{{ $classes }}", "{{ $subject }}"],
          backgroundColor:[
        'red',
        'blue',
        'green',
        'yellow'

      ],
          borderWidth: 2,
          

        }]
      },
      options: {
        
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  </div>
  
  <div class="col-md-4">
  <div class="Piechart">
    <canvas id="mypiechart" height="50px"; width="50px"></canvas>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  const pie = document.getElementById('mypiechart').getContext('2d');

new Chart(pie, {
  type: 'pie',
  data: {
    labels: ['Student', 'Teacher', 'Class', 'Subject'],
    datasets: [{
      label: '# of Votes',
      data: ["{{ $student }}", "{{ $teacher }}", "{{ $classes }}", "{{ $subject }}"],
      backgroundColor:[
        'red',
        'blue',
        'green',
        'yellow'

      ],
      borderWidth: 0
    }]
  }
});

  </script>
  </div>
  

    <div class="col-md-4">
      <div class="doughtnutchart">
        <canvas id="mydDoughnutChart" width="50" height="50"></canvas>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const dctx = document.getElementById('mydDoughnutChart');
      
        new Chart(dctx, {
          type: 'doughnut',
          data: {
            labels: ['Student', 'Teacher', 'Class', 'Subject'],
            datasets: [{
              label: '# of',
              data: ["{{ $student }}", "{{ $teacher }}", "{{ $classes }}", "{{ $subject }}"],
              backgroundColor:[
        'red',
        'blue',
        'green',
        'yellow'

      ],
              borderWidth: 2,
              
    
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
    </div>
@endsection


