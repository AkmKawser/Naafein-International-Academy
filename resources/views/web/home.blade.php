@extends('layouts.app')

@section('title', 'NAAFEIN INTERNATIONAL ACADEMY - Home')

@section('content')
<!-- 1. NEWS TICKER -->
<div id="latestTicker" class="ticker-wrap bg-light border-bottom py-2">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center">
            <span class="badge bg-danger me-3 px-3 py-2"><i class="fa-solid fa-bullhorn me-1"></i> Latest</span>
            <div class="ticker-viewport flex-grow-1 overflow-hidden" style="white-space: nowrap;">
                <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                    <span class="me-4 text-dark"><i class="fa-solid fa-circle text-primary me-2" style="font-size: 8px;"></i> Online Admission Open for Academic Session 2026-2027</span>
                    <span class="me-4 text-dark"><i class="fa-solid fa-circle text-primary me-2" style="font-size: 8px;"></i> Special Parents Meeting (Hifz Department) Scheduled for Saturday</span>
                    <span class="me-4 text-dark"><i class="fa-solid fa-circle text-primary me-2" style="font-size: 8px;"></i> Collection of Parents' ID Cards and Student Evaluation Portfolios</span>
                </marquee>
            </div>
        </div>
    </div>
</div>

<!-- 2. HERO SLIDER & NOTICE BOARD WIDGET -->
<section id="heroSection" class="py-4">
    <div class="container-fluid px-lg-4">
        <div class="row g-4 align-items-stretch">
            <!-- Left: Hero Slider (8 cols) -->
            <div class="col-lg-8" data-aos="fade-right">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <div id="heroCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner h-100">
                            <div class="carousel-item active h-100">
                                <img src="https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/banner/u4ZVDwk08ChNzFLEZNdkOO3JBPqbpY9ot7xUW8yS.jpg" class="d-block w-100 h-100" style="object-fit: cover; min-height: 420px;" alt="Banner 1">
                            </div>
                            <div class="carousel-item h-100">
                                <img src="https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/banner/qy76Sku7IkNURNUAiBp2DTW2jx5Wouzp13ovVnIb.jpg" class="d-block w-100 h-100" style="object-fit: cover; min-height: 420px;" alt="Banner 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right: Scrollable Notice Board (4 cols) -->
            <div class="col-lg-4" data-aos="fade-left">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
                        <h6 class="m-0 fw-bold"><i class="fas fa-bullhorn me-2"></i> Latest Notices</h6>
                        <a href="{{ route('notices.index') }}" class="btn btn-sm btn-light text-primary rounded-pill px-3 py-1 fw-bold" style="font-size: 0.75rem;">All Notices</a>
                    </div>
                    <div class="card-body p-0" style="max-height: 380px; overflow-y: auto;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <h6 class="fw-bold mb-1 text-dark">Special Parents' Meeting (Hifz)</h6>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> Sep 23, 2026</small>
                                    <a href="#" class="btn btn-sm btn-outline-primary rounded-pill py-0 px-2" style="font-size: 0.75rem;">Details</a>
                                </div>
                            </li>
                            <li class="list-group-item p-3">
                                <h6 class="fw-bold mb-1 text-dark">Collection of Parents' ID Cards</h6>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> Sep 09, 2026</small>
                                    <a href="#" class="btn btn-sm btn-outline-primary rounded-pill py-0 px-2" style="font-size: 0.75rem;">Details</a>
                                </div>
                            </li>
                            <li class="list-group-item p-3">
                                <h6 class="fw-bold mb-1 text-dark">Book Collection for New Session</h6>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> Jul 09, 2026</small>
                                    <a href="#" class="btn btn-sm btn-outline-primary rounded-pill py-0 px-2" style="font-size: 0.75rem;">Details</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. LEADERSHIP MESSAGES SLIDER -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden" data-aos="fade-up">
            <div class="row g-0 align-items-center">
                <div class="col-lg-4 text-center p-4 bg-white border-end">
                    <img src="https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/message/KRUxNmZvnq43Qcf2c8FjEelkMX6fwZoVLPCHCehl.jpg" alt="Principal" class="img-fluid rounded-4 shadow-sm" style="max-height: 260px;">
                    <h5 class="fw-bold mt-3 mb-1 text-dark">Prof Dr Md Mahmudul Hassan</h5>
                    <p class="text-muted small mb-0">Principal, Naafein International Academy</p>
                </div>
                <div class="col-lg-8 p-4 p-lg-5 bg-white">
                    <span class="badge bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2 rounded-pill mb-2">Message From Leadership</span>
                    <h3 class="fw-bold text-dark mb-3">Excellence Towards Salvation</h3>
                    <p class="text-secondary leading-relaxed">
                        To all respected guardians seeking the very best for their children, I warmly welcome you to Naafein International Academy, a sanctuary where dreams for your child’s future are nurtured with knowledge, faith, and compassionate care. At NIA, we do not merely prepare children for an examination; we prepare them for life.
                    </p>
                    <a href="{{ route('about.principal') }}" class="btn btn-outline-primary rounded-pill px-4 mt-2">
                        Read Full Message <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. QUICK FACTS & STATS COUNTER -->
