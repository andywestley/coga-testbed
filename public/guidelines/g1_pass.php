<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 1: Help users understand what things are and how to use them</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Elements are styled consistently. Buttons look like clickable controls, inputs have clear hint texts, and conventional icons with labels/tooltips are utilized.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g1_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-4">Demo: Registration Page</h4>

        <div class="mb-4">
            <p class="text-muted">Fill out the registration form below. All fields are required unless marked as optional.</p>
        </div>

        <form onsubmit="event.preventDefault(); alert('Registered successfully!');" class="row g-3">
            <div class="col-md-6">
                <!-- Good consistency: Explicit labels linked to input IDs with helpful hint text -->
                <label for="reg-name" class="form-label fw-bold">Full Name</label>
                <div class="form-text text-muted mb-2">Enter your first and last name.</div>
                <input type="text" id="reg-name" class="form-control" placeholder="e.g. Jane Doe" required>
            </div>
            
            <div class="col-md-6">
                <label for="reg-contact" class="form-label fw-bold">Email Address</label>
                <div class="form-text text-muted mb-2">We will use this to send confirmation updates.</div>
                <input type="email" id="reg-contact" class="form-control" placeholder="e.g. name@example.com" required>
            </div>

            <div class="col-12 mt-4 d-flex align-items-center gap-3 flex-wrap">
                <!-- Standard Button styles -->
                <button type="submit" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-person-plus-fill me-2"></i>Register Account
                </button>

                <!-- Cancel link styled as secondary button or clean distinct link -->
                <a href="/index.php" class="btn btn-outline-secondary px-4 py-2">
                    Cancel
                </a>

                <!-- Standard Question/Help icon with explicit text label -->
                <a href="#" onclick="alert('Help info: Standard email registration requires verification.');" class="btn btn-link text-decoration-none text-muted" aria-label="Help info about registration">
                    <i class="bi bi-question-circle-fill me-1 fs-5 align-middle"></i>
                    <span class="align-middle">Get Help</span>
                </a>
            </div>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
