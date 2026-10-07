<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registreren - StudentenBeheer</title>
    @vite(['resources/css/dashboard.css', 'resources/js/app.js'])
</head>
<body>
<div class="dashboard">
    @include('partials.teacher-sidebar', ['activePage' => 'register'])

    <main class="main-content">
        @include('partials.teacher-topbar')

        <div class="content registration-page">
            <div class="page-heading">
                <div>
                    <p class="welcome-small">Studentenbeheer</p>
                    <h2>Nieuwe student registreren</h2>
                    <p class="welcome-description">Vul de gegevens in om een student aan je overzicht toe te voegen.</p>
                </div>
                <div class="welcome-decoration">🌿</div>
            </div>

            <section class="registration-card">
                <div class="registration-card-heading">
                    <div class="action-icon">＋</div>
                    <div>
                        <h3>Studentgegevens</h3>
                        <p>Velden met een sterretje zijn verplicht.</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('students.store') }}">
                    @csrf

                    <div class="form-grid">
                        <div class="form-field form-field-wide">
                            <label for="name">Volledige naam <span>*</span></label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                autocomplete="name"
                                required
                                maxlength="255"
                                aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}"
                                aria-describedby="{{ $errors->has('name') ? 'name-error' : '' }}"
                            >
                            @error('name')
                                <p class="field-error" id="name-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-field">
                            <label for="student_number">Studentnummer <span>*</span></label>
                            <input
                                id="student_number"
                                name="student_number"
                                type="text"
                                value="{{ old('student_number') }}"
                                required
                                maxlength="50"
                                aria-invalid="{{ $errors->has('student_number') ? 'true' : 'false' }}"
                                aria-describedby="{{ $errors->has('student_number') ? 'student-number-error' : '' }}"
                            >
                            @error('student_number')
                                <p class="field-error" id="student-number-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-field">
                            <label for="class_name">Klas <span>*</span></label>
                            <input
                                id="class_name"
                                name="class_name"
                                type="text"
                                value="{{ old('class_name') }}"
                                placeholder="Bijvoorbeeld klas 1A"
                                required
                                maxlength="100"
                                aria-invalid="{{ $errors->has('class_name') ? 'true' : 'false' }}"
                                aria-describedby="{{ $errors->has('class_name') ? 'class-name-error' : '' }}"
                            >
                            @error('class_name')
                                <p class="field-error" id="class-name-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-field form-field-wide">
                            <label for="email">E-mailadres <span class="optional-label">optioneel</span></label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                maxlength="255"
                                aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                                aria-describedby="{{ $errors->has('email') ? 'email-error' : '' }}"
                            >
                            @error('email')
                                <p class="field-error" id="email-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('dashboard') }}" class="secondary-button">Annuleren</a>
                        <button type="submit" class="primary-button">
                            Student opslaan
                            <span>→</span>
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>
</div>
</body>
</html>