<section class="py-5 text-white" style="background: linear-gradient(rgba(15,23,42,0.85), rgba(15,23,42,0.85)), url('https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/banner/qy76Sku7IkNURNUAiBp2DTW2jx5Wouzp13ovVnIb.jpg') center/cover;">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3" data-aos="fade-up">
                <h1 class="display-5 fw-bold text-warning mb-0">2025</h1>
                <p class="text-white-50 mt-1 mb-0">Established Year</p>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-5 fw-bold text-warning mb-0">101+</h1>
                <p class="text-white-50 mt-1 mb-0">Qualified Teachers</p>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <h1 class="display-5 fw-bold text-warning mb-0">430+</h1>
                <p class="text-white-50 mt-1 mb-0">Active Students</p>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <h1 class="display-5 fw-bold text-warning mb-0">120+</h1>
                <p class="text-white-50 mt-1 mb-0">Alumni Community</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. EDUCATION CORNER SHORTCUTS -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h3 class="fw-bold text-dark">Education Corner</h3>
            <p class="text-muted">Quick academic tools and access gateways</p>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-3" data-aos="fade-up">
                <a href="{{ route('academic.routine') }}" class="card text-center p-4 border-0 shadow-sm rounded-4 text-decoration-none h-100 hover-card">
                    <i class="fa-solid fa-clock text-primary fa-3x mb-3"></i>
                    <h6 class="fw-bold text-dark">Class Routine</h6>
                </a>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('academic.result') }}" class="card text-center p-4 border-0 shadow-sm rounded-4 text-decoration-none h-100 hover-card">
                    <i class="fa-solid fa-file-circle-check text-success fa-3x mb-3"></i>
                    <h6 class="fw-bold text-dark">Exam Result</h6>
                </a>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#studentLoginModal" class="card text-center p-4 border-0 shadow-sm rounded-4 text-decoration-none h-100 hover-card">
                    <i class="fa-solid fa-user-check text-warning fa-3x mb-3"></i>
                    <h6 class="fw-bold text-dark">Attendance</h6>
                </a>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#studentLoginModal" class="card text-center p-4 border-0 shadow-sm rounded-4 text-decoration-none h-100 hover-card">
                    <i class="fa-solid fa-receipt text-danger fa-3x mb-3"></i>
                    <h6 class="fw-bold text-dark">Fees Info</h6>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 6. COMMUNITY DIRECTORY (AJAX LOADED) -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h3 class="fw-bold text-dark">Our Faculty & Teachers</h3>
            <p class="text-muted">Dedicated educators shaping future generations</p>
        </div>
        <div class="row g-4" id="teacherGrid">
            <!-- Render initial teacher cards -->
            @foreach($teachers->take(6) as $teacher)
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 p-3 h-100 bg-white">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ $teacher->photo ? 'https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/'.$teacher->photo : 'https://www.nia.edu.bd/assets/theme-4/img/male.png' }}" alt="{{ $teacher->name }}" class="rounded-3" style="width: 70px; height: 70px; object-fit: cover;">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">{{ $teacher->name }}</h6>
                            <p class="text-muted small mb-2">{{ $teacher->designation_title ?? 'Teacher' }}</p>
                            <a href="{{ route('teacher.profile', $teacher->id ?? 1) }}" class="btn btn-sm btn-outline-primary rounded-pill py-0 px-2" style="font-size: 0.75rem;">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
