<<<<<<< HEAD
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>School Management System</title>
=======
<nav class="navbar navbar-expand-sm bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="toggle navigation">//</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('student')}}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher')}}">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('class')}}">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sub.index')}}">Subjects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
>>>>>>> 0eea7d8cf04dc2573d74e56dd728d3c465b2ef41
