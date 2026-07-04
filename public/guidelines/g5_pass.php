<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-pass mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-pass mb-2"><i class="bi bi-check-circle me-1"></i>PASS DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 5: Help users focus</h2>
            <p class="text-muted">
                <strong>Remediation Strategy:</strong> Clean distraction-free layouts, no blinking ads, and visible stop/pause controls for any running media elements.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g5_fail.php" class="fw-bold">Switch to the FAIL version</a> to see the comparison.
            </div>
        </div>
    </div>

    <div class="row g-3 justify-content-center">
        <div class="col-md-10 col-lg-8">
            <article class="border p-4 bg-white rounded shadow-sm">
                <h1 class="h3 fw-bold mb-4">Focus and the Mind</h1>
                
                <p class="lead">
                    Providing a clean, simple layout helps users focus. This page eliminates sidebars, pop-ups, and advertisements.
                </p>

                <!-- Media with visible user controls, default paused -->
                <div class="card my-4 border bg-light">
                    <div class="card-body">
                        <h2 class="h6 fw-bold mb-3"><i class="bi bi-music-note-beamed text-primary me-2"></i>Audio Accompaniment (Optional)</h2>
                        <p class="small text-muted">You can play this audio description to listen along to the text.</p>
                        <audio controls class="w-100">
                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>

                <p>
                    By keeping the content focused and layout uncluttered, users with cognitive or learning disabilities can easily process the information.
                </p>
            </article>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
