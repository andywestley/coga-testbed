<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 4: Help users avoid mistakes and know how to correct them</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Strict and unforgiving input validation, missing label indicators, abstract required markers (e.g., unexplained red asterisks), and unhelpful generic error codes.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g4_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <!-- Error container mimicking poor error validation responses -->
    <div class="alert alert-danger" id="error-box" style="display: none;">
        <strong>Error Encountered:</strong> Validation failure code 403-B. Correct fields before submitting.
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-4">Demo: Registration Profile</h4>

        <form id="fail-form" onsubmit="event.preventDefault(); document.getElementById('error-box').style.display = 'block'; window.scrollTo(0,0);">
            <div class="mb-3">
                <!-- No label text, just abstract asterisk, rigid validation requiring exact syntax -->
                <label class="fw-bold">Contact Number *</label>
                <input type="text" class="form-control" name="phone" pattern="^[0-9]{10}$" required>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Subscription Options</label>
                <!-- Abstract checkbox instruction lacking helper info (Choose one or multiple?) -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="c1">
                    <label class="form-check-label" for="c1">Newsletter</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="c2">
                    <label class="form-check-label" for="c2">SMS Alerts</label>
                </div>
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
