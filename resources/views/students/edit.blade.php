@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">

            <div class="card-header bg-warning">
                <h4 class="mb-0">Edit Student</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('students.update', $student->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    {{-- Name --}}
                    <div class="mb-3">

                        <label class="form-label">Name</label>

                        <input type="text"
                               name="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $student->name) }}"
                               placeholder="Enter Name">

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
                               class="form-control"
                               value="{{ $student->email }}"
                               disabled>

                        <small class="text-muted">
                            Email cannot be changed
                        </small>

                    </div>

                    {{-- Course --}}
                    <div class="mb-3">

                        <label class="form-label">Course</label>

                        <input type="text"
                               name="course"
                               class="form-control @error('course') is-invalid @enderror"
                               value="{{ old('course', $student->course) }}"
                               placeholder="Enter Course">

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
                                class="btn btn-warning">
                            Update Student
                        </button>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection