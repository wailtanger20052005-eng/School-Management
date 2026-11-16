@extends('layout')
@section('content')
<div class="container mt-4">
    <h3>Edit Student</h3>

    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Section</label>
            <input type="text" name="section" value="{{ $student->section }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image (laisser vide pour garder l'actuelle)</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('images/'.$student->image) }}" width="80" class="mt-2" alt="Current photo">
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection