@extends('layout')

@section('content')
    <div class="student-profile-page">
        <h1 class="page-title">Student Profile</h1>
        
        <div class="profile-card">
            <div class="profile-info">
                <div class="info-row">
                    <span class="label">Name:</span>
                    <span class="value">Jane Doe</span>
                </div>
                <div class="info-row">
                    <span class="label">Email:</span>
                    <span class="value">jane@example.com</span>
                </div>
                <div class="info-row">
                    <span class="label">Course:</span>
                    <span class="value">BS Computer Science</span>
                </div>
                <div class="info-row">
                    <span class="label">Year Level:</span>
                    <span class="value">3rd Year</span>
                </div>
            </div>
            
            <div class="action-buttons">
                <!-- Use Button Component -->
                <x-button 
                    type="secondary"
                    href="{{ route('students.index') }}"
                    icon="arrow-left"
                    label="Back to Student List"
                />
            </div>
        </div>
    </div>
@endsection