@extends('layout')

@section('content')
    <div class="home-page">
        <div class="welcome-card">
            <h1 class="page-title">Welcome to the Student Portal</h1>
            <p class="system-description">
                This system allows you to manage student records, view profiles, and update information easily. 
                You can add new students, edit existing records, and track academic progress all in one place.
            </p>
            <div class="action-center">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-large">
                    <i class="fas fa-list"></i> Go to Student List
                </a>
            </div>
        </div>
    </div>
@endsection