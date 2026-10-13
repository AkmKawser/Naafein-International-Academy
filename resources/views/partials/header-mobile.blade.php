<!-- Mobile Header -->
<div id="mobileHeader" class="mobile-header d-lg-none bg-white py-2 px-3 border-bottom d-flex align-items-center justify-content-between">
    <button class="btn btn-outline-dark btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-label="Open menu">
        <i class="fa-solid fa-bars fa-lg"></i>
    </button>
    <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none">
        <img src="https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/schoolInfo/ENdl3lCC57obsnCaSqwtYZVAR6RERd8rmc8MCHbm.png" alt="logo" width="36px">
        <span class="fw-bold text-dark small">NAAFEIN ACADEMY</span>
    </a>
    <div></div>
</div>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header bg-primary text-white">
        <h5 class="offcanvas-title" id="mobileNavLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <nav class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action" href="{{ route('home') }}">Home</a>
            <a class="list-group-item list-group-item-action" href="{{ route('about.history') }}">About Us</a>
            <a class="list-group-item list-group-item-action" href="{{ route('admin.governing_body') }}">Administration</a>
            <a class="list-group-item list-group-item-action" href="{{ route('academic.routine') }}">Academic</a>
            <a class="list-group-item list-group-item-action" href="{{ route('curriculum.ey') }}">Curriculum</a>
            <a class="list-group-item list-group-item-action" href="{{ route('discipline.uniform') }}">Discipline</a>
            <a class="list-group-item list-group-item-action" href="{{ route('admission.v2') }}">Admission</a>
            <a class="list-group-item list-group-item-action" href="{{ route('gallery.index') }}">Gallery</a>
            <a class="list-group-item list-group-item-action" href="{{ route('contact.index') }}">Contact</a>
        </nav>
    </div>
</div>
