<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- Restore responsive viewport configuration -->
<script>
    let meta = document.querySelector('meta[name="viewport"]');
    if (meta) {
        meta.setAttribute('content', 'width=device-width, initial-scale=1.0');
    }
</script>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 8: Support adaptation and personalisation</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Fully responsive container built using fluid percentages and relative units (`rem`), respecting global user themes, and featuring personalization checkboxes to toggle font layouts.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g8_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <!-- Personalization Control Panel Widget -->
    <div class="accessibility-panel">
        <h5 class="fw-bold mb-3"><i class="bi bi-gear-fill text-primary me-2"></i>Personalize your view</h5>
        <div class="row g-3">
            <div class="col-sm-6">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="text-spacing-check">
                    <label class="form-check-label fw-semibold" for="text-spacing-check">Increase Text Spacing</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="dyslexic-font-check">
                    <label class="form-check-label fw-semibold" for="dyslexic-font-check">Use Dyslexic-Friendly Font</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Fluid responsive container using rem units -->
    <div class="border p-4 bg-white rounded shadow-sm">
        <h3 class="h4 fw-bold mb-3">Adaptation Sandbox</h3>
        <p class="fs-6 mb-3">
            This container uses fluid percentages and responsive bootstrap columns. The typography is set in relative units (`rem`). 
        </p>
        <p class="fs-6">
            If you toggle the switches above or change the theme setting (Light / Dark / High Contrast) in the header navbar, the layout adjusts automatically.
        </p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
