<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar m-0 collapse show" id="sidebarCollapse">
    <div class="sidebar-sticky">
        <ul class="nav nav-pills nav-flush flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ route('student') }}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ route('teacher') }}">Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ route('class') }}">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ route('sub.index') }}">Subjects</a>
            </li>
        </ul>
    </div>
</nav>
