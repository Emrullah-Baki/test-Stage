<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_teacher_can_open_the_student_registration_form(): void
    {
        $response = $this->get(route('students.create'));

        $response->assertOk()
            ->assertSee('Nieuwe student registreren')
            ->assertSee('Student opslaan')
            ->assertSee('name="_token"', false);
    }

    public function test_student_can_be_registered_and_is_persisted(): void
    {
        $response = $this->post(route('students.store'), [
            'name' => 'Sophie de Jong',
            'student_number' => 'ST00123',
            'email' => 'sophie@example.nl',
            'class_name' => 'Klas 1A',
        ]);

        $response->assertRedirectToRoute('dashboard')
            ->assertSessionHas('success', 'De student is succesvol toegevoegd.');

        $this->assertDatabaseHas('students', [
            'name' => 'Sophie de Jong',
            'student_number' => 'ST00123',
            'email' => 'sophie@example.nl',
            'class_name' => 'Klas 1A',
            'status' => 'active',
        ]);
    }

    public function test_required_student_fields_are_validated(): void
    {
        $response = $this->post(route('students.store'), []);

        $response->assertSessionHasErrors(['name', 'student_number', 'class_name']);
        $this->assertDatabaseCount('students', 0);
    }

    public function test_student_number_must_be_unique(): void
    {
        Student::create([
            'name' => 'Sophie de Jong',
            'student_number' => 'ST00123',
            'class_name' => 'Klas 1A',
        ]);

        $response = $this->post(route('students.store'), [
            'name' => 'Ruben Visser',
            'student_number' => 'ST00123',
            'class_name' => 'Klas 1B',
        ]);

        $response->assertSessionHasErrors([
            'student_number' => 'Dit studentnummer is al in gebruik.',
        ]);
        $this->assertDatabaseCount('students', 1);
    }

    public function test_dashboard_shows_saved_student_data_and_live_statistics(): void
    {
        Student::create([
            'name' => 'Sophie de Jong',
            'student_number' => 'ST00123',
            'class_name' => 'Klas 1A',
        ]);

        $response = $this->get(route('dashboard'));

        $response->assertOk()
            ->assertSee('Sophie de Jong')
            ->assertSee('ST00123')
            ->assertSee('Klas 1A')
            ->assertViewHas('studentCount', 1);
    }
}
