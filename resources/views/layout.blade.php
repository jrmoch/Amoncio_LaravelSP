<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <!-- Clickable Logo that redirects to Home -->
            <a href="{{ url('/') }}" class="logo">
                <i class="fas fa-graduation-cap"></i>
                <span>Student Portal</span>
            </a>
            
            <div class="nav-links">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="{{ route('students.index') }}" class="{{ request()->is('students') ? 'active' : '' }}">
                    <i class="fas fa-users"></i> Students
                </a>
                <a href="{{ route('students.create') }}" class="{{ request()->is('students/create') ? 'active' : '' }}">
                    <i class="fas fa-user-plus"></i> Add Student
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>