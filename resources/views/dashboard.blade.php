<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StudentenBeheer - Dashboard</title>

    @vite(['resources/css/dashboard.css', 'resources/js/app.js'])
</head>

<body>

<div class="dashboard">

    <!-- =========================
         SIDEBAR
    ========================== -->

    <aside class="sidebar">

        <div class="sidebar-logo">
            <div class="logo-icon">
                🎓
            </div>

            <div>
                <h1>StudentenBeheer</h1>
                <span>Docenten Dashboard</span>
            </div>
        </div>


        <nav class="sidebar-navigation">

            <a href="#" class="nav-item active">
                <span class="nav-icon">⌂</span>
                <span>Dashboard</span>
            </a>

            <a href="#" class="nav-item">
                <span class="nav-icon">♧</span>
                <span>Studenten</span>
            </a>

            <a href="#" class="nav-item">
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

            <div class="leaf-icon">
                🌱
            </div>

            <div>
                <p>Een rustige omgeving</p>
                <span>voor beter leren</span>
            </div>

        </div>

    </aside>


    <!-- =========================
         MAIN
    ========================== -->

    <main class="main-content">

        <!-- HEADER -->

        <header class="topbar">

            <div></div>

            <div class="profile-area">

                <button class="notification-button">
                    ♧
                </button>

                <div class="profile-divider"></div>

                <div class="profile">

                    <div class="profile-avatar">
                        J
                    </div>

                    <div class="profile-information">
                        <strong>J. de Vries</strong>
                        <span>Docent</span>
                    </div>

                    <span class="profile-arrow">⌄</span>

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <div class="content">

            <!-- WELCOME -->

            <section class="welcome-section">

                <div>

                    <p class="welcome-small">
                        Goedemorgen, J. de Vries
                    </p>

                    <h2>
                        Welkom terug
                    </h2>

                    <p class="welcome-description">
                        Hier vind je een overzicht van je studenten en kun je snel nieuwe studenten registreren.
                    </p>

                </div>

                <div class="welcome-decoration">
                    🌿
                </div>

            </section>


            <!-- =========================
                 STATISTICS
            ========================== -->

            <section class="statistics-grid">

                <div class="stat-card">

                    <div class="stat-icon">
                        ♧
                    </div>

                    <span class="stat-title">
                        Totaal studenten
                    </span>

                    <strong class="stat-number">
                        24
                    </strong>

                    <span class="stat-change positive">
                        ↑ 3 deze week
                    </span>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ♙
                    </div>

                    <span class="stat-title">
                        Nieuwe inschrijvingen
                    </span>

                    <strong class="stat-number">
                        5
                    </strong>

                    <span class="stat-change positive">
                        ↑ 2 deze week
                    </span>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        🎓
                    </div>

                    <span class="stat-title">
                        Actieve klassen
                    </span>

                    <strong class="stat-number">
                        4
                    </strong>

                    <span class="stat-change neutral">
                        Geen wijziging
                    </span>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ▤
                    </div>

                    <span class="stat-title">
                        Afgeronde registraties
                    </span>

                    <strong class="stat-number">
                        18
                    </strong>

                    <span class="stat-change positive">
                        ↑ 5 deze week
                    </span>

                </div>

            </section>


            <!-- =========================
                 DASHBOARD GRID
            ========================== -->

            <div class="dashboard-grid">


                <!-- =========================
                     LEFT COLUMN
                ========================== -->

                <div class="left-column">


                    <!-- RECENT STUDENTS -->

                    <section class="dashboard-card">

                        <div class="card-header">

                            <h3>
                                Recente studenten
                            </h3>

                            <a href="#">
                                Bekijk alle →
                            </a>

                        </div>


                        <div class="table-container">

                            <table>

                                <thead>

                                <tr>
                                    <th>Naam</th>
                                    <th>Studentnummer</th>
                                    <th>Klas</th>
                                    <th>Status</th>
                                    <th>Datum</th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>

                                <tr>

                                    <td>
                                        <div class="student-name">
                                            <div class="student-avatar">S</div>
                                            Sophie de Jong
                                        </div>
                                    </td>

                                    <td>ST00123</td>

                                    <td>Klas 1A</td>

                                    <td>
                                        <span class="status active">
                                            Actief
                                        </span>
                                    </td>

                                    <td>12-04-2025</td>

                                    <td class="row-arrow">›</td>

                                </tr>


                                <tr>

                                    <td>
                                        <div class="student-name">
                                            <div class="student-avatar">R</div>
                                            Ruben Visser
                                        </div>
                                    </td>

                                    <td>ST00124</td>

                                    <td>Klas 1B</td>

                                    <td>
                                        <span class="status active">
                                            Actief
                                        </span>
                                    </td>

                                    <td>11-04-2025</td>

                                    <td class="row-arrow">›</td>

                                </tr>


                                <tr>

                                    <td>
                                        <div class="student-name">
                                            <div class="student-avatar">E</div>
                                            Emma Bakker
                                        </div>
                                    </td>

                                    <td>ST00125</td>

                                    <td>Klas 2A</td>

                                    <td>
                                        <span class="status active">
                                            Actief
                                        </span>
                                    </td>

                                    <td>10-04-2025</td>

                                    <td class="row-arrow">›</td>

                                </tr>


                                <tr>

                                    <td>
                                        <div class="student-name">
                                            <div class="student-avatar">N</div>
                                            Noah Jansen
                                        </div>
                                    </td>

                                    <td>ST00126</td>

                                    <td>Klas 2B</td>

                                    <td>
                                        <span class="status inactive">
                                            Inactief
                                        </span>
                                    </td>

                                    <td>09-04-2025</td>

                                    <td class="row-arrow">›</td>

                                </tr>


                                <tr>

                                    <td>
                                        <div class="student-name">
                                            <div class="student-avatar">L</div>
                                            Lotte Smit
                                        </div>
                                    </td>

                                    <td>ST00127</td>

                                    <td>Klas 3A</td>

                                    <td>
                                        <span class="status active">
                                            Actief
                                        </span>
                                    </td>

                                    <td>08-04-2025</td>

                                    <td class="row-arrow">›</td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </section>


                    <!-- LAST REGISTRATIONS -->

                    <section class="dashboard-card">

                        <div class="card-header">

                            <h3>
                                Laatste registraties
                            </h3>

                            <a href="#">
                                Bekijk alle →
                            </a>

                        </div>


                        <div class="table-container">

                            <table>

                                <thead>

                                <tr>
                                    <th>Datum</th>
                                    <th>Naam</th>
                                    <th>Klas</th>
                                    <th>Actie</th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>

                                <tr>
                                    <td>12-04-2025</td>
                                    <td>Sophie de Jong</td>
                                    <td>Klas 1A</td>
                                    <td>
                                        <span class="status active">
                                            Geregistreerd
                                        </span>
                                    </td>
                                    <td class="row-arrow">›</td>
                                </tr>

                                <tr>
                                    <td>11-04-2025</td>
                                    <td>Ruben Visser</td>
                                    <td>Klas 1B</td>
                                    <td>
                                        <span class="status active">
                                            Geregistreerd
                                        </span>
                                    </td>
                                    <td class="row-arrow">›</td>
                                </tr>

                                <tr>
                                    <td>10-04-2025</td>
                                    <td>Emma Bakker</td>
                                    <td>Klas 2A</td>
                                    <td>
                                        <span class="status active">
                                            Geregistreerd
                                        </span>
                                    </td>
                                    <td class="row-arrow">›</td>
                                </tr>

                                <tr>
                                    <td>09-04-2025</td>
                                    <td>Noah Jansen</td>
                                    <td>Klas 2B</td>
                                    <td>
                                        <span class="status inactive">
                                            Geannuleerd
                                        </span>
                                    </td>
                                    <td class="row-arrow">›</td>
                                </tr>

                                <tr>
                                    <td>08-04-2025</td>
                                    <td>Lotte Smit</td>
                                    <td>Klas 3A</td>
                                    <td>
                                        <span class="status active">
                                            Geregistreerd
                                        </span>
                                    </td>
                                    <td class="row-arrow">›</td>
                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </section>

                </div>


                <!-- =========================
                     RIGHT COLUMN
                ========================== -->

                <aside class="right-column">


                    <!-- REGISTER -->

                    <section class="action-card">

                        <div class="action-icon">
                            ＋
                        </div>

                        <h3>
                            Nieuwe student registreren
                        </h3>

                        <p>
                            Voeg snel een nieuwe student toe aan het systeem.
                        </p>

                        <a href="#" class="primary-button">
                            Student registreren
                            <span>→</span>
                        </a>

                    </section>


                    <!-- QUICK LINKS -->

                    <section class="dashboard-card quick-links">

                        <h3>
                            Snel naar
                        </h3>

                        <a href="#">
                            <span class="quick-icon">♧</span>
                            <span>Alle studenten</span>
                            <span>›</span>
                        </a>

                        <a href="#">
                            <span class="quick-icon">♧</span>
                            <span>Klassen beheren</span>
                            <span>›</span>
                        </a>

                        <a href="#">
                            <span class="quick-icon">▥</span>
                            <span>Rapportages bekijken</span>
                            <span>›</span>
                        </a>

                        <a href="#">
                            <span class="quick-icon">⚙</span>
                            <span>Instellingen</span>
                            <span>›</span>
                        </a>

                    </section>


                    <!-- HELP -->

                    <section class="help-card">

                        <div class="help-icon">
                            💡
                        </div>

                        <h3>
                            Hulp nodig?
                        </h3>

                        <p>
                            Bekijk de handleiding of neem contact op met de systeembeheerder.
                        </p>

                        <a href="#">
                            Bekijk handleiding →
                        </a>

                    </section>

                </aside>

            </div>

        </div>

    </main>

</div>

</body>
</html>