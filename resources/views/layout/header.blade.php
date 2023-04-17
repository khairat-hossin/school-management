<nav class="navbar navbar-expand-sm bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}">School Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item border-end">
                    <a class="nav-link" href="{{route('student')}}">Students</a>
                </li>
                <li class="nav-item border-end">
                    <a class="nav-link" href="{{route('teacher')}}">Teachers</a>
                </li>
                <li class="nav-item border-end">
                    <a class="nav-link" href="{{route('class')}}">Classes</a>
                </li>
                <li class="nav-item border-end">
                    <a class="nav-link" href="{{route('sub.index')}}">Subjects</a>
                </li>
                <li class="nav-item border-end">
                    <a class="nav-link" href="{{route('bloodgroup')}}">Blood Group</a>
                </li>
            </ul>
        </div>
    </div>
</nav>