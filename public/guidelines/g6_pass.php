<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 6: Ensure processes do not rely on memory</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Enabled autocompletion attributes, fully working copy-paste interactions, and displaying summary details from the previous step.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g6_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-4">Demo: Two-Factor Verification</h4>
        
        <!-- Re-providing information from previous steps -->
        <div class="card mb-4 border bg-light">
            <div class="card-body py-2 px-3">
                <span class="fw-bold me-2"><i class="bi bi-info-circle text-primary me-1"></i>Verification Context:</span>
                We sent a code to your registered email: <strong class="text-secondary">user@example.com</strong>.
            </div>
        </div>

        <form onsubmit="event.preventDefault(); alert('Verification Successful!');">
            <div class="mb-3">
                <label for="pass-token" class="form-label fw-bold">Verification Token Code</label>
                <div class="form-text text-muted mb-2">You can copy the code from your email and paste it directly below, or type it in.</div>
                
                <!-- Pass implementation: autocomplete enabled, paste is allowed -->
                <input type="text" id="pass-token" class="form-control" autocomplete="one-time-code" placeholder="e.g. 12345678" required>
            </div>

            <button type="submit" class="btn btn-primary px-4">Verify Code</button>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
