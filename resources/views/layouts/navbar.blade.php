<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Klein Rhee Sioson</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('experience') }}">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>