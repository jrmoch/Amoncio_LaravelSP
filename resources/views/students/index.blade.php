@extends('layout')

@section('content')
    <div class="student-list-page">
        <div class="page-header">
            <h1 class="page-title">Student List</h1>
            <a href="{{ route('students.create') }}" class="btn btn-primary">
                <i class="fas fa-user-plus"></i> Add New Student
            </a>
        </div>

        <div class="table-container">
            <table class="student-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Year Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane Doe</td>
                        <td>BS Computer Science</td>
                        <td>3rd Year</td>
                        <td class="actions">
                            <a href="{{ route('students.show', 1) }}" class="btn-action view">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('students.edit', 1) }}" class="btn-action edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>John Smith</td>
                        <td>BS Information Technology</td>
                        <td>2nd Year</td>
                        <td class="actions">
                            <a href="{{ route('students.show', 2) }}" class="btn-action view">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('students.edit', 2) }}" class="btn-action edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Alice Johnson</td>
                        <td>BS Business Administration</td>
                        <td>4th Year</td>
                        <td class="actions">
                            <a href="{{ route('students.show', 3) }}" class="btn-action view">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('students.edit', 3) }}" class="btn-action edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Bob Wilson</td>
                        <td>BS Nursing</td>
                        <td>1st Year</td>
                        <td class="actions">
                            <a href="{{ route('students.show', 4) }}" class="btn-action view">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('students.edit', 4) }}" class="btn-action edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection