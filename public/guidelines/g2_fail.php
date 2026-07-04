<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 2: Help users find what they need</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Chaotic text heading structure (skipped levels), hidden navigation systems, and a complete absence of search or site maps.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g2_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <!-- Chaotic Out of Order Heading Levels -->
    <div class="border p-4 bg-white rounded shadow-sm">
        <h6>Subsection Category Overview</h6>
        <h4>Welcome to the Information Portal</h4>
        <p class="text-muted">Below is a block of unsorted information. Try to find the documentation you need without search features.</p>
        
        <!-- Chaotic Navigation: Hover menus hidden inside submenus -->
        <div style="background-color: #f1f1f1; padding: 10px; margin-bottom: 20px;">
            <span style="font-weight: bold; cursor: pointer;" onclick="alert('Menu items: Settings, Info, Downloads, FAQ (normally hidden on hover)')">
                Hover to Reveal Navigation Menu ⚡
            </span>
        </div>

        <h5>Detailed Documentation Area</h5>
        <p>To access downloads, navigate to the footer which does not have a sitemap but a list of arbitrary partners. If you want to search, use your browser's native `Ctrl+F` search shortcut.</p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
