<!-- Student Login Modal -->
<div class="modal fade" id="studentLoginModal" tabindex="-1" aria-labelledby="studentLoginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="studentLoginLabel">
                    <i class="fa-solid fa-user-graduate me-2"></i> Student Portal Login
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('student.login.submit') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="text-center mb-3">
                        <img src="https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/schoolInfo/ENdl3lCC57obsnCaSqwtYZVAR6RERd8rmc8MCHbm.png" alt="logo" width="60">
                        <h6 class="fw-bold mt-2 text-dark">Access Student Dashboard</h6>
                        <p class="text-muted small">View attendance, exam results, and fees records</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Student ID / Roll No</label>
                        <input type="text" name="student_id" class="form-control rounded-3" placeholder="Enter student roll or ID" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Password / Date of Birth</label>
                        <input type="password" name="password" class="form-control rounded-3" placeholder="Enter password" required>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary py-2 fw-semibold rounded-3">Login to Portal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
