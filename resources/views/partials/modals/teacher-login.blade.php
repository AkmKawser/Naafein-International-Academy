<!-- Teacher Login Modal -->
<div class="modal fade" id="teacherLoginModal" tabindex="-1" aria-labelledby="teacherLoginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title fw-bold" id="teacherLoginLabel">
                    <i class="fa-solid fa-chalkboard-user me-2"></i> Faculty & Staff Portal
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('teacher.login.submit') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="text-center mb-3">
                        <img src="https://team-x.sg-sin-1.linodeobjects.com/team-x.ap-south-1.linodeobjects.com/uploads/schoolInfo/ENdl3lCC57obsnCaSqwtYZVAR6RERd8rmc8MCHbm.png" alt="logo" width="60">
                        <h6 class="fw-bold mt-2 text-dark">Faculty Login</h6>
                        <p class="text-muted small">Manage student daily attendance, routine, and marks</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Faculty Username / Email</label>
                        <input type="text" name="username" class="form-control rounded-3" placeholder="Enter teacher username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control rounded-3" placeholder="Enter password" required>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-dark py-2 fw-semibold rounded-3">Access Portal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
