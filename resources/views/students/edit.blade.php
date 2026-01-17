@extends('layout')

@section('content')
    <div class="edit-student-page">
        <h1 class="page-title">Edit Student</h1>
        
        <div class="form-card">
            <form class="student-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="Jane Doe" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="jane@example.com" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="course">Course:</label>
                    <input type="text" id="course" name="course" value="BS Computer Science" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="year_level">Year Level:</label>
                    <input type="text" id="year_level" name="year_level" value="3rd Year" class="form-control">
                </div>
                
                <div class="form-actions">
                    <!-- Use Button Components -->
                    <x-button 
                        type="primary"
                        icon="save"
                        label="Update"
                    />
                    <x-button 
                        type="secondary"
                        href="{{ route('students.index') }}"
                        icon="times"
                        label="Cancel"
                    />
                </div>
            </form>
        </div>
    </div>
@endsection