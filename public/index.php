<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<div class="col-md-9">
    <div class="p-5 mb-4 bg-light rounded-3 border">
        <div class="container-fluid py-2">
            <h1 class="display-5 fw-bold text-primary"><i class="bi bi-shield-fill-check me-2"></i>COGA Testbed & Guide</h1>
            <p class="col-md-11 fs-5 text-muted">
                Welcome to the cognitive accessibility demonstration sandbox. This site is built to showcase the 8 guidelines developed by the W3C COGA taskforce, highlighting both <strong>inaccessible design failures</strong> and their <strong>accessible solutions</strong>.
            </p>
            <p class="col-md-11 text-muted">
                You can use this codebase as a testbed for auditing tools, manual QA testing, and developer training. Use the sidebar or cards below to inspect the comparison views.
            </p>
            <div class="alert alert-info mt-3 d-flex align-items-center" role="alert">
                <i class="bi bi-info-circle-fill fs-4 me-3"></i>
                <div>
                    <strong>Unofficial Resource:</strong> Please note that this is not an official W3C website. I am publishing this as a helpful, independent resource for the web development community.
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-puzzle me-2 text-info"></i>1. Understand Purpose</h5>
                    <p class="card-text text-muted flex-grow-1">Ensure users understand what components are and how to interact with them consistently.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g1_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g1_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-search me-2 text-info"></i>2. Find what they need</h5>
                    <p class="card-text text-muted flex-grow-1">Make content findable, structures consistent, and search features easily recognizable.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g2_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g2_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-file-text me-2 text-info"></i>3. Clear Content</h5>
                    <p class="card-text text-muted flex-grow-1">Use plain language, short paragraphs, and visual support instead of dense text blocks.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g3_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g3_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-exclamation-triangle me-2 text-info"></i>4. Avoid Mistakes</h5>
                    <p class="card-text text-muted flex-grow-1">Provide forgiving inputs, clear instructions, inline error highlights, and helpful recovery paths.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g4_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g4_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-eye me-2 text-info"></i>5. Help Users Focus</h5>
                    <p class="card-text text-muted flex-grow-1">Minimize distractions, banner advertisements, flashing layers, and pop-ups.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g5_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g5_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-cpu me-2 text-info"></i>6. No Memory Reliance</h5>
                    <p class="card-text text-muted flex-grow-1">Allow copy-pasting, autofill support, and avoid splitting information across isolated screens.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g6_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g6_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-chat-left-text me-2 text-info"></i>7. Provide Support</h5>
                    <p class="card-text text-muted flex-grow-1">Provide visible floating widgets, context-aware help desks, and dynamic live chats.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g7_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g7_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><i class="bi bi-sliders me-2 text-info"></i>8. Adaptability</h5>
                    <p class="card-text text-muted flex-grow-1">Support fluid text size scaling, dark themes, spacing configs, and reduced motion.</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/guidelines/g8_fail.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>View Fail</a>
                        <a href="/guidelines/g8_pass.php" class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>View Pass</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
