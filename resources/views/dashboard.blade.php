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

    @include('partials.teacher-sidebar', ['activePage' => 'dashboard'])


    <!-- =========================
         MAIN
    ========================== -->

    <main class="main-content">

        <!-- HEADER -->

        @include('partials.teacher-topbar')


        <!-- CONTENT -->

        <div class="content">

            @if (session('success'))
                <div class="success-message" role="status">{{ session('success') }}</div>
            @endif

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
                        {{ $studentCount }}
                    </strong>

                    <span class="stat-change positive">
                        Geregistreerde studenten
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
                        {{ $newStudentCount }}
                    </strong>

                    <span class="stat-change positive">
                        Deze week
                    </span>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        🎓
                    </div>

                    <span class="stat-title">
                        Verschillende klassen
                    </span>

                    <strong class="stat-number">
                        {{ $classCount }}
                    </strong>

                    <span class="stat-change neutral">
                        Unieke klassen
                    </span>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ▤
                    </div>

                    <span class="stat-title">
                        Inschrijvingen deze maand
                    </span>

                    <strong class="stat-number">
                        {{ $monthlyStudentCount }}
                    </strong>

                    <span class="stat-change positive">
                        Deze maand
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

                            <a href="{{ route('students.create') }}">
                                Student toevoegen →
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
                                @forelse ($students as $student)
                                    <tr>
                                        <td>
                                            <div class="student-name">
                                                <div class="student-avatar">{{ mb_substr($student->name, 0, 1) }}</div>
                                                {{ $student->name }}
                                            </div>
                                        </td>
                                        <td>{{ $student->student_number }}</td>
                                        <td>{{ $student->class_name }}</td>
                                        <td>
                                            <span class="status active">Actief</span>
                                        </td>
                                        <td>{{ $student->created_at->format('d-m-Y') }}</td>
                                        <td class="row-arrow">›</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="empty-table-message">Er zijn nog geen studenten geregistreerd.</td>
                                    </tr>
                                @endforelse
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

                            <a href="{{ route('students.create') }}">
                                Student toevoegen →
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
                                @forelse ($students as $student)
                                    <tr>
                                        <td>{{ $student->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->class_name }}</td>
                                        <td><span class="status active">Geregistreerd</span></td>
                                        <td class="row-arrow">›</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="empty-table-message">Er zijn nog geen registraties.</td>
                                    </tr>
                                @endforelse
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

                        <a href="{{ route('students.create') }}" class="primary-button">
                            Student registreren
                            <span>→</span>
                        </a>

                    </section>


                    <!-- QUICK LINKS -->

                    <section class="dashboard-card quick-links">

                        <h3>
                            Snel naar
                        </h3>

                        <a href="{{ route('students.create') }}">
                            <span class="quick-icon">♧</span>
                            <span>Nieuwe student toevoegen</span>
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