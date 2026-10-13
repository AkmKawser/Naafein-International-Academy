<!-- Desktop Main Navigation Menu -->
<nav id="menuSection" class="menu-section d-none d-lg-block navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: var(--primary-color);">
    <div class="container">
        <div id="navbarNav" class="collapse navbar-collapse show">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                
                <!-- About Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="{{ route('about.history') }}">History</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.why_choose') }}">Why our school to choose</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.chairman') }}">Message from the Chairman</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.principal') }}">Message from the Principal</a></li>
                    </ul>
                </li>

                <!-- Administration Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Administration</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="{{ route('admin.governing_body') }}">Governing Body</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.staffs') }}">Non-Teaching Staffs</a></li>
                    </ul>
                </li>

                <!-- Academic Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Academic</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="{{ route('academic.evaluation') }}">Student Evaluation Process</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.calendar') }}">Academic Calendar</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.ramadan') }}">Ramadan Calendar</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.index') }}">News</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.result') }}">Result</a></li>
                        <li><a class="dropdown-item" href="{{ route('notices.index') }}">Notice</a></li>
                        <li><a class="dropdown-item" href="{{ route('events.index') }}">Events</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.students') }}">Students List</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.routine') }}">Class Routine</a></li>
                    </ul>
                </li>

                <!-- Curriculum Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Curriculum</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="{{ route('curriculum.ey') }}">Early Years (EY)</a></li>
                        <li><a class="dropdown-item" href="{{ route('curriculum.pyp') }}">Primary Years Programme (PYP)</a></li>
                        <li><a class="dropdown-item" href="{{ route('curriculum.myp_hyp') }}">Middle & High Years (MYP/HYP)</a></li>
                        <li><a class="dropdown-item" href="{{ route('curriculum.hifz') }}">Hifz and Arabic Curriculum</a></li>
                    </ul>
                </li>

                <!-- Discipline -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('discipline.uniform') }}">Discipline</a>
                </li>

                <!-- Admission Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admission</a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="{{ route('admission.procedure') }}">Application Procedure</a></li>
                        <li><a class="dropdown-item" href="{{ route('admission.v2') }}">Online Admission Form</a></li>
                    </ul>
                </li>

                <!-- Gallery -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
