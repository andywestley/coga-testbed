document.addEventListener('DOMContentLoaded', () => {
    // Theme Switcher Logic
    const themeSelect = document.getElementById('theme-select');
    if (themeSelect) {
        // Load saved theme
        const savedTheme = localStorage.getItem('coga-theme') || 'light';
        themeSelect.value = savedTheme;
        document.documentElement.setAttribute('data-theme', savedTheme);

        themeSelect.addEventListener('change', (e) => {
            const theme = e.target.value;
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('coga-theme', theme);
        });
    }

    // Text Spacing Logic
    const textSpacingCheck = document.getElementById('text-spacing-check');
    if (textSpacingCheck) {
        // Load saved spacing state
        const savedSpacing = localStorage.getItem('coga-spacing') === 'true';
        textSpacingCheck.checked = savedSpacing;
        if (savedSpacing) {
            document.body.classList.add('text-spacing-large');
        }

        textSpacingCheck.addEventListener('change', (e) => {
            const enable = e.target.checked;
            if (enable) {
                document.body.classList.add('text-spacing-large');
            } else {
                document.body.classList.remove('text-spacing-large');
            }
            localStorage.setItem('coga-spacing', enable);
        });
    }

    // Dyslexic Font Logic
    const dyslexicFontCheck = document.getElementById('dyslexic-font-check');
    if (dyslexicFontCheck) {
        // Load saved state
        const savedFont = localStorage.getItem('coga-dyslexic') === 'true';
        dyslexicFontCheck.checked = savedFont;
        if (savedFont) {
            document.body.classList.add('font-dyslexic');
        }

        dyslexicFontCheck.addEventListener('change', (e) => {
            const enable = e.target.checked;
            if (enable) {
                document.body.classList.add('font-dyslexic');
            } else {
                document.body.classList.remove('font-dyslexic');
            }
            localStorage.setItem('coga-dyslexic', enable);
        });
    }
});
