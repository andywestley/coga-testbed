<?php
// Determine the base path relative to current file for deep directories
$base_path = '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Silktide Consent -->
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('consent', 'default', {
      'analytics_storage': localStorage.getItem('stcm.consent.analytics') === 'true' ? 'granted' : 'denied',
      'ad_storage': localStorage.getItem('stcm.consent.marketing') === 'true' ? 'granted' : 'denied',
      'ad_user_data': localStorage.getItem('stcm.consent.marketing') === 'true' ? 'granted' : 'denied',
      'ad_personalization': localStorage.getItem('stcm.consent.marketing') === 'true' ? 'granted' : 'denied',
      'wait_for_update': 500
    });
    </script>
    <!-- End Silktide Consent -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NFSRSZ7C');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGA Cognitive Accessibility Testbed</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom Style Sheet -->
    <link href="<?php echo $base_path; ?>css/style.css?v=<?php echo filemtime(__DIR__ . '/../css/style.css'); ?>" rel="stylesheet">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFSRSZ7C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid px-4">
                <a class="navbar-brand d-flex align-items-center" href="<?php echo $base_path; ?>">
                    <i class="bi bi-person-fill-check me-2 text-primary fs-3"></i>
                    <strong>COGA Testbed</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $base_path; ?>"><i class="bi bi-house-door-fill me-1"></i> Dashboard</a>
                        </li>
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                            <!-- Accessibility Theme Picker -->
                            <div class="input-group input-group-sm">
                                <label class="input-group-text" for="theme-select"><i class="bi bi-palette-fill"></i></label>
                                <select class="form-select form-select-sm" id="theme-select" aria-label="Choose theme">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                    <option value="high-contrast">High Contrast</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid my-4 main-content">
        <div class="row px-md-4">
