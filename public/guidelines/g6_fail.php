<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 6: Ensure processes do not rely on memory</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Blocking paste functionality on inputs, disabling autocompletion, and failing to re-provide user input or parameters on confirmation screens.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g6_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-4">Demo: Two-Factor Verification</h4>
        
        <div class="alert alert-warning">
            We sent a verification code to your contact details. Locate and type it below.
        </div>

        <form onsubmit="event.preventDefault(); alert('Verification Successful!');">
            <div class="mb-3">
                <label class="fw-bold">Verification Token Code</label>
                <!-- Memory failure: autocomplete off, paste blocked, forcing user to type complex string -->
                <input type="text" class="form-control" autocomplete="off" onpaste="alert('Pasting is blocked!'); return false;" placeholder="Type the 8-digit code">
                <div class="form-text text-danger mt-1">Copy and paste is disabled. You must type the code exactly.</div>
            </div>

            <button type="submit" class="btn btn-dark">Verify Code</button>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
