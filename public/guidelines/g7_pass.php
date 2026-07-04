<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 7: Provide help and support</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Prominent layout with multiple support channels (live chat, phone, email), inline help details, and a checklist of required items/documents before starting.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g7_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <!-- Document Checklist Header -->
    <div class="card mb-4 border-info bg-light">
        <div class="card-body">
            <h5 class="fw-bold text-info-emphasis"><i class="bi bi-card-checklist me-2"></i>Before you start: What you will need</h5>
            <p class="small text-muted mb-2">Ensure you have the following information ready to complete the tax declaration:</p>
            <ul class="small mb-0 ps-3">
                <li>Your 9-digit National Insurance Number (NINO).</li>
                <li>Your P60 form or annual income statement.</li>
            </ul>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-8">
            <div class="border p-4 bg-white rounded shadow-sm">
                <h4 class="mb-3">Submit Tax Declaration Form</h4>
                <p>Please enter your information to proceed. If you need help, use the floating Support panel on the right.</p>
                
                <form onsubmit="event.preventDefault(); alert('Form submitted!');">
                    <div class="mb-3">
                        <label for="tax-nino" class="form-label fw-bold">National Insurance Number</label>
                        <input type="text" id="tax-nino" class="form-control" placeholder="e.g. QQ 12 34 56 A">
                    </div>
                    <button type="submit" class="btn btn-primary">Save and Continue</button>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Helpful Support Widget -->
            <div class="card border shadow-sm">
                <div class="card-header bg-primary text-white fw-bold">
                    <i class="bi bi-headset me-2"></i>Get Support
                </div>
                <div class="card-body">
                    <p class="small text-muted">Choose the support channel that works best for you:</p>
                    
                    <div class="d-grid gap-2">
                        <a href="tel:+15550192831" class="btn btn-outline-primary btn-sm text-start">
                            <i class="bi bi-telephone-fill me-2"></i><strong>Call Us:</strong> +1 (555) 019-2831
                        </a>
                        <a href="mailto:support@example.com" class="btn btn-outline-primary btn-sm text-start">
                            <i class="bi bi-envelope-fill me-2"></i><strong>Email Support:</strong> support@example.com
                        </a>
                        <button onclick="alert('Launching Live Chat...')" class="btn btn-outline-success btn-sm text-start">
                            <i class="bi bi-chat-dots-fill me-2"></i><strong>Live Web Chat:</strong> Start Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
