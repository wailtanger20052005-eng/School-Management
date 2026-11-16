@extends('layout')
@section('content')
<div class="container mt-4">
    <h3>Student Details</h3>

    <table style="border: 0px;">
        <tr>
            <td>
                <p><b class="lbl">ID :</b> {{ $student->id }}</p>
                <p><b class="lbl">Name :</b> {{ $student->name }}</p>
                <p><b class="lbl">Phone :</b> {{ $student->phone }}</p>
                <p><b class="lbl">Email :</b> {{ $student->email }}</p>
                <p><b class="lbl">Section :</b> {{ $student->section }}</p>
            </td>
            <td style="padding-left: 30px;">
                <img src="{{ asset('images/'.$student->image) }}" width="128" height="128" alt="Photo">
            </td>
        </tr>
    </table>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection