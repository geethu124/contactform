@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">View Submission</h2>

    <div class="card">
        <div class="card-header">
            Submission Details
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $submission->name }}</p>
            <p><strong>Email:</strong> {{ $submission->email }}</p>
            <p><strong>Subject:</strong> {{ $submission->subject }}</p>
            <p><strong>Message:</strong> {{ $submission->message }}</p>
            <a href="{{ route('admin.submissions') }}" class="btn btn-secondary">Back to Submissions</a>
        </div>
    </div>
</div>

@endsection
