import '../css/dashboard.css';

const themeToggle = document.querySelector('[data-theme-toggle]');

if (themeToggle instanceof HTMLButtonElement) {
    const updateThemeToggle = () => {
        const isDarkMode = document.documentElement.dataset.theme === 'dark';

        themeToggle.setAttribute('aria-pressed', String(isDarkMode));
        themeToggle.setAttribute(
            'aria-label',
            isDarkMode ? 'Lichte modus inschakelen' : 'Donkere modus inschakelen',
        );
    };

    updateThemeToggle();

    themeToggle.addEventListener('click', () => {
        const isDarkMode = document.documentElement.dataset.theme !== 'dark';

        document.documentElement.dataset.theme = isDarkMode ? 'dark' : 'light';
        localStorage.setItem('studentenbeheer-theme', isDarkMode ? 'dark' : 'light');
        updateThemeToggle();
    });
}
