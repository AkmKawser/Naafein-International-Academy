# Naafein International Academy (NIA) - Project Folder Structure

> **Reference Website**: [https://www.nia.edu.bd/](https://www.nia.edu.bd/)  
> **Tech Stack Pattern**: Clean Modular MVC / Laravel Architecture with RESTful API & Blade View Layer.

---

## 1. Directory Tree Overview

```plaintext
nafein-academy/
├── app/
│   ├── Console/
│   │   └── Commands/
│   │       └── CheckSubscriptionExpiry.php     # Scheduled licensing / renewal check
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/                          # Administration Dashboard
│   │   │   │   ├── AcademicController.php      # Years, Classes, Sections, Routines
│   │   │   │   ├── AdmissionController.php     # Online Application Processing
│   │   │   │   ├── EmployeeController.php      # Teachers, Staff, Governing Body
│   │   │   │   ├── ExamResultController.php    # Result Management & Report Cards
│   │   │   │   ├── GalleryController.php       # Albums & Photos
│   │   │   │   ├── HostelController.php        # Hostels, Rooms & Allocations
│   │   │   │   ├── NoticeController.php        # Notices & Circulars
│   │   │   │   ├── SettingController.php       # EIIN, Contacts, School Info
│   │   │   │   └── StudentController.php       # Enrolled Student Database
│   │   │   ├── Api/                            # REST & AJAX Endpoints
│   │   │   │   ├── AttendanceApiController.php
│   │   │   │   ├── PublicApiController.php     # /get-teachers, /expired-check
│   │   │   │   └── RoutineApiController.php
│   │   │   ├── Auth/                           # Authentication Endpoints
│   │   │   │   ├── AdminLoginController.php
│   │   │   │   ├── StudentLoginController.php  # Student Modal Auth
│   │   │   │   └── TeacherLoginController.php  # Teacher Modal Auth
│   │   │   ├── Portal/                         # Role-Protected Portals
│   │   │   │   ├── Student/
│   │   │   │   │   ├── DashboardController.php
│   │   │   │   │   ├── ResultController.php
│   │   │   │   │   └── RoutineController.php
│   │   │   │   └── Teacher/
│   │   │   │       ├── AttendanceController.php
│   │   │   │       ├── DashboardController.php
│   │   │   │       └── MarkEntryController.php
│   │   │   └── Web/                            # Public Website Pages
│   │   │       ├── AboutController.php         # History, Principal & Chairman message
│   │   │       ├── AdmissionWebController.php  # Public admission-form / v2
│   │   │       ├── ContactController.php       # Contact form submissions
│   │   │       ├── CurriculumController.php    # EY, PYP, MYP, HYP, Hifz
│   │   │       ├── HomeController.php          # Homepage sliders & teacher grid
│   │   │       └── NoticeWebController.php     # Public notice listings & detail
│   │   ├── Middleware/
│   │   │   ├── Authenticate.php
│   │   │   ├── RedirectIfAuthenticated.php
│   │   │   └── RoleMiddleware.php              # Multi-Guard Role-based access control
│   │   └── Requests/                           # Form Requests & Validation
│   │       ├── AdmissionApplyRequest.php
│   │       ├── StudentStoreRequest.php
│   │       └── TeacherStoreRequest.php
│   ├── Models/
│   │   ├── AcademicYear.php
│   │   ├── AdmissionApplication.php
│   │   ├── Attendance.php
│   │   ├── ClassModel.php
│   │   ├── ClassRoutine.php
│   │   ├── Employee.php
│   │   ├── Exam.php
│   │   ├── ExamResult.php
│   │   ├── GalleryAlbum.php
│   │   ├── GalleryImage.php
│   │   ├── Hostel.php
│   │   ├── Notice.php
│   │   ├── Section.php
│   │   ├── Setting.php
│   │   ├── Student.php
│   │   ├── Subject.php
│   │   └── User.php
│   ├── Services/                               # Domain Logic Layer
│   │   ├── AdmissionService.php                # Application lifecycle & notifications
│   │   ├── FileUploadService.php               # Linode Object Storage / S3 uploads
│   │   ├── ResultCalculationService.php        # GPA and Grading formulas
│   │   └── SmsNotificationService.php          # SMS Gateway for parent alerts
│   └── View/
│       └── Components/                         # Reusable Blade UI components
├── bootstrap/
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   └── filesystems.php                         # Linode S3 bucket driver config
├── database/
│   ├── factories/
│   ├── migrations/                             # Database Migrations
│   │   ├── 2025_01_01_000001_create_users_table.php
│   │   ├── 2025_01_01_000002_create_academic_structure_tables.php
│   │   ├── 2025_01_01_000003_create_employees_table.php
│   │   ├── 2025_01_01_000004_create_students_and_admissions_tables.php
│   │   ├── 2025_01_01_000005_create_exams_and_results_tables.php
│   │   ├── 2025_01_01_000006_create_hostel_tables.php
│   │   └── 2025_01_01_000007_create_cms_and_settings_tables.php
│   └── seeders/
│       ├── AcademicSeeder.php
│       ├── DatabaseSeeder.php
│       ├── RolePermissionSeeder.php
│       └── SettingSeeder.php
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── js/
│   │   ├── images/                             # google-play.png, logo, icons
│   │   └── theme-4/                            # Frontend assets (CSS, JS, Splide, AOS)
│   │       ├── css/style.css
│   │       └── img/
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources/
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── layouts/
│       │   ├── admin.blade.php                 # Admin dashboard layout
│       │   ├── app.blade.php                   # Frontend main master layout
│       │   ├── auth.blade.php
│       │   └── portal.blade.php                # Student/Teacher portal layout
│       ├── partials/
│       │   ├── footer.blade.php
│       │   ├── header-desktop.blade.php
│       │   ├── header-mobile.blade.php
│       │   ├── modals/
│       │   │   ├── apk-install.blade.php       # Mobile App prompt modal
│       │   │   ├── student-login.blade.php     # Student modal login
│       │   │   └── teacher-login.blade.php     # Teacher modal login
│       │   └── topbar.blade.php
│       ├── admin/                              # Admin view templates
│       ├── portal/                             # Student / Teacher portal views
│       └── web/                                # Public Web pages
│           ├── about/
│           │   ├── chairman-message.blade.php
│           │   ├── history.blade.php
│           │   └── principal-message.blade.php
│           ├── academic/
│           │   ├── calendar.blade.php
│           │   ├── class-routine.blade.php
│           │   ├── result.blade.php
│           │   └── syllabus.blade.php
│           ├── admission/
│           │   ├── apply.blade.php             # Online admission form
│           │   └── procedure.blade.php
│           ├── curriculum/
│           │   ├── early-years.blade.php
│           │   ├── hifz.blade.php
│           │   ├── myp-hyp.blade.php
│           │   └── pyp.blade.php
│           ├── gallery/
│           ├── notices/
│           │   ├── index.blade.php
│           │   └── show.blade.php
│           └── home.blade.php                  # Homepage with sliders & teacher list
├── routes/
│   ├── admin.php                               # Prefix: /admin
│   ├── api.php                                 # Prefix: /api
│   ├── auth.php                                # Login / logout routes
│   ├── portal.php                              # Student/Teacher portal routes
│   └── web.php                                 # Public routes (/, /notices, /admissions)
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── tests/
├── .env.example
├── composer.json
├── package.json
└── README.md
```
