<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 4: Help users avoid mistakes and know how to correct them</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Forgiving validations that strip spaces/dashes, clear input guidelines ("Select all that apply"), an error summary linking directly to error components, and inline warning text.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g4_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <!-- Error summary block at the top -->
    <div class="alert alert-danger" id="pass-error-summary" style="display: none;" role="alert">
        <h4 class="alert-heading fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i>There is a problem</h4>
        <ul class="mb-0">
            <li><a href="#pass-phone" class="alert-link">The contact number must contain 10 digits (spaces or dashes are okay)</a></li>
        </ul>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-4">Demo: Registration Profile</h4>

        <form id="pass-form" novalidate onsubmit="return validateForm(event);">
            <div class="mb-3">
                <label for="pass-phone" class="form-label fw-bold">Contact Phone Number</label>
                <div id="phone-hint" class="form-text text-muted mb-2">We will use this to call you if there are changes to your appointment. For example: 0123-456-7890 or 0123 456 7890.</div>
                
                <input type="text" id="pass-phone" class="form-control" aria-describedby="phone-hint phone-error" required>
                
                <div id="phone-error" class="invalid-feedback fw-bold">
                    <i class="bi bi-exclamation-circle-fill me-1"></i> Enter a valid 10-digit phone number.
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Subscription Options</label>
                <div class="form-text text-muted mb-2">Choose all options that you would like to receive.</div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sc1">
                    <label class="form-check-label" for="sc1">Weekly Newsletter (Email)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sc2">
                    <label class="form-check-label" for="sc2">Urgent SMS Alerts (Mobile)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary px-4 py-2">Submit Profile</button>
        </form>
    </div>
</div>

<script>
function validateForm(e) {
    e.preventDefault();
    const phoneInput = document.getElementById('pass-phone');
    const summary = document.getElementById('pass-error-summary');
    
    // Forgiving validation logic: clean spaces and dashes
    const rawVal = phoneInput.value;
    const cleanVal = rawVal.replace(/[\s-]/g, '');
    const isValid = /^[0-9]{10}$/.test(cleanVal);

    if (!isValid) {
        phoneInput.classList.add('is-invalid');
        phoneInput.setAttribute('aria-invalid', 'true');
        summary.style.display = 'block';
        window.scrollTo(0, 0);
        return false;
    } else {
        phoneInput.classList.remove('is-invalid');
        phoneInput.removeAttribute('aria-invalid');
        summary.style.display = 'none';
        alert('Form submitted successfully! Parsed number: ' + cleanVal);
        return true;
    }
}
</script>

<?php include '../includes/footer.php'; ?>
