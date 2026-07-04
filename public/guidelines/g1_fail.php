<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 1: Help users understand what things are and how to use them</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Interactive buttons look like plain text, links have inconsistent styling, ambiguous icons are used (e.g. using a shopping cart icon for "Help"), and identical ambiguous link texts point to different destinations.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g1_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-4">Demo: Registration Page</h4>

        <div class="mb-4">
            <p>Welcome! Fill out your details below to register.</p>
        </div>

        <!-- Ambiguous Link Labels (Rule 4) -->
        <div class="alert alert-danger mb-4">
            <p class="fw-bold mb-1">[Fail Indicator: Multiple ambiguous links with identical labels pointing to different paths]</p>
            <p>To view our Terms of Service, <a href="/terms.php">click here</a>. To download our Registration Policy sheet, <a href="/policy.php">click here</a>. To contact our registry team directly, <a href="/contact.php">click here</a>.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="fw-semibold">Name</label>
                <input type="text" class="form-control" name="user_name">
            </div>
            
            <div class="col-md-6">
                <label class="fw-semibold">Contact Info</label>
                <input type="text" class="form-control" name="user_contact">
            </div>
        </div>

        <div class="mt-4 d-flex align-items-center gap-3">
            <div onclick="alert('Form cancelled!')" style="cursor: pointer; text-decoration: underline; color: #000; font-weight: bold;">
                Cancel Setup
            </div>

            <a href="#" onclick="alert('Help info here')" style="color: purple; text-decoration: none;">
                <i class="bi bi-cart4 fs-4" title="Help"></i>
            </a>

            <div onclick="alert('Registered successfully!')" style="cursor: pointer; background-color: #fff; border: 1px solid #ccc; padding: 10px 20px; font-weight: bold;">
                Process Request
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
