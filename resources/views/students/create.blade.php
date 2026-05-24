@extends('layouts/app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Add Student</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('students.store') }}" method="POST">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-3">
                        <label class="form-label">Name</label>

                        <input type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Enter Name"
                            value="{{ old('name') }}">

                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label class="form-label">Email</label>

                        <input type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Enter Email"
                            value="{{ old('email') }}">

                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- Course --}}
                    <div class="mb-3">
                        <label class="form-label">Course</label>

                        <input type="text"
                            name="course"
                            class="form-control @error('course') is-invalid @enderror"
                            placeholder="Enter Course"
                            value="{{ old('course') }}">

                        @error('course')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="{{ route('students.index') }}"
                            class="btn btn-secondary">
                            Back
                        </a>

                        <button type="submit"
                            class="btn btn-success">
                            Save Student
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection