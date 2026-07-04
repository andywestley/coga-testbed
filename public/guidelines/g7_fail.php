<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 7: Provide help and support</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Contact/support channels are hidden or completely absent. Only offering a single support method (e.g., telephone calls only), which is inaccessible to many.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g7_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-3">Submit Tax Declaration Form</h4>
        <p class="text-muted">Fill out the declaration. If you encounter errors, seek support through external channels.</p>

        <!-- No support links, no helpline details, single channel (telephone call only) hidden in a long text string -->
        <p class="small text-muted mt-5">
            If you have issues, you must call our physical corporate head office line at +1 (555) 019-2831. (Lines open Mondays 9am - 10am only).
        </p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
