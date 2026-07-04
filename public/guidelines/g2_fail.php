<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 2: Help users find what they need</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Chaotic text heading structure (skipped levels), hidden navigation systems, too many `<nav>` landmarks, and excessively nested menus.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g2_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <!-- Excessive Nav Landmarks (Rule 1) -->
    <nav class="bg-light p-2 mb-3 border rounded" role="navigation" aria-label="Secondary Navigation">
        <small class="fw-bold text-danger">[Fail Indicator: Extra Navigation Landmark #2]</small>
        <a href="#" class="me-3">Quick Link A</a>
        <a href="#">Quick Link B</a>
    </nav>
    <nav class="bg-light p-2 mb-4 border rounded" role="navigation" aria-label="Tertiary Navigation">
        <small class="fw-bold text-danger">[Fail Indicator: Extra Navigation Landmark #3]</small>
        <a href="#" class="me-3">Context Info A</a>
        <a href="#">Context Info B</a>
    </nav>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h6>Subsection Category Overview</h6>
        <h4>Welcome to the Information Portal</h4>
        <p class="text-muted">Below is a block of unsorted information. Try to find the documentation you need without search features.</p>
        
        <!-- Overloaded Menus & Deep Nesting Depth (Rule 2) -->
        <div class="my-4">
            <h5 class="text-danger fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i>Deeply Nested Overloaded Navigation (4 levels deep):</h5>
            <nav class="border p-3 bg-light rounded" aria-label="Deeply Nested List">
                <ul>
                    <li><a href="#">Main Portal Categories</a>
                        <ul>
                            <li><a href="#">Account Management Setup</a>
                                <ul>
                                    <li><a href="#">Security and Passwords</a>
                                        <ul>
                                            <li><a href="#">Two-Factor Authentication Tokens</a></li>
                                            <li><a href="#">Password Complexity Rules</a></li>
                                            <li><a href="#">Biometrics Configurations</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Billing and Invoices</a>
                                <ul>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Refund Protocols</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <h5>Detailed Documentation Area</h5>
        <p>To access downloads, navigate to the footer which does not have a sitemap but a list of arbitrary partners. If you want to search, use your browser's native `Ctrl+F` search shortcut.</p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
