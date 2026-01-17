<nav class="navbar">
    <div class="nav-container">
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