<aside class="sidebar">
    <div class="sidebar-logo">
        <div class="logo-icon">🎓</div>
        <div>
            <h1>StudentenBeheer</h1>
            <span>Docenten Dashboard</span>
        </div>
    </div>

    <nav class="sidebar-navigation">
        <a href="{{ route('dashboard') }}" class="nav-item {{ ($activePage ?? '') === 'dashboard' ? 'active' : '' }}">
            <span class="nav-icon">⌂</span>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('dashboard') }}" class="nav-item">
            <span class="nav-icon">♧</span>
            <span>Studenten</span>
        </a>
        <a href="{{ route('students.create') }}" class="nav-item {{ ($activePage ?? '') === 'register' ? 'active' : '' }}">
            <span class="nav-icon">＋</span>
            <span>Registreren</span>
        </a>
        <a href="#" class="nav-item">
            <span class="nav-icon">♧</span>
            <span>Klassen</span>
        </a>
        <a href="#" class="nav-item">
            <span class="nav-icon">▥</span>
            <span>Rapporten</span>
        </a>
        <a href="#" class="nav-item">
            <span class="nav-icon">⚙</span>
            <span>Instellingen</span>
        </a>
    </nav>

    <div class="sidebar-bottom">
        <div class="sidebar-theme">
            <span class="sidebar-theme-label">Thema</span>
            <button
                class="theme-toggle"
                type="button"
                data-theme-toggle
                aria-label="Donkere modus inschakelen"
                aria-pressed="false"
            >
                <span class="theme-toggle-track" aria-hidden="true">
                    <span class="theme-toggle-thumb">
                        <svg class="theme-icon theme-icon-sun" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="12" cy="12" r="3.5"></circle>
                            <path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"></path>
                        </svg>
                        <svg class="theme-icon theme-icon-moon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20.2 15.1A8.5 8.5 0 0 1 8.9 3.8 8.5 8.5 0 1 0 20.2 15.1Z"></path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>

        <div class="sidebar-bottom-content">
            <div class="leaf-icon">🌱</div>
            <div>
                <p>Een rustige omgeving</p>
                <span>voor beter leren</span>
            </div>
        </div>
    </div>
</aside>
