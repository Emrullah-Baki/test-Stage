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
        <div class="leaf-icon">🌱</div>
        <div>
            <p>Een rustige omgeving</p>
            <span>voor beter leren</span>
        </div>
    </div>
</aside>
