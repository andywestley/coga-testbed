<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- Override viewport configuration to mimic a locked zoom layout in failures -->
<script>
    // Dynamically inject a viewport meta tag that prevents zooming for demonstration
    let meta = document.querySelector('meta[name="viewport"]');
    if (meta) {
        meta.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');
    }
</script>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 8: Support adaptation and personalisation</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Locked scaling viewport (`user-scalable=no` or `maximum-scale=1.0`), fixed pixel font dimensions (`px`), and refusal to respect user personalization values.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g8_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <!-- Layout using fixed px styles and no flex/resizing adaptions -->
    <div style="background-color: #ffffff; color: #212529; border: 1px solid #dee2e6; width: 600px; padding: 20px;">
        <h4 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Adaptation Sandbox</h4>
        <p style="font-size: 14px; line-height: 18px; margin-bottom: 10px;">
            The width of this container is hardcoded to 600px. If you view this page on a mobile device or try to zoom the browser, the container will clip outside the viewport. The fonts are set in absolute pixels (`px`) and do not scale dynamically based on system preference.
        </p>
        <p style="font-size: 14px; line-height: 18px;">
            Try using the theme selector or testing screen readers. The styles on this component will ignore your configuration settings.
        </p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
