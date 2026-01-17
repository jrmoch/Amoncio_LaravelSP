@extends('layout')

@section('content')
    <div class="student-list-page">
        <div class="page-header">
            <h1 class="page-title">Student List</h1>
            <!-- Use Button Component -->
            <x-button 
                type="primary" 
                href="{{ route('students.create') }}"
                icon="user-plus"
                label="Add New Student"
            />
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
                            <!-- Use Button Components for actions -->
                            <x-button 
                                type="primary" 
                                href="{{ route('students.show', 1) }}"
                                icon="eye"
                                label="View"
                                size="sm"
                            />
                            <x-button 
                                type="warning" 
                                href="{{ route('students.edit', 1) }}"
                                icon="edit"
                                label="Edit"
                                size="sm"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>John Smith</td>
                        <td>BS Information Technology</td>
                        <td>2nd Year</td>
                        <td class="actions">
                            <x-button 
                                type="primary" 
                                href="{{ route('students.show', 2) }}"
                                icon="eye"
                                label="View"
                                size="sm"
                            />
                            <x-button 
                                type="warning" 
                                href="{{ route('students.edit', 2) }}"
                                icon="edit"
                                label="Edit"
                                size="sm"
                            />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection