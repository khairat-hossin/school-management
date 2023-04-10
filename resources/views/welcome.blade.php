@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Student</h5>
                        <p class="card-text">{{ $student }}</p>
                    </div>
                    <div class="card-footer d-flex align-item-center justify-content-between">
                        <a href="{{ route('student') }}" class="btn btn-light btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Teacher</h5>
                        <p class="card-text">{{ $teacher }}</p>
                    </div>
                    <div class="card-footer d-flex align-item-center justify-content-between">
                        <a href="{{ route('teacher') }}" class="btn btn-light btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title">Class</h5>
                        <p class="card-text">{{ $classes }}</p>
                    </div>
                    <div class="card-footer d-flex align-item-center justify-content-between">
                        <a href="{{ route('class') }}" class="btn btn-light btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 my-2">

                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Subject</h5>
                        <p class="card-text">{{ $subject }}</p>
                    </div>
                    <div class="card-footer d-flex align-item-center justify-content-between">
                        <a href="{{ route('sub.index') }}" class="btn btn-light btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--bar_chart--->
    <div class="row mt-3 text-center">
        <div class="col-sm-12 col-md-6 col-lg-4 text-center">
            <div class="barchart  m-2">
                <canvas id="myChart" width="100%" height="100%"></canvas>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 text-center">
            <div class="Piechart  m-2">
                <canvas id="mypiechart" height="100%"; width="100%"></canvas>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4 text-center">
            <div class="doughtnutchart m-2">
                <canvas id="mydDoughnutChart" width="100%" height="100%"></canvas>
            </div>
        </div>
    @endsection

    @section('script')

        {{-- Bar chart script --}}
        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Student', 'Teacher', 'Class', 'Subject'],
                    datasets: [{
                        label: '# of',
                        data: ["{{ $student }}", "{{ $teacher }}", "{{ $classes }}",
                            "{{ $subject }}"
                        ],
                        backgroundColor: [
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

     {{-- Pie chart script --}}
        <script>
            const pie = document.getElementById('mypiechart').getContext('2d');

            new Chart(pie, {
                type: 'pie',
                data: {
                    labels: ['Student', 'Teacher', 'Class', 'Subject'],
                    datasets: [{
                        label: '# of Votes',
                        data: ["{{ $student }}", "{{ $teacher }}", "{{ $classes }}",
                            "{{ $subject }}"
                        ],
                        backgroundColor: [
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


         {{-- Donought chart script --}}
        <script>
            const dctx = document.getElementById('mydDoughnutChart');

            new Chart(dctx, {
                type: 'doughnut',
                data: {
                    labels: ['Student', 'Teacher', 'Class', 'Subject'],
                    datasets: [{
                        label: '# of',
                        data: ["{{ $student }}", "{{ $teacher }}", "{{ $classes }}",
                            "{{ $subject }}"
                        ],
                        backgroundColor: [
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
    @endsection
