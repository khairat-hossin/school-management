<nav class="navbar navbar-expand-sm bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}">Home</a>
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
