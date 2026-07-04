<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 3: Use clear and understandable content</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> High lexical density, complex sentences, unexplained abbreviations, and dense paragraphs with no line heights or formatting structure.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g3_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <div class="border p-4 bg-white rounded shadow-sm">
        <h4 class="mb-3">Financial Transaction Processing Protocol</h4>
        <!-- Wall of text, jargon, unexplained abbreviations -->
        <p style="text-align: justify; line-height: 1.0; font-size: 13px;">
            The implementation of the ACH (Automated Clearing House) mechanism necessitates the absolute configuration of corresponding routing parameters via the secure localized server gateway interface, which may periodically result in asynchronous processing latency anomalies. Users who intend to process clearing requests must substantiate their primary eligibility indicators by certifying that their identification parameters conform with strict KYC regulations and AML stipulations. Failure to observe the aforementioned protocols will precipitate immediate trans-border denial of transactions and prompt systemic termination of the registration instance.
        </p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
