<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="col-md-9">
    <div class="card card-fail mb-4 shadow-sm">
        <div class="card-body">
            <span class="badge badge-fail mb-2"><i class="bi bi-x-circle me-1"></i>FAIL DEMONSTRATION</span>
            <h2 class="card-title fw-bold">Guideline 5: Help users focus</h2>
            <p class="text-muted">
                <strong>Failure Indicators:</strong> Blinking alerts, autoplaying sounds, pop-ups interrupting task flow, and cluttered structures.
            </p>
            <div class="alert alert-info">
                <i class="bi bi-arrow-right-circle-fill me-2"></i>
                <a href="/guidelines/g5_pass.php" class="fw-bold">Switch to the PASS (remediated) version</a> to see how this should be designed.
            </div>
        </div>
    </div>

    <!-- Flashing Banner Fail -->
    <div class="g5-annoying-banner">
        🔥 FLASH SALE! SIGN UP NOW TO GET 50% OFF FOR THE NEXT 10 MINUTES! 🔥
    </div>

    <div class="row g-3">
        <div class="col-md-8">
            <div class="border p-4 bg-white rounded shadow-sm">
                <h4 class="mb-3">Read Article: Focus and the Mind</h4>
                <p>
                    For people with ADHD, focusing on dense content is difficult when there are moving parts.
                </p>
                
                <!-- Autoplay audio/video with no controls -->
                <div class="bg-light p-3 border rounded my-3">
                    <p class="fw-bold mb-1"><i class="bi bi-volume-up-fill text-danger me-2"></i>Background Sound Loop (Autoplay, No Controls)</p>
                    <audio src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" autoplay loop style="display: none;"></audio>
                    <small class="text-danger">A song is currently playing in the background with no visual audio controls to turn it off.</small>
                </div>

                <p>
                    This is another paragraph of the text. Imagine trying to read this while a dynamic flashing banner blinks above and music plays automatically.
                </p>
            </div>
        </div>
        
        <div class="col-md-4">
            <!-- Distracting sidebar ads -->
            <div class="card bg-warning text-dark border-danger mb-3">
                <div class="card-body text-center">
                    <h5 class="fw-bold">HOT OFFERS!</h5>
                    <p class="small">Click here now for premium access!</p>
                    <button class="btn btn-danger btn-sm w-100">JOIN</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
