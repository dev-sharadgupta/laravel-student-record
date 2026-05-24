@extends('layouts.app')

@section('content')

<div class="row mb-10">
    <div class="col-md-2">
        <h2>Students List</h2>
    </div>
    
    <div class="col-md-2">
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">
            Add Student
        </a>
    </div>
</div>


<form action="{{ route('students.index') }}" method="GET" class="mb-3">

    <div class="row">

        <div class="col-md-10">
            <input type="text"
                name="search"
                class="form-control"
                placeholder="Search students..."
                value="{{ $search }}">
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">
                Search
            </button>
        </div>

    </div>

</form>

<table class="table table-bordered table-striped">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>
            <a href="{{ route('students.edit', $student->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('students.destroy', $student->id) }}"
                method="POST"
                style="display:inline-block">

                @csrf
                @method('DELETE')

                <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to delete this student?')">

                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

<!-- {{ $students->links() }} -->
{{ $students->withQueryString()->links() }}

@endsection