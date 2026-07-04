<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 3: Use clear and understandable content</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Plain language, bullet points, tooltips or expanded versions for acronyms, and clear visual structures.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g3_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-3 text-primary">How Money Transfers Work</h4>
        
        <p class="lead">
            We use the <strong class="text-secondary"><abbr title="Automated Clearing House (an electronic network for financial transactions)">ACH</abbr> system</strong> to move money from one account to another. 
        </p>

        <p class="mb-4">
            To ensure your safety and comply with laws, we need to verify your identity. This is called the <strong class="text-secondary"><abbr title="Know Your Customer (identity verification)">KYC</abbr> process</strong>.
        </p>

        <h5 class="fw-bold"><i class="bi bi-check2-square text-success me-2"></i>Steps to complete a transfer:</h5>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item d-flex align-items-start bg-transparent">
                <i class="bi bi-1-circle-fill text-primary me-3 mt-1 fs-5"></i>
                <div>
                    <strong>Provide your details:</strong> Fill in your full legal name, ID, and address details.
                </div>
            </li>
            <li class="list-group-item d-flex align-items-start bg-transparent">
                <i class="bi bi-2-circle-fill text-primary me-3 mt-1 fs-5"></i>
                <div>
                    <strong>Identity Verification:</strong> We check your details against standard verification registers.
                </div>
            </li>
            <li class="list-group-item d-flex align-items-start bg-transparent">
                <i class="bi bi-3-circle-fill text-primary me-3 mt-1 fs-5"></i>
                <div>
                    <strong>Transaction Approval:</strong> Once approved, the transfer starts. This usually takes 1 to 2 business days.
                </div>
            </li>
        </ul>

        <div class="alert alert-warning d-flex align-items-center">
            <i class="bi bi-info-circle-fill me-3 fs-4"></i>
            <div>
                <strong>Important:</strong> If verification fails, your transfer will be blocked. Please ensure all names match your official ID document exactly.
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
