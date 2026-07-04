<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 2: Help users find what they need</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Linear heading outline (H2 to H3), clear breadcrumbs navigation, an easily identifiable search form, and a dedicated sitemap section.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g2_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <!-- Breadcrumbs Navigation -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Guidelines</a></li>
            <li class="breadcrumb-item active" aria-current="page">Guideline 2 Pass</li>
        </ol>
    </nav>

    <!-- Search Box widget -->
    <div class="bg-light p-3 rounded mb-4 border">
        <form class="row g-2 align-items-center" onsubmit="event.preventDefault(); alert('Search submitted for: ' + document.getElementById('search-input').value);">
            <div class="col-auto">
                <label for="search-input" class="visually-hidden">Search this documentation</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="search" id="search-input" class="form-control" placeholder="Search guidelines...">
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h2 class="h3 fw-bold mb-3">Welcome to the Information Portal</h2>
        <p>Use the structured section headings below to find relevant articles. We provide clean, direct links and a comprehensive sitemap in the page index below.</p>
        
        <h3 class="h4 fw-bold mt-4 mb-2"><i class="bi bi-folder-fill text-warning me-2"></i>Documentation Categories</h3>
        <p>Browse through core categories like user guides, developer setups, and accessibility standards.</p>

        <hr class="my-4">
        
        <h3 class="h5 fw-bold mb-3" id="sitemap"><i class="bi bi-map me-2"></i>Portal Sitemap</h3>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <h4 class="h6 fw-bold">Guides</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Quick Start Guide</a></li>
                    <li><a href="#" class="text-decoration-none">User Profiles Setup</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <h4 class="h6 fw-bold">Support</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Contact Support Desk</a></li>
                    <li><a href="#" class="text-decoration-none">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
